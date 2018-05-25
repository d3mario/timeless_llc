<?php
/**
 * Created by PhpStorm.
 * User: demario
 * Date: 5/22/18
 * Time: 1:22 PM
 */
require_once ('initialize.php');

//$test = 'foo';

$clientEmailAddress = $_POST['clientEmailAddress'];
$clientFirstName = $_POST['clientFirstName'];
$clientEmailMessage = $_POST['clientEmailMessage'];
$checkBox = $_POST['exampleCheck1'];


sendEmailToTimeless($clientEmailAddress, $clientFirstName, $clientEmailMessage);