<!-- Footer container -->
<footer
  class=" text-center lg:text-left">

  <!--Copyright section-->
  <div class="p-6 text-gray-800 bg-[#CCF2DE80] text-center">

    <div class="container mx-auto">
    <span>© {{ date('Y') }} Copyright:</span> | Payments Without Delays, Transactions Without Friction
    <a class="font-semibold" href="{{url('/')}}">{{ get_setting('sitename')??'' }}</a
>
    </div>
  </div>

</footer>

