<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
 

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title" style="padding-top: 20px;">
              <span class="mu-subtitle">Feel Free To</span>
              <h2>Contact Us</h2>
            </div>

            <div class="mu-contact-content">
              <div class="row">

                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Visit Restaurant MasterChef at Royal Hospital Road or give us a call to make a restaurant reservation or enquiry.</p>
                      <address>
                        <p><i class="fa fa-phone"></i> 0207 352 4441</p>
                        <p><i class="fa fa-envelope-o"></i>royalhospitalroad@gordonramsay.com</p>
                        <p><i class="fa fa-map-marker"></i>68 Royal Hospital Road, London, SW3 4HP</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Thursday - Saturday</span>Lunch: 12pm - 2.15pm</p>
                        <p><span>Tuesday - Saturday</span> Dinner: 6pm - 11pm</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <?php include 'footer.php';?>
</html>