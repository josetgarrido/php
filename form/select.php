<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>change select</title>
    <!-- import -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

    <script>
        $(document).ready(function(){
            // $('#lista1').val(0);
            // recargarLista();

            $('#lista1').change(function(){
                        recargarLista();
            });
        })
    </script>
    <script type="text/javascript">
        function recargarLista(){
            $.ajax({
                type:"POST",
                url:"select_datos.php",
                data:"region=" + $('#lista1').val(),
                success:function(r){
                    $('#lista2').html(r);
                }
            });
        }
    </script>
  </head>
  <body>
    <form method="post" id="formulario">

        <select id="lista1" name="region">
            <option value="0">Selecciona tu opcion Region</option>
            <option value="1">opcion 1</option>
            <option value="2">opcion 2</option>
            <option value="3" >opcion 3</option>
        </select><br>

        <select id="lista2" name="comuna">
            <option value="0">Selecciona tu Comuna</option>
        </select>

    </form>
  </body>
</html>