<?php
  include 'includes/site-variables.php';
  $pageTitle = 'Contact Us | Canyonwood Ridge';
  $bodyId = 'contact';
  include 'includes/head.php';
  include 'includes/header.php';
?>

<section class="main">
  <div class="inner">
    <header>
      <h1>Contact Us</h1>
    </header>
    <div class="side-bar">
      <aside>
        <p><strong>Phone</strong> 123-456-7890</p>
        <p><strong>Fax</strong> 123-654-0987</p>
        <address>
          1234 Stree St.<br>
          City, State 12345
        </address>
      </aside>
      <aside class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220449.19616552588!2d-97.7534014!3d30.3077609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b599a0cc032f%3A0x5d9b464bd469d57a!2sAustin%2C+TX!5e0!3m2!1sen!2sus!4v1406940297498" height="300" frameborder="0" style="border:0"></iframe>
        <p><a href="javascript:void(0)">Get Directions</a></p>
      </aside>
    </div>
    <form>
      <input type="text" placeholder="Your Name">
      <input type="email" placeholder="Email Address">
      <textarea placeholder="Message">
      </textarea>
      <input type="submit" value="Send">
    </form>
  </div>
</section>

<?php
  include 'includes/footer.php';
  include 'includes/foot.php';
?>