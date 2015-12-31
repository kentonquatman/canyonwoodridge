<?php
  include 'includes/site-variables.php';
  $pageTitle = 'Calendar | Canyonwood Ridge';
  $bodyId = 'calendar';
  include 'includes/head.php';
  include 'includes/header.php';
?>

<section class="main">
  <div class="inner">
    <h1 class="heading">Calendar</h1>
    <article>
    
      <div class="responsive-calendar">
        <div class="controls">
          <a class="prev" data-go="prev">Prev</a>
          <h4><span data-head-year></span> <span data-head-month></span></h4>
          <a class="next" data-go="next">Next</a>
        </div>
        <div class="day-headers">
          <div class="day header">Sun</div>
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
        </div>
        <div class="days" data-group="days">
        </div>
      </div>
    
    </article>
    <aside>
      <ul class="sub-nav">
        <li><a href="payments.php">Make a Payment</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </aside>
  </div>
</section>

<?php
  include 'includes/footer.php';
  include 'includes/foot.php';
?>