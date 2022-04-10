<?php
    class ClaseTablaMultiplicar{
        public $numeroTabla= "";
        public $resultado = "";

        public function establecerNumeroTabla($valor){
            $this->numeroTabla = $valor;
        }

        public function generarTabla(){
            $this->resultado = "<table>";
            for($i=1;$i<=10;$i++){
                $this->resultado .= "<tr aling='center'>
                    <td width='30px'>". $this->numeroTabla ."</td>
                    <td width='10px'>X</td>
                    <td width='30px'>". $i ."</td>
                    <td width='10px'>=</td>
                    <td width='30px'>". ($this-> numeroTabla * $i) ."</td>
                </tr>";
            }
            $this->resultado .= "</table>";
        }
    }
?>
