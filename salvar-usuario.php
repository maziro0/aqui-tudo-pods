<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
           
            $res = $conn->query ($sql);
            if ($res==true){
                print"<script>alert('Formulário enviado com sucesso');</script>"; // pop-up para confirmar envio do formulário;
                
            }
         break;

        case 'editar';
         break;

         case 'excluir';
         break;


    }
    ?>