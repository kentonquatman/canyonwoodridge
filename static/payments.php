<?php
  include 'includes/site-variables.php';
  $pageTitle = 'Make a Payment | Canyonwood Ridge';
  $bodyId = 'payments';
  include 'includes/head.php';
  include 'includes/header.php';
?>

<section class="main">
  <div class="inner">
    <article>
      <header>
        <h1>Make a Payment</h1>
      </header>
      <ul class="payments-list">
        <li>
          <h3>Reservations</h3>
          <p>Make a payment on your reservation, or make a deposit payment.</p>
          <a class="small-button" href="javascript:void(0)">Pay Now</a>
        </li>
        <li>
          <h3>Food &amp; Beverage</h3>
          <p>Make a bar payment.</p>
          <a class="small-button" href="javascript:void(0)">Pay Now</a>
        </li>
      </ul>
    </article>
    <div class="side-bar">
      <aside>
        <ul class="sub-nav">
          <li><a href="pricing.php">Pricing &amp; Availability</a></li>
          <li><a href="calendar.php">Calendar</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </aside>
    </div>
  </div>
</section>

<?php
  include 'includes/footer.php';
  include 'includes/foot.php';
?>