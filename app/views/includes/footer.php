<?php require_once(RUTA_APP . '/views/includes/pie.php'); ?>

 
<script src="<?php echo RUTA_URL; ?>/public/vendor/fortawesome/font-awesome/js/all.min.js"></script>
<script src="<?php echo RUTA_URL; ?>/public/vendor/components/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>

    
<script>

$(document).ready(function () {     

  tail.select('.todos',{// clase para cualquier select multiselect
        search: true,
        locale: "es",
        multiSelectAll: true,
        searchMinLength: 0,
        multiContainer: true,
  });

});
</script>

<!-- tail.select -->
<script src='<?php echo RUTA_URL ?>/public/librerias/tailSelect/js/tail.select-full.min.js'></script>
<script src='<?php echo RUTA_URL ?>/public/librerias/tailSelect/langs/tail.select-es.js'></script>

<script src="<?php echo RUTA_URL; ?>/public/js/usuarios.js?v=<?php echo(rand()); ?>"></script>

</body>

</html>