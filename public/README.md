1- Instalar librería tailSelect. Copiar la carpeta que está en public\librerias\tailSelect a tu proyecto

2-  Inclúyelos en el header y footer

3-  En la vista html crea un select tal que 
<select name="idEquipoCli[]" id="idEquipoCli" multiple="multiple" class="todos" >
Ojo!!! la clase todos es importante.

4- En el footer agrega:


$(document).ready(function () {     

  tail.select('.todos',{
        search: true,
        locale: "es",
        multiSelectAll: true,
        searchMinLength: 0,
        multiContainer: true,
  });

});


5- Finalmente debes poblar el select con datos que vengan del controlador y del modelo

6- El resultado es un select como la imagen public\librerias\tailSelect\imagen ejemplo.png

7- Tiene un buscador, además un botón "Todos" para agregar todos los clientes, y otro "Ninguno" para quitar todos lo seleccionados. Al seleccionar uno o varios, estos se van agregando en el contenedor. Ver imagen en public\librerias\tailSelect\buscador.png