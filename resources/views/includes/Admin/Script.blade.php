<script src="{{asset('adminassets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminassets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('adminassets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('adminassets/libs/node-waves/waves.min.js')}}"></script>



<!-- apexcharts -->
<script src="{{asset('adminassets/libs/apexcharts/apexcharts.min.js')}}"></script>


<!-- dashboard init -->
<script src="{{asset('adminassets/js/pages/dashboard.init.js')}}"></script>


<!-- App js -->
<script src="{{asset('adminassets/js/app.js')}}"></script>


<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@yield('script')

<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>

<!-- jquery step -->
{{-- <script src="{{asset('adminassets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script> --}}
<!-- form wizard init -->
{{-- <script src="{{asset('adminassets/js/pages/form-wizard.init.js')}}"></script> --}}
<script src="{{asset('adminassets/libs/dropzone/min/dropzone.min.js')}}"></script>


<script>
    // Prepare the preview for profile picture
$("#wizard-picture").change(function() {
  readURL(this);
}); 
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
    }
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


{{-- Scripts --}}



<!-- Required datatable js -->
<script src="{{asset('adminassets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminassets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('adminassets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminassets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminassets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('adminassets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('adminassets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('adminassets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('adminassets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('adminassets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('adminassets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminassets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('adminassets/js/pages/datatables.init.js')}}"></script>    
