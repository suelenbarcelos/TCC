<?php
/**
 * Created by PhpStorm.
 * User: MAZZO
 * Date: 25/07/2018
 * Time: 19:59
 */

    include 'Conexao.php';
    include 'UsuarioConstroller.php';
    include 'Usuario.php';

    $usuariocontroller = new UsuarioConstroller();
    $usuario = new Usuario();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (isset($nome, $senha, $email)){

        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);

        $result = $usuariocontroller->cadastrar($usuario);

        if ($result == true){
            header ('Location: pag_pos_cadastro.html');
        }else{
            echo "Usuario não cadastrado";
        }
    }else{
        echo "Você precisa digitar email ou senha para continuar";
    }

?>