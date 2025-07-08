<?php


use App\Models\Media;
use App\Models\Country;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use App\Models\Pages;





if (!function_exists('getBaseURL')) {
    function getBaseURL()
    {
        // $root = '//' . $_SERVER['HTTP_HOST'];
        //  $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        return url('/');
    }
}


if (!function_exists('getFileBaseURL')) {
    function getFileBaseURL()
    {
        if (env('FILESYSTEM_DRIVER') == 's3') {
            return env('AWS_URL') . '/';
        } else {
            return getBaseURL() . '/public/';
        }
    }
}

if (!function_exists('option_dropdown')) {
    function option_dropdown($categories, $level = 1, $selected = '')
    {
        $result = '';
        foreach ($categories as $category) {
            echo  "<option value='" . $category->id . "'";
            echo ($category->id == $selected) ? 'selected' : '';
            echo ">" . str_repeat("-", $level) . $category->name . "</option>";
            // if(!empty($category->children)){
            //     option_dropdown($category->children, ++$level,$selected='');
            // }
        }
    }
}

function get_page_setting($page, $key, $default = null) {
    return Pages::where('page_name', $page)->where('key', $key)->value('value') ?? $default;
}

/**
 * MiniCart Settings
 *
 * @author Victor Tin <victor@stormcelltech.com>
 * @return mixed array $setting
 *
 */

if (!function_exists('get_setting')) {
    function get_setting($key, $default = null, $lang = false)
    {

        $settings = Cache::remember('get_settings', 86400, function () {
            return Setting::all();
        });

        $setting = $settings->where('name', $key)->first();


        return $setting == null ? $default : $setting->value;
    }
}


if (!function_exists('upload_url')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool|null $secure
     * @return bool|fasle $thumb
     * @return string
     */
    function upload_url($filename, bool $secure = false, bool $thumb = false)
    {
        if (env('FILESYSTEM_DRIVER') == 's3') {
            if ($thumb) {
                return Storage::disk('s3')->url('uploads/thumb/' . $filename);
            } else {
                return Storage::disk('s3')->url('uploads/' . $filename);
            }
        } else {
            if ($thumb) {
                return app('url')->asset('storage/uploads/thumb/' . $filename);
            } else {
                return app('url')->asset('storage/uploads/' . $filename);
            }
        }
    }
}


if (!function_exists('formatBytes')) {
    function formatBytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}

// if (!function_exists('getLogo')) {
//     function getLogo(string $logo = "mainlogo_white")
//     {
//         //  get_setting($logo);

//         $logo = Media::whereId(get_setting($logo))->first();


//         return (object) ['large' => upload_url($logo?->filename), 'thumb' => upload_url($logo?->filename, true, true)];
//     }
// }




// if (!function_exists('getMedia')) {
//     function getMedia(int $id)
//     {

//         if ($id > 0) {
//             $media = Media::whereId($id)->first();
//             return (object) ['large' => upload_url($media?->filename), 'thumb' => upload_url($media?->filename, true, true)];
//         } else {
//             return (object) ['large' => upload_url('default-user.jpg', true, true), 'thumb' => upload_url('default-user.jpg', true, true)];
//         }
//     }
// }
/**
 * Get countries
 * @return array|object
 */
if (!function_exists('get_countries')) {

    function get_countries($id = null, $status = null,)
    {
        $countries = Cache::remember('get_countries', 86400, function () {
            return Country::all();
        });

        if ($id != null) {
            $countries = $countries->where('id', $id)->first();
        }
        if ($status != null) {
            $countries = $countries->where('status', $id)->first();
        }



        return $countries == null ? null : $countries;
    }
}
/**
 * overWrite the Env File values.
 * @param  String type
 * @param  String value
 * @return \Illuminate\Http\Response
 */
if (!function_exists('changeEnvironmentVariable')) {
    function changeEnvironmentVariable($key, $value)
    {
        $path = base_path('.env');

        if (is_bool(env($key))) {
            $old = env($key) ? 'true' : 'false';
        } elseif (env($key) === null) {
            $old = 'null';
        } else {
            $old = env($key);
        }


        $count = 0;
        //   $path = base_path('.env');
        if (file_exists($path)) {

            $value = '"' . trim($value) . '"';

            if (is_numeric(strpos(file_get_contents($path), $key)) && strpos(file_get_contents($path), $key) >= 0) {

                $update = str_replace($key . '="' . env($key) . '"', "$key=" . $value, file_get_contents($path), $count);


                if ($count <= 0) {
                    $update = str_replace("$key=" . $old, "$key=" . $value, file_get_contents($path));
                }

                file_put_contents($path, $update);
            } else {

                file_put_contents($path, file_get_contents($path) . "\r\n" . $key . '=' . $value);
            }
        }
    }
}
if (!function_exists('str_wrap')) {
    function str_wrap($string = '', $char = '"')
    {
        return str_pad($string, strlen($string) + 2, $char, STR_PAD_BOTH);
    }
}

/**
 * Get Next auto increment
 * @param string $table Name
 * @reutn Get next auto increment
 *
 */

if (!function_exists('nextAutoIdentifier')) {
    function nextAutoIdentifier(string $table)
    {
        $dbtx = DB::select("SHOW TABLE STATUS LIKE '{$table}'");
        $nextID = $dbtx[0]->Auto_increment;

        return $nextID;
    }
}
