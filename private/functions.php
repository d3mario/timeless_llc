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

    function validateContactForm($firstName, $email)
    {
        if (sanitizeEmailAddress($email)&& sanitizeFirstName($firstName) !=0)
        {
            return (1);
        }
        else{
            return (0);
        }
    }

    function sanitizeEmailAddress($email)
    {
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (strlen($sanitizedEmail) !=0 )
        {
            return 1;
        }
        else {
            return 0;
        }
    }

    function sanitizeFirstName($firstName)
    {
        $sanitizedFirstName = filter_var($firstName, FILTER_SANITIZE_STRING);
        if (strlen($sanitizedFirstName) !=0 )
        {
            return 1;
        }
        else {
            return 0;
        }
    }


?>