<?php require_once(RUTA_APP . '/views/includes/header-tailwind.php'); ?>
<?php require_once(RUTA_APP . '/views/includes/navbar-tailwind.php'); ?>
<?php require_once(RUTA_APP . '/views/includes/sidebar-tailwind.php');  ?>

<div class="w-full overflow-x-hidden border-t flex flex-col">

    <main class="w-full flex-grow p-6">        
      
       
        <div class="flex items-center justify-center  mt-8">
            <div class="grid bg-white rounded-lg shadow-xl w-11/12">
                <div class="mt-6 ml-6">
                    <h2 class="text-2xl font-semibold leading-tight flex-1 mr-2">Editar Usuario</h2>    
                    <span id="msgValidaCliente" class="font-bold font-bold text-pink-600"></span>                                         
                </div>

                            <div class="grid grid-cols-1 my-1" id="contenedorClienteEquipos">
                                <?php
        
                                        echo'
                                            <label class="" >Seleccionar equipos</label>
                                            <select name="idEquipoCli[]" id="idEquipoCli" multiple="multiple" class="todos" >
                                                <option disabled selected>Seleccionar</option> ';
                                                
                                                $equipos= $datos['equipos'];

                                                if (isset($equipos) && count($equipos) >0) {
                                                    foreach ($equipos as $key) {
                                                        echo"<option value='".$key->id."'>".$key->nombre."</option>";
                                                    }
                                                }                                                                                    
                                    ?>
                            </div>  


                </form>
            </div>
        </div>

      
    </main>
</div>

</div>

</main>


<?php require_once(RUTA_APP . '/views/includes/footer.php'); ?>