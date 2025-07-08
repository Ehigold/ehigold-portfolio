
<footer class="p-4 mx-4 my-6 bg-gray-900 border-gray-700 rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 xl:p-8">
    <ul class="flex flex-wrap items-center mb-6 space-y-1 md:mb-0">
    {{-- <li><a href="{{ route('page.show','terms-and-conditions') }}" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Terms and conditions</a></li>
    <li><a href="{{ route('page.show','privacy-policy') }}" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Privacy Policy</a></li>

    <li><a href="{{ route('page.show','cookie-policy') }}" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Cookie Policy</a></li>
    <li><a href="{{ route('contact') }}" class="text-sm font-normal text-gray-500 hover:underline dark:text-gray-400">Contact</a></li> --}}
</ul>
<div class="flex space-x-6 sm:justify-center">
    <a href="{{ get_setting('facebook')??'#' }}" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
        </svg>
    </a>
    <a href="{{ get_setting('instagram')??'#' }}" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
        </svg>
    </a>
    <a href="{{ get_setting('twitter')??'#' }}" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
        </svg>
    </a>
    <a href="{{ get_setting('youtube')??'#' }}" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
          </svg>

    </a>

</div>
</footer>
<p class="my-10 text-sm text-center text-gray-500">
&copy; {{ date('Y') }} <a href="{{ route('home') }}" class="hover:underline" target="_blank">{{ get_setting('sitename')??''  }}</a>. All rights reserved.
</p>

</div>

</div>


<div
style="z-index: 9999999999; display:none;" class="fixed left-0 flex items-center justify-between w-full p-5 mt-5 leading-normal text-red-600 bg-red-100 rounded-lg error-alert bottom-5 md:w-1/4" role="alert">
<div
class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 mr-2 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
  viewBox="0 0 20 20">
  <path
      d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
</svg>
<span class="sr-only">Check icon</span>
</div><div
class="inline-flex items-center w-full pr-2 justify-left"> <strong>Error !</strong> <span class="pl-3 message"></span></div>


</div>
<!-- success message -->

<div
style="z-index: 9999999999; display:none;" class="fixed left-0 flex items-center justify-between w-full p-5 mt-5 leading-normal text-green-600 bg-green-100 rounded-lg success-alert bottom-5 md:w-1/4" role="alert">
<div
class="inline-flex items-center justify-center flex-shrink-0 w-auto h-8 mr-2 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
  viewBox="0 0 20 20">
  <path
      d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
</svg>
<span class="sr-only">Check icon</span>
</div><div
class="inline-flex items-center w-full pr-2 justify-left"> <strong>Success !</strong> <span class="pl-3 message"></span></div>


</div>


</div>


@yield('modal')


@yield('scripts')
@stack('scripts')
<script type="module">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    $(document).on('click','.openModal',function(event){
        event.preventDefault();
        let editModal =$('#loadModal');
        if(editModal.hasClass('hidden')){
            editModal.removeClass('hidden');
            editModal.addClass('flex');
            editModal.attr("aria-modal","true");
            editModal.attr("role","dialog");
        }

            let id = $(this).data('id');
            let title = $(this).data('title');
            let url = $(this).data('url');
            editModal.find('.modal-title').html(title);
            editModal.find('.modal-content').html("<i class='mt-1 mr-3 fa-solid fa-circle-notch fa-spin'></i> Please wait...").show();
            $.get(url,function(response){
               editModal.find('.modal-content').html(response);

          });
     })
    $(document).on('click','.SubmitForm',function(e){
        e.preventDefault();

        let form=$(this).closest("form");
        let action = $(this).closest("form").attr("action");
        let btn=$(this);
        let btntext = $(this).data('text');

        btn.html("<i class='mt-1 mr-3 fa-solid fa-circle-notch fa-spin'></i> Please wait...").show();


        $.post(action,form.serialize(),function(response){

            if(response.status==200){

                $(".success-alert").find('.message').html(response.message);
                $(".success-alert").show().delay(5000).queue(function(n) {
                    $(this).hide(); n();
                  });

                  if(btn.data('is')=='add'){
                   }

                  if(response.hasOwnProperty('data').hasOwnProperty('nextpage')){
                    let editModal =$('#loadModal');
                    editModal.find('.modal-content').html("<i class='mt-1 mr-3 fa-solid fa-circle-notch fa-spin'></i> Please wait...").show();
                    $.get(response.data.nextpage,function(response){
                       editModal.find('.modal-content').html(response);

                  });
                  }

                  btn.text(btntext);
                  btn.attr('disabled',false);
                  if(typeof dataTable !== 'undefined'){
                    dataTable.draw();
                  }

            }
        },"json").fail(function(response) {

            btn.text(btntext);
            btn.attr('disabled',false);
            $(".error-alert").find('.message').html(response.responseJSON.message);
            $(".error-alert").show().delay(5000).queue(function(n) {
                $(this).hide(); n();
              });

        });

     });

     document.addEventListener("DOMContentLoaded", function () {
        new Datepicker(document.getElementById('startDatePicker'), {
            autohide: true,
            format: 'yyyy-mm-dd',
        });

        new Datepicker(document.getElementById('endDatePicker'), {
            autohide: true,
            format: 'yyyy-mm-dd',
        });
    });



</script>


</body>
</html>
