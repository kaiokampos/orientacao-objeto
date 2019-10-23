<?php
    class Cliente{
        
        private $email;
        

        public function setEmail($email){
            if (filter_var($email ,FILTER_VALIDATE_EMAIL)) {
                $this->email = $email;
            }else{
                throw new Exception('E-mail Inválido');
            }
            
        }
        public function getEmail(){
            return $this->email;
        }
        public static function mensagem(){
            echo "Olá mundo! <br/>";
        }
    }
    // chamando a funão estática. não precisa instanciar.
    Cliente::mensagem();

    $obj = new Cliente();
    $obj->setEmail("kaiocampos@email.com.br"); //com encapsulamento
    echo $obj->getEmail();
    // $obj->email = "kaiocampos@email.com.br"; //sem encapsulamento
    
?>