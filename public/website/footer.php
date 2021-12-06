

<br>


   <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="About.php">About Us</a></li>
                  <li><a href="Contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Hospital</h4>
                <ul>
                  <li><a href="hospital.php">Hospital</a></li>
                  <li><a href="doctor_search.php">Doctor</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Emergency</h4>
                <ul>
                  <li><a href="amb.php">Ambulance</a></li>
                  <li><a href="bloodbank.php">Blood Bank</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Dhanmondi-32, Dhaka</p>
                  <p>Phone:01759281892 </p>
                  <p>Email: sagar@gmail.com</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>Copyright &copy; 2020&ndash;<?php echo date("Y"); ?> Emergency Service And Emergency Ward Finder In The Hospital</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->






<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/js_function.js"></script>
<script src="Bootstrap/js/bootstrapvalidator.min.js"></script>
<script src="Bootstrap/layout/scripts/jquery.backtotop.js"></script>
<script src="Bootstrap/layout/scripts/jquery.mobilemenu.js"></script>
<script src="js/index.js"></script>



<script type="text/javascript">

    $( "#login_form" ).on( "submit", function( event ) {
        event.preventDefault();


        document.getElementById('login_error').innerHTML  = "";

            var data = $("#login_form").serializeArray();
            data.push({name: 'login', value:true});

            console.log(data);


            $.ajax({
                type: "POST",
                url: "action.php",
                data: data,
                dataType: "json",
                success: function(data) {

                    if(data=="true"){
                        window.location='index.php';
                    }
                    if(data=="fail"){
                        document.getElementById('login_error').innerHTML  = "username or password mismatched";
                    }



                }
            });





    });


</script>


</body>
</html>
