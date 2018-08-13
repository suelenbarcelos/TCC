<?php
/**
 * Created by PhpStorm.
 * User: MAZZO
 * Date: 19/07/2018
 * Time: 12:57
 */

if ($_POST['largura'] > 0  AND $_POST['comprimento'] > 0){
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $metrosparede = $largura * $comprimento;


    //cálculo de tijolos
    if (isset($_POST['tijolos1'])){
        $tipotijolo = $_POST['tijolos1'];
        switch ($tipotijolo){
            case 1:
                $metrostijolo1 = $metrosparede / 0.0361;
                echo round($metrostijolo1);
                break;
            case 2:
                $metrostijolo2 = $metrosparede / 0.0551;
                echo round($metrostijolo2);
                break;
            case 3:
                $metrostijolo3 = $metrosparede / 0.0361;
                echo round($metrostijolo3);
                break;
            case 4:
                $metrostijolo4 = $metrosparede / 0.0551;
                echo round($metrostijolo4);
                break;
            case 5:
                $metrostijolo5 = $metrosparede / 0.0361;
                echo round($metrostijolo5);
                break;
            case 6:
                $metrostijolo6 = $metrosparede / 0.0551;
                echo round($metrostijolo6);
                break;
            case 7:
                $metrostijolo7 = $metrosparede / 0.0171;
                echo round($metrostijolo7);
                break;
            case 8:
                $metrostijolo8 = $metrosparede / 0.0253;
                echo round($metrostijolo8);
                break;
        }
    }

    //cálculo areia
   if (isset($_POST['areia1'])){
        $metrosareia = $metrosparede * 20;
        $qtdareia = $metrosareia * 1.600;
        $conversaoareia = $qtdareia / 1000;
        echo round($conversaoareia);
    }

    //cálculo azulejos
    if (isset($_POST['azulejo1'])) {
        $tipoazulejo = $_POST['azulejo1'];
        switch ($tipoazulejo) {
            case 1:
                $metrosazulejo1 = $metrosparede / 0.09;
                round($metrosazulejo1);
                break;
            case 2:
                $metrosazulejo2 = $metrosparede / 0.15;
                echo round($metrosazulejo2);
                break;
            case 3:
                $metrosazulejo3 = $metrosparede / 0.1764;
                echo round($metrosazulejo3);
                break;
        }
    }

    //cálculo cal
   if (isset($_POST['cal1'])){
        $metroscal = $metrosparede * 3;
        $qtdcal = $metroscal * 36;
        $conversaocal = $qtdcal / 1000;
        echo round($metroscal);
    }

    //cálculo cimento
   if (isset($_POST['cimento1'])){
        $metroscimento = $metrosparede * 5;
        $qtdcimento = $metroscimento * 36;
        $conversaocimento = $qtdcimento / 1000;
        echo round($conversaocimento);
    }

}else{
    echo "Precisa digitar a largura e comprimento";
}

?>