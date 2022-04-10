<?php
     
    class formularioSuscripcion{
        public $tituloFormulario; 
        public $Correo;
        public $Nombre;
        public $Apellido;
        public $Idioma;
        public $Suscribir;
        public $idiomaFormulario = "EN";

        public function traducirFormulario(){
            if($this->idiomaFormulario=="EN"){
                $this->tituloFormulario = "SUSCRIBE TO OUR MAILING LIST";
                $this->Correo = "Email Address";
                $this->Nombre = "First Name";
                $this->Apellido = "Last Name";
                $this->Idioma = "Language";
                $this->Suscribir = "Subscribe";
            }elseif($this->idiomaFormulario=="ES") {
                $this->tituloFormulario = "SUSCRÍBETE A NUESTRA LISTA DE MENSAJES";
                $this->Correo = "Dirección de correo electrónico";
                $this->Nombre = "Primer nombre";
                $this->Apellido = "Apellido";
                $this->Idioma = "Idioma";
                $this->Suscribir = "Suscribir";
            }else{
                $this->tituloFormulario = "ISCRIVITI ALLA NOSTRA MAILING LIST";
                $this->Correo = "Indirizzo e-mail";
                $this->Nombre = "Nome di battesimo";
                $this->Apellido = "Cognome";
                $this->Idioma = "Lingua";
                $this->Suscribir = "sottoscrivi";
            }
        }

       
       
    }
    
?>