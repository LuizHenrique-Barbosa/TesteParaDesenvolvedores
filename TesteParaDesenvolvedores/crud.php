<?php
    include("conexao.php");

    //reveber o valor de act que vem da URL
    $act = $_GET["act"];

    if($act=="cad"){
    //fazer a sql de insert
    @$nome = $_POST["nome"];
    @$email = $_POST["email"];
    @$telefone = $_POST["telefone"];
    @$mensagem = $_POST["mensagem"];
        
    $inserir = "INSERT INTO tb_teste(nome, email, telefone, mensagem)VALUES('$nome', '$email', '$telefone', '$mensagem')";
    
   $res = mysqli_query($con, $inserir);
        
        if($res == 1){
            echo " <script>  
            
            alert('Cadastro realizado com sucesso!');
            window.location='index.php';
            
            </script>";
        }else{
             echo " <script>  
            
            alert('Erro ao cadastrar, tente novamente');
            window.location='index.php';
            
            </script>";
        }
    }
        