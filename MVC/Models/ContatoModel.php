<?php 
    namespace Models;

    class ContatoModel{

        public static function enviarFormulario(){
            // Aqui vai os nome do seu servidor nome do seu email no do servido senha e nome.
            $mail = new \Email('vps.dankicode.com','testes@dankicode.com','gui123456','Guilherme');
            $mail->addAdress('victor.manoel8@gmail.com','Victor');
            $mail->formatarEmail(array('assunto'=>'Mensagem do Site','corpo'=>'Aqui e uma mensagem do site.'));
            $mail->enviarEmail();
        }
    }
?>