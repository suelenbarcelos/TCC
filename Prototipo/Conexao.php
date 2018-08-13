<?php
/**
 * Created by PhpStorm.
 * User: MAZZO
 * Date: 25/07/2018
 * Time: 19:24
 */

class conexao
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "1234";
    private $base = "oconstrutor";
    private $con;

    public function __construct (){
        $this->con = mysqli_connect($this->host,$this->user,$this->pass) or die ("Conexao com o bando de dados falhou" . mysqli_error($this->con));
        Mysqli_select_db($this->con, $this->base) or die ("Tabela nao encontrada" . mysqli_error($this->con));

    }

    public function getCon(){
        return $this->con;
    }
}