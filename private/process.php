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
if(validatePostRequest())
{
    $clientEmailAddress = $_POST['clientEmailAddress'];
    $clientFirstName = $_POST['clientFirstName'];
    $clientEmailMessage = $_POST['clientEmailMessage'];
    $subscribe = $_POST['subscribeToNewsLetter'];
//   print_r($_POST);
//   die();
    sendEmailToTimeless($clientEmailAddress, $clientFirstName, $clientEmailMessage);
    if ($subscribe === '1')
    {
        urlencode(setClient($clientFirstName, $clientEmailAddress, $subscribe));
    }
    redirect('../public/contact.php?clientFirstName='.urlencode($clientFirstName));
}
else {
    redirect('../public/contact.php');
}



