
    <!-- jQuery 3 -->
    <script src="_Content/Plugin/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="_Content/Plugin/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="_Content/Plugin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="_Content/Plugin/raphael/raphael.min.js"></script>
    <script src="_Content/Plugin/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="_Content/Plugin/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="_Content/Plugin/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="_Content/Plugin/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="_Content/Plugin/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="_Content/Plugin/moment/min/moment.min.js"></script>
    <script src="_Content/Plugin/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="_Content/Plugin/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="_Content/Plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="_Content/Plugin/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="_Content/Plugin/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="_Content/javascript/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="_Content/javascript/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="_Content/javascript/demo.js"></script>
    <script src="_Content/Plugin/ckeditor/ckeditor.js"></script>
    <script src="_Content/Plugin/tiny-last/tinymce.min.js"></script>
    <script>
 
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>

</html>