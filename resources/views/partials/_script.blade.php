@yield('scripts')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('jquery/jquery.js')}}"></script>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- Additional Scripts -->
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/slick.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/accordions.js')}}"></script>


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