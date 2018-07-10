<?php
/**
 * Created
 * User: demario
 * Date: 5/22/18
 * Time: 1:22 PM
 */

require_once ('initialize.php');


/**
 *  CONFIRM IF THIS PAGE WAS REQUESTED FOR A POST REQUEST
 *  @param $clientEmailAddress stores the clients email address.
 *  @param $clientFirstName stores the clients first name.
 *  @param $clientEmailMessage stores the message that the client is sending to timeless.
 *  pass $clientEmailAddress, $clientFirstName, $clientEmailMessage to sendEmailToTimeLess function so the email can be sent.
 *  redirect the end user back to the contact page with the $clientFirstName so it can be used on the contact page.
 */
$clientEmailAddress = $_POST['clientEmailAddress'];
$clientFirstName = $_POST['clientFirstName'];
$isvalid = validateContactForm($clientEmailAddress, $clientFirstName);

if(validatePostRequest())
{
    $clientEmailMessage = $_POST['clientEmailMessage'];
    $subscribe = $_POST['subscribeToNewsLetter'];
//    print_r($isvalid);

        switch($subscribe)
        {
            case 0:
//                print_r($_POST);
                $success = sendEmailToTimeless($clientFirstName, $clientEmailAddress, $clientEmailMessage);
                redirect('../public/contact.php?clientFirstName='.urlencode($clientFirstName).'&success='.urlencode($success));
                //die();
                break;

            case 1:
//                print_r($_POST);
                $addedToSubscription = urlencode(setClient($clientFirstName, $clientEmailAddress, $subscribe));
                $success = sendEmailToTimeless($clientFirstName, $clientEmailAddress, $clientEmailMessage);

                //die();
                redirect('../public/contact.php?clientFirstName='.urlencode($clientFirstName).'&subscribe='.urlencode($addedToSubscription).'&success='.urlencode($success));
        }
}
else {
    $invalidRequest = "Invalid request, please make sure you enter your name and a valid email address";
    redirect('../public/contact.php?invalidRequest='.urlencode($invalidRequest));
}



