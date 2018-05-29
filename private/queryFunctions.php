<?php

function setClient($clientFirstName, $clientEmail, $subscribeToQuarterlyNewsLetter)
{
    global $connection;
    $sql = 'INSERT INTO clients ';
    $sql .= '(firstName, date_submitted, emailAddress, subscribe) ';
    $sql .= 'VALUES ( \'';
    $sql .= $clientFirstName.'\',';
    $sql .= '\''.date("Y-m-d").'\',';
    $sql .= '\''.$clientEmail.'\',';
    $sql .= '\''.$subscribeToQuarterlyNewsLetter.'\');';
//    echo $sql;
//    die();
    $result = mysqli_query($connection, $sql);

    if ($result)
    {
        $success = 'you are now registered';
        return $success;
    }
    else
    {
        //insert failed
        echo mysqli_error($connection);
    }
}
function getNavigation()
{
    global $connection;
    // Perform database query
    $query = "SELECT * FROM pages";
    $result_set = mysqli_query($connection, $query);

    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    while ($navigation = mysqli_fetch_assoc($result_set)) {
        echo $navigation["name"] . "<br />";
    }
    mysqli_free_result($result_set);

}

function getNavigationLinkStatus($pageTitle)
{
    $homePageTitle = 'Timeless LLC | Home';
    $aboutPageTitle = 'Timeless LLC | About';
    $contactPageTitle = 'Timeless LLC | Contact';
    $servicesPageTitle = 'Timeless LLC | Services';
    global $linkStatus;

    switch ($pageTitle)

    {

        case 'Timeless LLC | Home':
            $linkStatus .= ' active';
            echo $linkStatus;
            break;

        case 'Timeless LLC | About':
            $linkStatus .= ' active';
            echo $linkStatus;
            break;

        case 'Timeless LLC | Services':
            $linkStatus .= ' active';
            echo $linkStatus;
            break;

        case 'Timeless LLC | Contact':
            $linkStatus .= ' active';
            echo $linkStatus;
            break;
    }


}
function getPage($id)
{
    global $connection;
    $query = 'SELECT * FROM pages ';
    $query .= 'WHERE id='.$id.'';
    //echo $query;
    $result_set = mysqli_query($connection, $query);

    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    while ($page = mysqli_fetch_assoc($result_set)) {
        echo $page["name"] . "<br />";
    }
    mysqli_free_result($result_set);

}

function getAnswers($id)
{

    global $connection;
    $query = 'SELECT surveyQuestions FROM clients ';
    $query .= 'WHERE id='.$id.'';
    $result_set = mysqli_query($connection, $query);

    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    while ($answers = mysqli_fetch_assoc($result_set)) {
        $answer[]= (json_decode($answers["surveyQuestions"], true));
//                print_r($answer);
        //echo $answers["surveyQuestions"] . "<br />";
    }
    mysqli_free_result($result_set);
    return $answer;

}
?>