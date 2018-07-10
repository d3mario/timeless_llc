<?php
require_once ('../private/initialize.php');
$pageTitle = 'Timeless LLC | Contact';
$invalid = '';


include(SHARED_PATH .'/header.php');

?>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Contact</h1>
        <p class="lead">Fusce mattis elementum euismod. Nulla vitae dolor id justo molestie.</p>
        <hr class="my-4">
        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas pulvinar enim.
        </p>
    </div>



    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <?php
                if (!isset($_GET['clientFirstName']) )
                    {


            ?>
                    <h2 class="featurette-heading">Partnership <span class="text-muted">Tax Preparation.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                    </p>
            <form method= "post" name="timeless_accounting_contact" action='../private/process.php' onsubmit="return validateContactForm()">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address:</label>
                            <input type="email" class="form-control" name="clientEmailAddress"aria-describedby="emailHelp" placeholder="Enter email" rel="js-clientEmailAddress">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="clientsFirstName">First Name:</label>
                            <input type="text" class="form-control" name="clientFirstName" placeholder="Enter first name" rel="js-clientFirstName">
                            <small id="firstNameHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="clientsEmailMessage">Message:</label>
                            <textarea class="form-control" name="clientEmailMessage" rows="3" rel="js-clientEmailMessage"></textarea>
                            <small id="emailMessageHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-check">
                            <input type="hidden" name="subscribeToNewsLetter" value="0">

                            <input type="checkbox" class="form-check-input" name="subscribeToNewsLetter" value="1">
                            <label class="form-check-label" for="exampleCheck1">Subscribe to quarterly newsletter</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="https://images.pexels.com/photos/1050304/pexels-photo-1050304.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" data-holder-rendered="true">
                </div>
                        <?php
                    }
                    elseif (isset($_GET['clientFirstName']))
                    {
                            $name = $_GET['clientFirstName'];
                            echo 'Thank you '. htmlspecialchars($name) . ' For sendng you email';
                            ?></div>
                            <?php
                        }
else
{
    $invalid = $_GET['invalidRequest'];
    echo 'Error '. htmlspecialchars($invalid) ;
    ?></div>
    <?php
}
                    ?>


    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">S-Corp  <span class="text-muted">Tax Preparation.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.750990595685!2d-83.33006048451118!3d42.3691457791863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824b4a50182c18f%3A0x8847eb33c0b189e6!2s28865+Plymouth+Rd%2C+Livonia%2C+MI+48150!5e0!3m2!1sen!2sus!4v1525975126747"  frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <hr class="featurette-divider">

    <hr class="featurette-divider">


<?php
include (SHARED_PATH .'/footer.php');
?>