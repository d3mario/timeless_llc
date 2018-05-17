<?php
require_once ('../private/initialize.php');
$pageTitle = 'Timeless LLC | Home';
include(SHARED_PATH .'/header.php');

?>
<div class="container">

    <div class="jumbotron">
        <h1 class="display-4">Timeless Accounting &amp; Tax Services!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at sem in velit dignissim imperdiet.
        </p>
        <hr class="my-4">
        <p>Nulla lectus urna, dignissim eget elit quis, vulputate.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">IRS Resolution</h5>
                <p class="card-text">Our tax preparation firm is here to help. If you owe the IRS or feel you have a large tax debt that you can't pay, our professionals are here to assist you with lowering your tax liability. We are available for any situation and to offer valuable advice and assistance.</p>
                <p><a class="btn btn-danger" href="#" role="button">View details »</a></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">​Tax Preparation</h5>
                <p class="card-text">Our accountants have years of professional experience, and work diligently to ensure that you receive up-to-date information. We work hard to handle your financial and accounting needs in a professional and timely manner.</p>
                <p><a class="btn btn-danger" href="#" role="button">View details »</a></p>
            </div>
        </div>
    </div>
<?php
include (SHARED_PATH .'/footer.php');
?>