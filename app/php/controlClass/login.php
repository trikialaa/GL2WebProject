<?php
/**
 * Created by PhpStorm.
 * User: hamouda
 * Date: 19/04/2018
 * Time: 17:05
 */

    require 'BDRequestManager.php';
session_start();
    $bdrm = BDRequestManager::getInstance();

    if($bdrm->checkAgentLogin($_POST['username'])){
        $response = $bdrm->checkAgent($_POST['username'],$_POST['password']);

        if ($response != null)  {

            $_SESSION['id'] = $response->AGENTID;
            $_SESSION['Nom'] = $response->LastName;
            $_SESSION['Prenom'] = $response->FirstName;


            $_SESSION['logged_in'] = true;

            header("Location: /home");
        }else{
            echo "ERROR !!  WRONG PASSWORD ";
        }
    }
    else{
        echo "Wrong LOGIN NAME !";
    }
