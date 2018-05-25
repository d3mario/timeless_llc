<?php

$linkStatus = "nav-link";

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

        //Function for sending emails

    function sendEmailToTimeless($email, $firstName, $emailMessage)
    {
        echo ($email. ' '.$firstName.' '.$emailMessage);
    }




?>