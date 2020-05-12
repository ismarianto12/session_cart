<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="<?php echo base_url(); ?>assets/bs/js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="<?php echo base_url(); ?>assets/bs/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/bs/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
    <!-- <script src="<?php //echo base_url(); ?>assets/js/jquery.min.js"></script> -->

    <script type="text/javascript">
        $(document).ready( function () {
            $('#data').DataTable();
        } );
    </script>

    <script>
        function myFunction() {
          location.reload();
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>