<?php
/**
 * Created by PhpStorm.
 * User: MAZZO
 * Date: 10/08/2018
 * Time: 20:23
 */

class UsuarioConstroller
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new conexao();
    }

    public function login($email, $senha){
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

        $execute = mysqli_query($this->conexao->getCon(),$sql);

        if (mysqli_num_rows($execute) > 0){
            return true;
        }else{
            return false;
        }
    }

    public function cadastrar($usuario){
        $sql = ("INSERT INTO `usuario` (`cod_user`, `nome`, `email`, `senha`) VALUES (NULL, '{$usuario->getNome()}', '{$usuario->getEmail()}', '{$usuario->getSenha()}')");

        if (mysqli_query($this->conexao->getCon(),$sql)){
            return true;
        }else{
            return false;
        }
    }
}