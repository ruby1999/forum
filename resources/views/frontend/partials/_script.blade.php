@yield('scripts')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('asset/jquery/jquery.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<!-- 起床喔多層MENU-->
<script type="text/javascript">
    $(function() {
      $('[data-submenu]').submenupicker();
    });
</script> 

<!-- Additional Scripts -->
<script src="{{asset('asset/js/custom.js')}}"></script>
<script src="{{asset('asset/js/owl.js')}}"></script>
<script src="{{asset('asset/js/slick.js')}}"></script>
<script src="{{asset('asset/js/isotope.js')}}"></script>
<script src="{{asset('asset/js/accordions.js')}}"></script>
<!--add for three level dropdown-->
{{-- <script src="{{asset('asset/js/semantic.min.js')}}"></script>
<script src="https://unpkg.com/bootstrap-submenu@3.0.1/dist/js/bootstrap-submenu.js" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script> --}}
<script src="https://code.jquery.com/jquery-3.1.1.min.js" defer></script>
{{-- <script src="{{asset('asset/js/jquery-3.1.1.min.js')}}"></script> --}}
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap-submenu.js')}}"></script>
<script src="{{asset('asset/js/bootstrap-submenu.min.js')}}" defer></script>


<script language = "{{asset('text/Javascript')}}"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
</script>

