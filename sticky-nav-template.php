<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Bootstrap</title>
</head>

<body data-spy="scroll" data-target="#navbar-site" data-offset="80">

<style>
    body {
        position: relative;
        padding-top: 80px;
    }
</style>

<nav id="navbar-site" class="fixed-top navbar navbar-dark bg-primary navbar-expand-sm">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#staff">Staff</a></li>
            <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
        </ul><!-- navbar-nav -->
    </div><!-- container -->
</nav>

<div class="container">

    <div class="content" id="mission">
        <?php  $help = "this";?>
        <<h2>Our Mission</h2> <?php echo $help; ?>

        <p>Wisdom Pet Medicine strives to blend the best in traditional and alternative medicine in the diagnosis and treatment of companion animals including dogs, cats, birds, reptiles, rodents, and fish. We apply the wisdom garnered in the centuries old tradition of veterinary medicine, to find the safest treatments and&nbsp;cures.</p>

        <p>We strive to be your pet's medical experts from youth through the senior years. We build preventative health care plans for each and every one of our patients, based on breed, age, and sex, so that your pet receives the most appropriate care at crucial milestones. We want to give your pet a long and healthy&nbsp;life.</p>
    </div>

    <div class="content" id="services">
        <h2>Services</h2>

        <section>
            <h3>Exotic Pets</h3>
            <p>We offer specialized care for reptiles, rodents, birds, and other exotic pets.</p>
        </section>

        <section>
            <h3>Grooming</h3>
            <p>Our therapeutic grooming treatments help battle fleas, allergic dermatitis, and other challenging skin conditions.</p>
        </section>

        <section>
            <h3>General Health</h3>
            <p>Wellness and senior exams, ultrasound, x-ray, and dental cleanings are just a few of our general health services.</p>
        </section>

        <section>
            <h3>Nutrition</h3>
            <p>Let our nutrition experts review your pet's diet and prescribe a custom nutrition plan for optimum health and disease prevention.</p>
        </section>

        <section>
            <h3>Pest Control</h3>
            <p>We offer the latest advances in safe and effective prevention and treatment of fleas, ticks, worms, heart worm, and other parasites.</p>
        </section>

        <section>
            <h3>Vaccinations</h3>
            <p>Our veterinarians are experienced in modern vaccination protocols that prevent many of the deadliest diseases in pets.</p>
        </section>
    </div>

    <div class="content" id="staff">
        <h2>Our Staff</h2>
        <h3>Dr. Winthrop</h3>
        <p>Dr. Winthrop is the guardian of Missy, a three-year old Llaso mix, who he adopted at the shelter. Dr. Winthrop is passionate about spay and neuter and pet adoption, and works tireless hours outside the clinic, performing free spay and neuter surgeries for the shelter.</p>
        <h3>Dr. Chase</h3>
        <p>Dr. Chase spends much of her free time helping the local rescue organization find homes for animals, such as Kibbles - a Maine Coon Cat who is part of the large Chase household, including two dogs, three cats, and a turtle.</p>
        <h3>Dr Sanders</h3>
        <p>Leroy walked into Dr. Sanders front door when he was moving into a new house. After searching for weeks for Leroy's guardians, he decided to make Leroy a part of his pet family, and now has three cats.</p>
    </div>

    <div class="content" id="testimonials">
        <h2>Testimonials</h2>
        <blockquote class="blockquote">
            <p>During the summer, our rabbit, Tonto, began to have severe redness and itching on his belly and feet. Through diagnostic testing, we learned that Tonto is severely allergic to over a dozens kinds of grass pollens. We've now been doing allergy injections for several months, and his itching and redness have nearly gone away.</p>
            <footer class="blockquote-footer">Jane H.</footer>
        </blockquote>
        <blockquote class="blockquote">
            <p>When Samantha, our Siamese cat, began sleeping all the time and urinating excessively, we brought her to see the specialists at Wisdom. After running a blood test, Dr. Winthrop confirmed what we all feared - Samantha was showing signs of diabetes. The doctor put us on a daily routine to provide Samantha insulin injections, and showed us how to administer the shots.</p>
            <footer class="blockquote-footer">The McPhersons</footer>
        </blockquote>
        <blockquote class="blockquote">
            <p>The staff at Wisdom worked tirelessly to determine why our three-year old Golden Retriever, Roxie, started going into sudden kidney failure. They stabilized her and provided fluids until her kidneys were again functioning normally. We learned just how toxic grapes and raisins are to pets, and Roxie is no longer allowed to roam unattended in the orchard.</p>
            <footer class="blockquote-footer">John B</footer>
        </blockquote>
        <blockquote class="blockquote">
            <p>Wisdom Pet Medicine is the only clinic around that will even book pet fish for appointments. When our 13-year old Comet goldfish, McAllister, turned from silvery white to an angry red, we called around, urgently trying to find a veterinarian who could help. Wisdom not only got us in the same day, but also was able to diagnose McAllister as having a severe case of septicemia.</p>
            <footer class="blockquote-footer">Lorraine S</footer>
        </blockquote>
    </div>

</div><!-- content container -->

<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(function() {
        var topoffset = 70; //variable for menu height

        //Use smooth scrolling when clicking on navigation
        $('.navbar-nav a').click(function() {
            if (location.pathname.replace(/^\//,'') ===
                this.pathname.replace(/^\//,'') &&
                location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top-topoffset
                    }, 500);
                    return false;
                } //target.length
            } //click function
        }); //smooth scrolling
    });

</script>
</body>
</html>