<?php get_header();
/*
*/?>

 <!-- First section About -->
   <section id="about">
     <header>
     <h1></h1>
     </header>
        <div class="row">
          <div class="col-sm-4">
               <figure><img class="img-responsive img-circle" src="<?php bloginfo('template_url')?>/images/eye.png"/></figure>
        </div>
  <div class="col-sm-8 repeat-text">
    <p>I built the wall, I put letters and colors on<br>
I made a hole, I peeked through and like what I saw<br>
So, I broke it down and on some other ground<br>
From the start, all over again,<br>
as a new chalange, on demand...<br><br>

      I built the wall, I put letters and colors on<br>
I made a hole, I peeked through and like what I saw<br>
So, I broke it down and on some other ground<br>
From the start, all over again,<br>
as a new chalange, on demand...
<br><br></p>
    <p class="invite">If you want to break and build walls with me
      check out my portfolio and skills</p>
    </div>
  </div>
</section>

<!--Second secton Skills -->
  <section id="skills">
  <header class="row">
  <h1>Skills</h1>
  </header>
<!--Main skills -->
 <div class="row">
     <div class="col-xs-4 col-sm-2 col-sm-offset-3 wow bounceIn" data-wow-duration="1s" data-wow-delay="0s">
  <figure><img src="<?php bloginfo('template_url')?>/images/logo-skills/html-logo.png" class="img-responsive"/></figure>
    </div>

    <div class="col-xs-4 col-sm-2 wow bounceIn" data-wow-duration="1s" data-wow-delay="0.1s">
  <figure><img src="<?php bloginfo('template_url')?>/images/logo-skills/css-logo.png" class="img-responsive"/></figure>
      </div>

     <div class="col-xs-4 col-sm-2 wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
  <figure><img src="<?php bloginfo('template_url')?>/images/logo-skills/js-logo.png" class="img-responsive"/></figure>
  </div>

  <!--<div class="col-md-2 wow bounceIn" data-wow-duration="1s" data-wow-delay="0.3s">
  <figure><img src="https://www.dropbox.com/s/pp3miscbip6n8n0/skills-logo.png?raw=1" class="img-responsive img-thumbnail"/><figcaption>Other Skills</figcaption></figure>
  </div>-->

  </div>

<!--Other skills-->
     <div class="row">
     <div class="col-xs-6 col-sm-2 col-sm-offset-1 wow swing" data-wow-duration="0.5s" data-wow-delay="0.1s">
  <figure><img class="other-skills img-responsive"  src="<?php bloginfo('template_url')?>/images/logo-skills/jquery-logo-1.png"/></figure>
    </div>

    <div class="col-xs-6 col-sm-2 wow swing" data-wow-duration="" data-wow-delay="0.2s">
  <figure><img class="other-skills img-responsive" src="<?php bloginfo('template_url')?>/images/logo-skills/bootstrap-logo-1.png"/></figure>
      </div>

   <div class="col-xs-4 col-sm-2 wow swing" data-wow-duration="" data-wow-delay="0.4s">
  <figure><img class="other-skills img-responsive" src="<?php bloginfo('template_url')?>/images/logo-skills/sass-logo-1.png"/></figure>
  </div>

   <div class="col-xs-4 col-sm-2 wow swing" data-wow-duration="" data-wow-delay="0.3s">
  <figure><img class="other-skills img-responsive" src="<?php bloginfo('template_url')?>/images/logo-skills/wordpress-logo-1.png"/></figure>
  </div>

   <div class="col-xs-4 col-sm-2 wow swing" data-wow-duration="" data-wow-delay="0.5s">
 <figure><img class="other-skills img-responsive" src="<?php bloginfo('template_url')?>/images/logo-skills/magento-logo-1.png"/></figure>
  </div>

     </div>

</section>

<!-- Third section Portfolio -->

<section id="portfolio">
  <header class="row">
  <h1>Portfolio</h1>
  </header>
  <div class="row">
      <div class = "portfolio-item"></div>
  </div>
</section>


<!-- Fourth section Contact -->

<section id="contact">

    <header class="row">
  <h1>Let's break this wall and start together the brand new yours!</h1>
  </header>
    <div class="row">

    <div class="col-sm-4 col-md-5">
<form id="contact-form" method="post" action="php/form-process.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-warning" value="Send message">
            </div>
        </div>
    </div>

</form>
      </div>

        <div class="col-sm-4 col-md-4 hidden-xs ">
      <img  id="img-contact" class="img-responsive" src="<?php bloginfo('template_url')?>/images/contactme.png"/>
    </div>
       <div class="col-sm-5 visible-xs ">
      <img id="img-contact" class="img-responsive" src="<?php bloginfo('template_url')?>/images/contactme-xs.png"/>
    </div>

    <div class="col-sm-4 col-md-3 socialize">

     <!-- <a href="https://twitter.com/anita_tpj" target="_blank" class="btn btn-warning btn-block btn-short wow slideInLeft" role="button"><i class="fa fa-twitter"></i>Twitter</a> -->
    <a href="https://www.linkedin.com/in/anita-tapaji-84640b9b" target="_blank" class="btn btn-warning btn-block btn-short wow slideInLeft" role="button"><i class="fa fa-linkedin"></i> LinkedIn</a>
    <a href="https://codepen.io/anita_tpj/" target="_blank" class="btn btn-warning btn-block btn-short wow slideInLeft" role="button"><i class="fa fa-codepen"></i> CodePen</a>
    <a href="https://github.com/anita-tpj" target="_blank" class="btn btn-warning btn-block btn-short wow slideInLeft" role="button"><i class="fa fa-github"></i> GitHub</a>
    <a href="https://www.freecodecamp.com/anita-tpj" class="btn btn-warning btn-block btn-short wow slideInLeft" target="_blank" role="button"><i class="fa fa-fire"></i> FreeCodeCamping</a>

    </div>

  </div>
  </section>


<?php get_footer(); ?>
