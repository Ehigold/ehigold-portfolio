@props([
    'name' => 'logo',
    'btnName' => 'Upload Image',
    'type' => 'single',
    'id' => 'imageupload',
    'title' => 'Image Upload',
    'uploadWrapper' => 'uploadWrapper',
    'content' => [],
])

<div class="w-full mb-4">


    <x-input-label for="fileUpload" :value="$title"
        class="block mb-4 font-medium text-gray-900 text-md dark:text-white " />
    <div class="relative mb-2">
        <!-- Modal toggle -->
        <button x-data data-modal-target="default-modal" data-modal-toggle="default-modal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            {{ $btnName }}
        </button>

        <!-- Main modal -->
        <div x-data="{
            loading: false,
            response: {},
            Images: [],
            search: '',
            type: '{{ $type }}',
            async getGallery(event) {
                this.response = await (await fetch('/media/get/json', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                    }

                })).json();
                if (this.response.status == 200) {
                    this.loading = false;
                    this.Images = this.response.data.data;

                }
            },
            async searchGallery(event) {
                this.response = await (await fetch('/media/' + this.search + '/search', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                    }

                })).json();
                if (this.response.status == 200) {
                    this.loading = false;
                    this.Images = this.response.data.data;

                }
            },
            addImage(event) {
                event.target.parentNode.classList.add('border-blue-900', 'border-2');
                let imageWraper = document.getElementById('{{ $uploadWrapper }}');
                let newdiv = document.createElement('div');
                let input = document.createElement('input');
                let image = document.createElement('img');
                let button = document.createElement('button');

                newdiv.className = 'w-full relative  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700';
                button.type = 'button';
                button.className = 'inline-block delete-icon absolute top-0 right-0  block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white';

                button.onclick = function(e) {
                    e.preventDefault();
                    e.target.parentNode.remove();
                }
                input.type = 'hidden';
                input.value = event.target.id;
                input.name = '{{ $name }}';

                image.src = event.target.value;
                if (this.type == 'multiple') {
                    newdiv.appendChild(button);
                }
                newdiv.appendChild(input);
                newdiv.appendChild(image);


                if (this.type == 'multiple') {
                    imageWraper.innerHTML = '';
                    imageWraper.appendChild(newdiv);
                } else {
                    imageWraper.innerHTML = ' .';
                    imageWraper.innerHTML = newdiv.innerHTML;
                }

                $dispatch('notice', { type: 'success', text: 'Image Added Successful' });

            },
            async deleteImage(event) {
                this.response = await (await fetch('/media/' + event.target.value + '/delete', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                    }

                })).json();
                if (this.response.status == 200) {
                    this.loading = false;

                    event.target.parentNode.remove();
                    $dispatch('notice', { type: 'success', text: this.response.message });

                }
                if (this.response.status == 400) {


                    $dispatch('notice', { type: 'error', text: this.response.message });
                }

            }
        }" id="default-modal" data-modal-backdrop="static" data-modal-closable="true"
            tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full max-h-full overflow-x-hidden overflow-y-auto md:inset-0">
            <div class="relative w-full max-h-full max-w-7xl">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Uploader
                        </h3>
                        <button type="button"
                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 space-y-4 md:p-5">



                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                                data-tabs-toggle="#default-styled-tab-content"
                                data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                                data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                                role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="upload-styled-tab"
                                        data-tabs-target="#styled-upload" type="button" role="tab"
                                        aria-controls="upload" aria-selected="false">Upload</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button x-on:click="loading =! loading" @click="getGallery"
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="loadGallery-styled-tab" data-tabs-target="#styled-loadGallery"
                                        type="button" role="tab" aria-controls="loadGallery"
                                        aria-selected="false">Upload Library</button>
                                </li>

                            </ul>
                        </div>
                        <div id="default-styled-tab-content">
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-upload"
                                role="tabpanel" aria-labelledby="upload-tab">
                                <div id="uploader" data-url=""></div>
                                {{--  <div id="progress-bar"></div>
                                <div class="uploadi-section">


                                    <div data-url="{{ route('media.upload') }}"
                                        class="flex flex-col items-center justify-center py-10 text-center uploaderWrap">
                                        <input class="file-input" id="fileElem" type="file" multiple hidden>
                                        <svg class="w-6 h-6 mr-1 dark:text-gray-200 text-current-50"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <p class="m-0 dark:text-gray-200">Drag your files here or click in this area.
                                        </p>
                                    </div>
                                    <section class="grid grid-cols-4 gap-4 mb-4 progress-area">

                                    </section>
                                    <section class="grid grid-cols-2 gap-4 mb-4 uploaded-area"></section>
                                </div>  --}}

                            </div>
                            <div class="hidden rounded-lg" id="styled-loadGallery" role="tabpanel"
                                aria-labelledby="loadGallery-tab">
                                <div class="grid w-full grid-cols-2 gap-4">
                                    <div class="">
                                        <div role="status" x-cloak x-show="loading">
                                            <svg aria-hidden="loading"
                                                class="w-5 text-gray-200 h- animate-spin dark:text-gray-600 fill-blue-600"
                                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                    fill="currentFill" />
                                            </svg>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="justify-end search-box">

                                        <div class="max-w-lg col-span-2 mx-auto">
                                            <label for="default-search"
                                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                    </svg>
                                                </div>
                                                <input type="search" id="default-search" @keyup="searchGallery"
                                                    x-model="search"
                                                    class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Search Mockups, Logos..." />
                                                <button type="button" x-on:click="loading =! loading"
                                                    @click="searchGallery"
                                                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="w-full py-3 w-full-width bg-gray-50 dark:bg-gray-800">
                                    <div class="grid grid-cols-5 gap-4">
                                        <template x-for="image in Images" :key="image.id">


                                            <div :id="image.id" :data-imageThumb="image.thumb"
                                                class="relative w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow addImage dark:bg-gray-800 dark:border-gray-700">

                                                <button :value="image.id" x-on:click="deleteImage"
                                                    class="absolute top-0 right-0 block inline-block px-4 py-2 text-sm text-red-600 deleteImage delete-icon hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                                    type="button">
                                                </button>


                                                <div class="flex flex-col items-center pb-10">
                                                    <button :id="image.id" :value="image.thumb"
                                                        x-on:click="addImage"
                                                        class="absolute top-0 left-0 block inline-block px-4 py-2 text-sm text-red-600 plus-icon addImage hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                                        type="button">

                                                    </button>
                                                    <img class="w-full mb-3 rounded-sm" :src="image.thumb"
                                                        :alt="image.filename" />
                                                    <h5 class="absolute bottom-0 w-full p-3 overflow-hidden font-medium text-center text-gray-100 mb-block text-overflow-ellipsis text-ms bg-gray-950/80 dark:text-white"
                                                        x-text="image.filename">Bonnie Green</h5>
                                                </div>


                                            </div>
                                        </template>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <div id="{{ $uploadWrapper }}" class="relative grid w-full grid-cols-5 gap-4 ">
        @if (isset($content))

            @if ($type == 'multiple')
                <button type="button"
                    class="absolute top-0 right-0 block inline-block px-4 py-2 text-sm text-red-600 delete-icon hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"></button>
            @endif
            <input type="hidden" value="{{ $content['id'] ?? '' }}" name="{{ $name }}">
            <img src="{{ $content['image'] ?? asset('images/default/default-image.svg') }}"
                onerror="{{ asset('images/default/default-image.svg') }}">
        @endif
    </div>
    <x-input-error :messages="$errors->get($name)" class="mt-2" />

</div>
