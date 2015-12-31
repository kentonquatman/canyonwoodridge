<?php
  include 'includes/site-variables.php';
  $pageTitle = 'Our Facility | Canyonwood Ridge';
  $bodyId = 'facility';
  include 'includes/head.php';
  include 'includes/header.php';
?>

<section class="main">
  <div class="inner">
    <h1 class="heading">Our Facility</h1>
    <article>
      <p><em>Some information about the facility</em>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque, magna non condimentum tempus, eros risus auctor nisi, ut posuere urna dolor eu magna.</p>
      <ul>
        <li>Phasellus dignissim hendrerit sodales</li>
        <li>Curabitur sit amet lorem nec eros</li>
        <li>Tristique venenatis vel non enim</li>
        <li>Etiam at ullamcorper urna</li>
        <li>Proin cursus turpis lacus non blandit dolor</li>
        <li>Praesent vestibulum faucibus vehicula</li>
      </ul>
      <p>Maecenas lacinia sem nec quam adipiscing luctus. Morbi est mi, laoreet et luctus sed, tempus eget nibh. Vivamus quis nunc facilisis, feugiat orci vitae, tempus purus. Proin tempor lacinia lectus in accumsan. Sed vulputate condimentum urna nec condimentum.</p>
      <h4>Photos</h4>
      <ul class="small-gallery">
        <li><a rel="gallery" href="http://placehold.it/600x400.jpg"><img src="http://placehold.it/300x200.jpg"></a></li>
        <li><a rel="gallery" href="http://placehold.it/600x400.jpg"><img src="http://placehold.it/300x200.jpg"></a></li>
        <li><a rel="gallery" href="http://placehold.it/600x400.jpg"><img src="http://placehold.it/300x200.jpg"></a></li>
      </ul>
      <p><a href="gallery.php">See More Photos &amp; Videos &raquo;</a></p>
    </article>
    <aside>
      <h3>Make a Reservation</h3>
      <ul class="sub-nav">
        <li><a href="calendar.php">Check Availability</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </aside>
  </div>
</section>

<?php
  include 'includes/footer.php';
  include 'includes/foot.php';
?>