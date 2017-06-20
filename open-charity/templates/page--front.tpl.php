<?php
/*
 * Front Page Template
 */
?>

  <!-- START HEADER -->
  <header>
    <div class="container">
      
      <h1 class="logo">        
        <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Open Charity'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Open Charity'); ?>" />
        </a>
        <?php endif; ?>
      </h1>     
      <div class="navigation">
        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
        <?php print render($page['main_menu']); ?>
      </div>

    </div><!-- CONTAINER -->
  </header>
  <!-- End HEADER -->

  <!-- START BANNER -->
  <section id="hero-banner">
    <div class="container">
      <?php print render($page['banner']); ?>
    </div>
  </section>
  <!-- End BANNER -->

  <!-- START EVENT -->
  <section id="events" class="section--grey">
    <div class="container">
      <?php print render($page['event']); ?>
    </div>
  </section>
  <!-- End EVENT -->

  <!-- START GET INVOLVED -->
  <section id="get-involved" class="section">
    <div class="container">
      <?php print render($page['get_involved']); ?>
    </div>
  </section>
  <!-- End GET INVOLVED -->

  <!-- START OUR MISSION -->
  <section id="our-mission" class="section section--grey">
    <div class="container">
      <?php print render($page['mission']); ?>
    </div>
  </section>
  <!-- End OUR MISSION -->

  <!-- START OUR MEMBERS -->
  <section id="our-members" class="section members section--grey">
    <div class="container">
      <?php print render($page['members']); ?>
    </div>
  </section>
  <!-- End OUR MEMBERS -->

  <!-- START BLOG -->
  <section id="blog" class="section">
    <div class="container">
      <?php print render($page['blog']); ?>
    </div>
  </section>
  <!-- End BLOG -->

  <!-- START FOOTER -->
  <footer>
    <div class="container">
      
      <section class="social">
        <?php print render($page['foo_soc']); ?>
      </section>

      <section class="copyright">
        <?php print render($page['foo_copy']); ?>
      </section>

    </div>
  </footer>
  <!-- End FOOTER -->
  