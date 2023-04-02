<?php
require_once('controller.php');
session_start();

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'fr') {
        if (isset($_GET['control'])) {
            $_GET['control']();
        }elseif (isset($_POST['control'])) {
            $_POST['control']();
        }
        fr();
    }elseif ($_GET['lang'] == 'en'){
        if (isset($_GET['control'])) {
            $_GET['control']();
        }elseif (isset($_POST['control'])) {
            $_POST['control']();
        }
        en();
    }
}else{
    fr();
}

?>