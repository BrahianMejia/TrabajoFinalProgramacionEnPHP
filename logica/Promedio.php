<?php 

    class Promedio
    {
        private $n1;
        private $n2;
        private $n3;
        private $n4;
        private $n5;
        private $resultado;
        
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

        public function __construct5($n1, $n2,$n3,$n4,$n5)
        { 
            $this->n1=$n1;
            $this->n2=$n2;
            $this->n3=$n3;
            $this->n4=$n4;
            $this->n5=$n5;
        }

        public function setN1($valor)
        {
            $this->n1=$valor;
        }

        protected function getN1()
        {

            return $this->n1;
        }

        public function setN2($valor)
        {
            $this->n2=$valor;
        }

        protected function getN2()
        {
            return $this->n2;
        }

        public function setN3($valor)
        {
            $this->n3=$valor;
        }

        protected function getN3()
        {
            return $this->n3;
        }

        public function setN4($valor)
        {
            $this->n4=$valor;
        }

        protected function getN4()
        {
            return $this->n4;
        }

        public function setN5($valor)
        {
            $this->n5=$valor;
        }

        protected function getN5()
        {
            return $this->n5;
        }

        public function setResultado($valor)
        {
            $this->resultado=$valor;
        }

        protected function getResultado()
        {
            return $this->resultado;
        }
    }

?>