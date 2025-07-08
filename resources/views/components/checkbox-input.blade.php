@props(['disabled' => false,'id'=>'1', 'name'=>'checkbox','value'=>'0', 'title'=>'Enable'])

<label {!! $attributes->merge(['class' => 'inline-flex items-center mb-3 mt-3 cursor-pointer']) !!}
   for="defaultToggle-{{ $id }}" >
    <input {{ $disabled ? 'disabled' : '' }}  id="defaultToggle-{{ $id }}" name="{{ $name }}" type="checkbox"  role="switch"  @if($value=="1")
    checked="checked"
    @endif value="1" class="sr-only peer ">
    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:bg-[#dc4341] focus:ring-bg-[#dc4341] rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#dc4341]"></div>
    <span class="font-medium text-gray-900 ms-3 text-1xl dark:text-gray-300">{{ $title }}</span>
  </label>
