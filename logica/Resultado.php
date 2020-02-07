<?php 

    require_once('Promedio.php');

    class Resultado extends Promedio
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

        public function __construct2($n1, $n2, $n3, $n4, $n5, $resultado)
        {
            parent::__construct2($n1, $n2, $n3, $n4, $n5, $resultado);
        }

        public function calcularResultado()
        {
          return $this->getN1() * 0.20 + $this->getN2() * 0.15 + $this->getN3() * 0.22 + $this->getN4() * 0.10 + $this->getN5() * 0.33;
        }
    }

?>