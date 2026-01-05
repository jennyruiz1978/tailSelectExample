# Implementación de tailSelect

## 1. Instalar la librería tailSelect
Copia la carpeta ubicada 
en public\librerias\tailSelect 
dentro de tu proyecto.

---
## 2. Incluir archivos en el header y footer
Incluye los archivos necesarios de **tailSelect** (CSS y JS) en el `header` y `footer` de tu aplicación.

---

## 3. Crear el `<select>` en la vista HTML
En la vista HTML, crea un `select` con las siguientes características:

```html
<select name="idEquipoCli[]" id="idEquipoCli" multiple="multiple" class="todos">
```
⚠️ Ojo: la clase todos es importante.

## 4. Inicializar tailSelect en el footer

Agrega el siguiente código en el footer:
```javascript
$(document).ready(function () {     
    tail.select('.todos', {
        search: true,
        locale: "es",
        multiSelectAll: true,
        searchMinLength: 0,
        multiContainer: true,
    });
});



## 5. Poblar el <select>

Debes cargar las opciones del select con datos que provengan del controlador y del modelo.

## 6. Resultado final

El resultado será un select similar al mostrado en la imagen:

public\librerias\tailSelect\imagen ejemplo.png

7. Funcionalidades

El select incluye:

🔍 Buscador integrado

🔘 Botón “Todos” para seleccionar todos los clientes

🚫 Botón “Ninguno” para deseleccionar todos

📦 Al seleccionar uno o varios elementos, estos se agregan al contenedor

Ver ejemplo en:

public\librerias\tailSelect\buscador.png