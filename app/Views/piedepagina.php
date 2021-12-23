<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
  <!-- Grid container -->
  <div class="container p-1"></div>
  <!-- Grid container -->
  <a  rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="img/licencia.png" /></a><br />Esta obra está bajo una <a class="text-secondary" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.
 
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.3);">
    App desarrollada por
    <a class="text-secondary" href="https://twitter.com/emerling/">@Emerling</a> - DER System's bajo el Código: D-2112-01 para L.C.C.M.
  </div>
  <!-- Copyright -->
</footer>


    <!-- PRISM -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/new-prism.js'); ?>"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdbsnippet.min.js'); ?>"></script>
    <!-- MDB -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdb.min.js'); ?>"></script>

    <!-- Custom scripts -->
    <script type="text/javascript" src="<?= base_url('jquery/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('jquery/jquery.dataTables.min.js'); ?>"></script>

    <script>
      $(document).ready( function () {
    $('#t_usuarios').DataTable({
      serverSide:true,
      processing:true,
      ajax: {
        url: '<?=site_url("crud/get_datatables") ?>',
        type: 'get',
      },
      columns: [
        {data: "id_usuario"},
        {data: "usuario" },
        {data: "type" },
        {data: "password" },
        {data: "activo" },
      ]


    });
} );
    </script>

</body>
</html>
