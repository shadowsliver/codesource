<?php
function sendMail($to, $title, $msg)
{
    // use wordwrap() if lines are longer than 70 characters
    if($msg.length() > 70){
        $msg = wordwrap($msg, 70);
    }

    // send email
    mail($to, $title, $msg);

}

function safeNumberUS($number)
{
    /* thanks America!*/
    return str_replace(',', '.', $number);
}
function safeNumberEU($number)
{
    /* thanks America!*/
    return str_replace(',', '.', $number);
}

function validateTelephone($phoneNumber)
{
    $phoneNumber = preg_replace('/[^\d]/', '', $phoneNumber); //replaces none nummeric with nothing
    if (preg_match('/^(0\d{10}|[1-9]\d{9})$/', $phoneNumber) and !empty($phoneNumber)) {
        return true;
    } else {
        return false;
    }
}

function validateEmail($email)
{
    if (preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/', $email) and !empty($email)) {
        return true;
    } else {
        return false;
    }
}

function validateStringSpaces($string)
{
    //returns true if correct - a-Z and spaces only
    if (preg_match('/^[a-zA-Z ]*$/', $string) and !empty($string)) {
        return true;
    } else {
        return false;
    }
}

function message_debug($message)
{
    $_SESSION['debugMessage'] = $_SESSION['debugMessage'] . '<br>' . $message;
}

function message_info($message)
{
    $_SESSION['infoMessage'] = $_SESSION['debugMessage'] . '<br>' . $message;
}

function message_error($message)
{
    $_SESSION['errorMessage'] = $_SESSION['debugMessage'] . '<br>' . $message;
}

function redirect($page)
{
    header("location:$page");
    exit();
}