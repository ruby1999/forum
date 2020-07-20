@yield('scripts')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('asset/jquery/jquery.js')}}"></script>
<script src="{{asset('asset/jquery/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>

<!-- Additional Scripts -->
<script src="{{asset('asset/js/custom.js')}}"></script>
<script src="{{asset('asset/js/owl.js')}}"></script>
<script src="{{asset('asset/js/slick.js')}}"></script>
<script src="{{asset('asset/js/isotope.js')}}"></script>
<script src="{{asset('asset/js/accordions.js')}}"></script>


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