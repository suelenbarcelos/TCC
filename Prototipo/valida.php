<?php
/**
 * Created by PhpStorm.
 * User: MAZZO
 * Date: 25/07/2018
 * Time: 19:22
 */

    if (isset($_POST['email'], $_POST['senha'])){

        include 'Conexao.php';
        include 'UsuarioConstroller.php';

        $usuariocontroller = new UsuarioConstroller();

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if (isset($email, $senha)){

            $user = $usuariocontroller->login($email, $senha);

            if ($user == true){

                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["senha"] = $senha;
                header("location: pag_pos_cadastro.html");
            }else{
                echo "Usuario ou senha errada";
            }
        }
    }else{
        echo "Você precisar digitar email ou senha para continuar";
    }