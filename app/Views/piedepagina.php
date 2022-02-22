
<footer class="text-white-50 text-center text-lg-start" style="background-color:#1c2331;">
  <!-- Grid container -->
  <a  rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="img/licencia.png" /></a><br />Este software está bajo una <a class="text-info" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.
 
  <!-- Copyright -->
  <div class="text-center p-1"  style="background-color: rgba(0, 0, 0, 0.2);">
 
  App desarrollada por
    <a class="text-info" href="https://twitter.com/emerling/">@Emerling</a> - DER System's bajo el Código: D-2112-01 Autorización permitida para L.C.C.M.
  </div>
  <!-- Copyright -->
</footer>


    <!-- PRISM -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/new-prism.js'); ?>"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdbsnippet.min.js'); ?>"></script>
    <!-- MDB -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdb.min.js'); ?>"></script>

 

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
      ]


    });
} );
    </script>

</body>
</html>
