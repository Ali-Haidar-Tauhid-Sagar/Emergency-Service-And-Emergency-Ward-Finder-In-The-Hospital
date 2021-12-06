<?php
if(!empty($_POST["send"])) {
	$Name = $_POST["Name"];
	$Email = $_POST["Email"];
	$Subject = $_POST["Subject"];
	$Message = $_POST["Message"];

	$conn = mysqli_connect("localhost", "root", "", "project") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO contact (Name,Email,Subject,Message) VALUES ('" . $Name. "', '" . $Email. "','" . $Subject. "','" . $Message. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is Send successfully.";
	   $type = "success";
	//}
}
?>

<?php
include "header.php";
?>
<!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
		  <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <h1><b><p style="color:green;" class='<?php echo $type; ?>Message'><?php echo $message; ?></p></b></h1>
                        <?php
                        }
                        ?>
                    </div>
            <h2>Contact with Us</h2>
            <p>We're here to help and answer any question you might have.We look forward to hearing from you.</p>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form name="frmContact" id="" frmContact"" method="post" action="" enctype="multipart/form-data" onsubmit="return validateContactForm()">
                    <p class="comment-form-author">
                      <label for="author">Name <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="Name">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="Email">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Subject</label>
                      <input type="text" name="Subject">
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Message</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="Message"></textarea>
                    </p>
                    <p class="form-submit">
                      <input type="submit" value="Send Message" class="mu-post-btn" name="send">
                    </p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                  <iframe src="https://maps.google.com/maps?q=Dhanmondi%2032&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>







<?php

include('footer.php');
?>
