<?php 
  $page_title = 'Contact &#124; BRH Consultants';
  $meta_desc = "Contact us using our contact form, by telephone or Email here.";
include 'header.php'; ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-12">
        <h1 class="text-main">Contact</h1>
      </div>
    </div>
    </div>
    <div class="container">
      <div class="col-md-4">
        <h2>Contact Form</h2>
        <form method="post" action="contactengine.php" id="replyform">
        <label for="Name">Name:</label><br>
        <input type="text" class="form-control" name="Name" id="Name" placeholder="Your Name" maxlength="60" data-required /><br>
  
        <label for="Tel">Telephone:</label><br>
        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="Your phone number" maxlength="60"  /><br>


        <label for="Email">Email:</label><br>
        <input type="text" class="form-control" name="Email" id="Email" placeholder="you@yourcompany.co.uk" maxlength="60" data-required /><br>
        
        <label for="Message">Message:</label><br>
        <textarea name="Message" class="form-control" rows="5" cols="20" id="Message"  placeholder="Your message to us" maxlength="2000" data-required></textarea><br>
          <button type="submit" name="submit" value="Submit" class="btn btn-main">Submit</button>
        </form>
      </div>
      <div class="col-md-4 pull-right">
        <h2>Address &amp; Phone</h2>
        <address>
          <strong>BRH Consultants</strong><br>
          BM Box 5704<br>
          London<br>
          WC1N 3XX<br>
          <br>
          <h3>07772 356 903</h3>
          <br>
          <a href="mailto:contact@brhconsultants.co.uk">contact@brhconsultants.co.uk</a>
        </address>
    </div>
  </div>
  <br>
<div class="jumbotron">
  <div class="container">
    <h1 class="text-accent">Courses for Employers and Individuals</h1>
    <p><a class="btn btn-accent btn-lg" href="http://brhconsulting.co.uk/courses.php">View Courses &raquo;</a></p>
  </div>
</div>
<script src="js/jquery-validate.min.js"></script>
<script>
      $('form').validate({
        onKeyup : true,
        eachValidField : function() {

          $(this).closest('div').removeClass('error').addClass('success');
        },
        eachInvalidField : function() {

          $(this).closest('div').removeClass('success').addClass('error');
        }
      });
</script>
<?php include 'footer.php';?>
