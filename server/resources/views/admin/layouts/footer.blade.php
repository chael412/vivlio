<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">Vivliotek v1.0</div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2024
        <a href="https://www.facebook.com/michael.provo.121" target="_blank">Michael G. Provo</strong>
    All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="./assets/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
    $(function() {
        $("#studentTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "searching": false
        });

    });
</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script> -->
<!-- <script src="jquery_validate.js"></script> -->
<script src="../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="../assets/dist/js/script.js"></script>

<script src="{{ asset('assets/dist/js/axioscdn.js') }}"></script>
<script src="{{ asset('assets/dist/js/apiaxios.js') }}"></script>


<!-- BS-Stepper -->
<script src="./assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DECLARE VARIABLES
    const upload = document.querySelector('#upload');
    const imgContainer = document.querySelector('#croppieContainer');
    const croppedImage = document.querySelector('#croppedImage');
    const croppedImageData = document.querySelector('#croppedImageData');
    const cropButton = document.querySelector('#btnCrop');
    const btnRefresh = document.querySelector('#btnRefresh');

    // INITIALIZE CROPPIE
    var croppieInstance = new Croppie(imgContainer, {
        viewport: {
            width: 150,
            height: 120,
            type: 'square'
        },
        boundary: {
            width: 250,
            height: 200
        },
    });

    // HANDLE FILE UPLOAD
    upload.addEventListener('change', function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();
        reader.onload = function(event) {
            croppieInstance.bind({
                url: event.target.result,
            });
        };
        reader.readAsDataURL(file);

        // SHOW PREVIEW AND CROP BUTTON
        imgContainer.style.display = 'block';
        cropButton.style.display = 'block';
    });

    // HANDLE CROP BUTTON CLICK
    cropButton.addEventListener('click', function() {
        croppieInstance.result('canvas').then(function(result) {
            // SHOW CROPPED IMAGE
            croppedImage.src = result;
            croppedImage.style.display = 'block';

            // STORE BASE64 DATA IN HIDDEN INPUT
            croppedImageData.value = result;

            // SHOW REFRESH BUTTON
            btnRefresh.style.display = 'block';

            // HIDE INPUT ELEMENT AND CROPPIE CONTAINER
            imgContainer.style.display = 'none';
            upload.style.display = 'none';
            cropButton.style.display = 'none';
        });
    });

    // HANDLE REFRESH BUTTON CLICK
    btnRefresh.addEventListener('click', function() {
        // RESET FILE INPUT
        upload.value = '';

        // RESET CROPPED IMAGE
        croppedImage.src = '';
        croppedImage.style.display = 'none';
        croppedImageData.value = '';

        // SHOW UPLOAD INPUT
        upload.style.display = 'block';

        // HIDE REFRESH BUTTON
        btnRefresh.style.display = 'none';

        // RESET CROPIE CONTAINER AND HIDE IT
        imgContainer.style.display = 'none';
        cropButton.style.display = 'none';
        croppieInstance.destroy();

        // REINITIALIZE CROPPIE
        croppieInstance = new Croppie(imgContainer, {
            viewport: {
                width: 150,
                height: 120,
                type: 'square'
            },
            boundary: {
                width: 300,
                height: 250
            },
        });
    });
</script>


</body>


</html>
