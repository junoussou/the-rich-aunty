<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 *basculer en français
 * @author Charles Auguste Junior <junioroussou58@gmail.com>
 */
function fr(){//vers la page en français
    require('./base_fr.php');
}

/**
 * basculer en anglais
 * @author Charles Auguste Junior <junioroussou58@gmail.com>
 */
function en(){//vers la page en anglais
    require('./base_en.php');
}

/**
 * formulaire d'envoi de mail pour la réservation
 * @author Charles Auguste Junior <junioroussou58@gmail.com>
 */
function book_a_tablef(){

    require('./phpmailer/src/Exception.php');
    require('./phpmailer/src/PHPMailer.php');
    require('./phpmailer/src/SMTP.php');

    if (isset($_POST['envoi'])) {
        $mail = new PHPMailer(true);

        //smtp settings
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'junioroussou58@gmail.com';
        $mail->Password = 'kmksifxjumzubovf';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('sissyoussou@gmail.com');//l'adresse qui reçoit
        $mail->Subject = 'Commandes de '.$_POST['name'].'';
        $message = 'Bonjour Sissy, vous avez une nouvelle commande venant de '.$_POST['name'].'.<br/><br/>';
        $message .= '
        <table border="1">
            <thead>
                <caption>Bon de commande</caption>
                <tr>
                    <th>Date et Heure</th>
                    <th>Nombre de personne</th>
                    <th>Numéro de téléphone</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$_POST['date'].' à '.$_POST['time'].'</td>
                    <td>'.$_POST['people'].'</td>
                    <td>'.$_POST['phone'].'</td>
                    <td>Commande : <br/>'.$_POST['plat'].'<br/><br/>'.$_POST['message'].'</td>
                </tr>
            </tbody>
        </table>';
        $mail->Body = $message;

        try {
            if ($mail->send()) {
                header('location:index.php?lang=fr#book-a-table');
            }
        } catch (\Exception $e) {
            die('<script type="text/javascript">Erreur veuillez recommencer.</script>'.$e->getMessage());
        }
    }
}

/**
 * formulaire d'envoi de mail pour la réservation / version anglaise
 * @author Charles Auguste Junior <junioroussou58@gmail.com>
 */
function book_a_table(){

    require('./phpmailer/src/Exception.php');
    require('./phpmailer/src/PHPMailer.php');
    require('./phpmailer/src/SMTP.php');

    if (isset($_POST['send'])) {
        $mail = new PHPMailer(true);

        //smtp settings
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'junioroussou58@gmail.com';
        $mail->Password = 'kmksifxjumzubovf';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('sissyoussou@gmail.com');//l'adresse qui reçoit
        $mail->Subject = 'Commandes de '.$_POST['name'].'';
        $message = 'Hello Sissy, you have new command from '.$_POST['name'].'.<br/><br/>';
        $message .= '
        <table border="1">
            <thead>
                <caption>Detail</caption>
                <tr>
                    <th>Date and Hour</th>
                    <th>Peoples</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$_POST['date'].' at '.$_POST['time'].'</td>
                    <td>'.$_POST['people'].'</td>
                    <td>'.$_POST['phone'].'</td>
                    <td>Command : <br/>'.$_POST['plat'].'<br/><br/>'.$_POST['message'].'</td>
                </tr>
            </tbody>
        </table>';
        $mail->Body = $message;

        try {
            if ($mail->send()) {
                header('location:index.php?lang=en#book-a-table');
            }
        } catch (\Exception $e) {
            die('<script type="text/javascript">Error please begin for new time.</script>'.$e->getMessage());
        }
    }
}

/**
 * formulaire d'envoi de mail pour contact
 * @author Charles Auguste Junior <junioroussou58@gmail.com>
 */
function contact_us_f(){

    require('./phpmailer/src/Exception.php');
    require('./phpmailer/src/PHPMailer.php');
    require('./phpmailer/src/SMTP.php');

    if (isset($_POST['envoi'])) {
        $mail = new PHPMailer(true);

        //smtp settings
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'junioroussou58@gmail.com';
        $mail->Password = 'kmksifxjumzubovf';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('sissyoussou@gmail.com');//l'adresse qui reçoit
        $mail->Subject = ''.$_POST['name'].'';
        $message = $_POST['message'];
        $message .= '<br/><br/>Adresse email de l\'intéressé : '.$_POST['email'].'';
        $mail->Body = $message;

        try {
            if ($mail->send()) {
                header('location:index.php?lang=fr#contact');
            }
        } catch (\Exception $e) {
            die('<script type="text/javascript">Erreur veuillez recommencer.</script>'.$e->getMessage());
        }
    }
}

/**
 * formulaire d'envoi de mail pour contact / version anglaise
 * @author Charles Auguste Junior <junioroussou58@gmail.com>
 */
function contact_us(){

    require('./phpmailer/src/Exception.php');
    require('./phpmailer/src/PHPMailer.php');
    require('./phpmailer/src/SMTP.php');

    if (isset($_POST['send'])) {
        $mail = new PHPMailer(true);

        //smtp settings
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'junioroussou58@gmail.com';
        $mail->Password = 'kmksifxjumzubovf';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('sissyoussou@gmail.com');//l'adresse qui reçoit
        $mail->Subject = ''.$_POST['name'].'';
        $message = $_POST['message'];
        $message .= '<br/><br/>Email address where message comes from : '.$_POST['email'].'';
        $mail->Body = $message;

        try {
            if ($mail->send()) {
                header('location:index.php?lang=en#contact');
            }
        } catch (\Exception $e) {
            die('<script type="text/javascript">Error please begin for new time.</script>'.$e->getMessage());
        }
    }
}

?>