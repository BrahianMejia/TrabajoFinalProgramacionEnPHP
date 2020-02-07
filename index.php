<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Trabajo Final PHP</title>

        <script>
        function proceso(taller1, taller2, cuestionario1, cuestionario2, proyectofinal, boton)
        {
            switch(boton)
            {
                case "Calcular":
                    var parametros ={
                        "taller1" : taller1,
                        "taller2" : taller2,
                        "cuestionario1" : cuestionario1,
                        "cuestionario2" : cuestionario2,
                        "proyectofinal" : proyectofinal,
                        "calcular" : boton
                    }
                    break;
            }

            $.ajax({
             
             data: parametros,
             url:'calcular.php',
             type:'post',
             beforeSend:
                 function(){
                     $('#resultado').html('Cargando...');
                 },
             success:
                 function(response){
                     $('#resultado').html(response);
                 }
            });
        }
        </script>
    </head>
    <body align="center" style="background-color: lightgray;">
        <fieldset style="background-color: lightblue">
        <legend align="center"><h2>Promedio de Notas</h2></legend>
        <form name="formulario">
            <label for="taller1"><b>Taller 1 = 20%</b></label>
            <input type="number" name="taller1" id="taller1" autofocus>
            <br>

            <label for="taller2"><b>Taller 2 = 15%</b></label>
            <input type="number" name="taller2" id="taller2">
            <br>
 
            <label for="cuestionario1"><b>Cuestionario 1 = 22%</b></label>
            <input type="number" name="cuestionario1" id="cuestionario1">
            <br>
               
            <label for="cuestionario2"><b>Cuestionario 2 = 10%</b></label>
            <input type="number" name="cuestionario2" id="cuestionario2">
            <br>

            <label for="proyectofinal"><b>Proyecto final = 33%</b></label>
            <input type="number" name="proyectofinal" id="proyectofinal">
            <br>
                
            <input type="button" name="calcular" id="calcular" value="Calcular"
            onclick="proceso($('#taller1').val(),$('#taller2').val(),$('#cuestionario1').val(),
            $('#cuestionario2').val(), $('#proyectofinal').val(), $('#calcular').val());">       
        </form>
        <br>
        <span id="resultado"></span>
        <script src="js/jquery-3.4.1.js"></script>
          
        </fieldset>
    </body>
</html>
