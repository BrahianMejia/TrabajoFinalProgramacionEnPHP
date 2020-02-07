<?php

    require_once ('Promedio.php');

    class Taller1 extends Promedio
    {
        public function __construct()
        {
            $parametros = func_get_args();
            $num_parametros = func_num_args();
            $funcion_constructor= '__construct' . $num_parametros;
            
            if(method_exists($this, $funcion_constructor))
            {
                call_user_func_array(array($this, $funcion_constructor), $parametros);
            }
        }

        public function __construct2($n1, $n2, $n3, $n4, $n5)
        {
            parent::__construct5($n1, $n2, $n3, $n4, $n5);
        }

        public function calcularN1()
        {
            return($this->getN1() * 0.20);
        }
    }

?>