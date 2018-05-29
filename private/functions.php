<?php

$linkStatus = "nav-link";



        //Function for sending emails

    function sendEmailToTimeless($email, $firstName, $emailMessage)
    {
        $receiver = 'DeMario <iid3mario@gmail.com>';
        $subject = 'Test email';
        $emailMessage .= ' First Name: '.$firstName .' Email Address: '. $email;
        mail ($receiver, $subject, $emailMessage);
        $success = 'Email was sent successfully';
        return $success;
    }

    // Checks to see if the request was made from a post request.
    function validatePostRequest()
    {
         return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

// Checks to see if the request was made from a get request.
    function validateGetRequest()
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    function redirect($url)
    {
        header('Location:'.$url);
    }


?>