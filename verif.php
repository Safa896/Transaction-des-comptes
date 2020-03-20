<?php
session_start();
if(isset($_POST['login']) && isset($_POST['pass']))
{
    if($_POST['login']=='admin' && $_POST['pass']=='pwd')
    {
        $_SESSION['id']=$_POST['login'];
        header('Location: bienvenue.php');
    }else{
        echo 'login ou mot de pass incorrecte';
    }


}else{
    echo 'erreur';
}
?>