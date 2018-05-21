<?php
require_once ('../private/initialize.php');
$pageTitle = 'Timeless LLC | Contact';
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
            <h2 class="featurette-heading">Partnership <span class="text-muted">Tax Preparation.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
            </p>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="clientsFirstName">First Name:</label>
                    <input type="text" class="form-control" id="clientsFIrstName" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="clientsEmailMessage">Message:</label>
                    <textarea class="form-control" id="clientsEmailMessage" rows="3"></textarea>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Subscribe to quarterly newsletter</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1634541ee37%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1634541ee37%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">S-Corp  <span class="text-muted">Tax Preparation.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.750990595685!2d-83.33006048451118!3d42.3691457791863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824b4a50182c18f%3A0x8847eb33c0b189e6!2s28865+Plymouth+Rd%2C+Livonia%2C+MI+48150!5e0!3m2!1sen!2sus!4v1525975126747" width="450" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <hr class="featurette-divider">

    <hr class="featurette-divider">


<?php
include (SHARED_PATH .'/footer.php');
?>