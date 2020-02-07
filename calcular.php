<?php 

    if (isset($_POST["calcular"]))
    {
        require_once('logica/Taller1.php');
        require_once('logica/Taller2.php');
        require_once('logica/Cuestionario1.php');
        require_once('logica/Cuestionario2.php');
        require_once('logica/ProyectoFinal.php');
        require_once('logica/Resultado.php');

        $n1 = $_POST['taller1'];
        $n2 = $_POST['taller2'];
        $n3 = $_POST['cuestionario1'];
        $n4 = $_POST['cuestionario2'];
        $n5 = $_POST['proyectofinal'];

        $objN1 = new Taller1 ($n1, $n2, $n3, $n4, $n5);
        $objN2 = new Taller2 ($n1, $n2, $n3, $n4, $n5);
        $objN3 = new Cuestionario1 ($n1, $n2, $n3, $n4, $n5);
        $objN4 = new Cuestionario2 ($n1, $n2, $n3, $n4, $n5);
        $objN5 = new ProyectoFinal ($n1, $n2, $n3, $n4, $n5);
        $objResultado = new Resultado ($n1, $n2, $n3, $n4, $n5);
        
        echo "<b><i>La nota final es: " . $objResultado->calcularResultado() . "</i></b><br>";

        $precio_curso = 500000;

        if ($objResultado->calcularResultado() < 1)
        {
            echo "<b><i>La nota es super deficiente, materia perdida y debe pagarla nuevamente: $precio_curso.</b></i><br>";   
        }

        else if ($objResultado->calcularResultado()<2)
        {
            echo "<b><i>La nota es deficiente, materia perdida pero solo debe pagar el 50%. </b></i><br>";

            $total = $precio_curso * 0.5;

            echo "<b><i>El valor a pagar: " . $total . " </b></i> <br>";
        }

        else if ($objResultado->calcularResultado() < 3)
        {
            echo "<b><i>La nota es insuficiente, materia perdida pero paga el 10%. </b></i><br>";

            $total = $precio_curso * 0.10;

            echo "<b><i>El valor a pagar: " . $total . "</b></i><br>";
        }

        else if ($objResultado->calcularResultado() < 4)
        {   
            echo "<b><i>La nota es aceptable, materia aprobada.<br>" . "</b></i><br>";
        }

        else if ($objResultado->calcularResultado() < 5)
        {
            echo "<b><i>La nota es sobresaliente.<br>" . "</b></i><br>";
        }

        else if ($objResultado->calcularResultado() == 5)
        {
            echo "<b><i>La nota es excelente y gana beca educativa.<br>" . "</b></i><br>";
        }

        else
        {
            echo '<b><i>Por favor introduzca datos válidos.</i></b><br>';
        }

        echo '<b><i>Fecha: ' . date('d/m/Y') . '</i></b>';
    }

    else
    {
        header('Location: index.php');
    }

?>
