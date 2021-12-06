<?php
include("../../includes/db_connection.php");
include("header.php");

?>


<div class="modal fade" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">


        </div>
    </div>
</div>







<br> 
<div class="container-fluid" style="min-height: 500px" >
	
   
    <div class="col-md-2"></div>
	
	<div class="col-md-8" style="background-color: #e5e5e5">
	<br>
	<h2 style="text-align: center">Find Near By Hospital</h2>

	<form id="search" method="get">
	<div class="row">
        <div class="col-md-3 "></div>
      <div class="col-md-5 " >
       <label for="sel1">Select Hospital's Area</label>
          <select name="doc_sp" class="form-control selectpicker" id="doc_sp" required>

              <option disabled selected value ></option>
              <?php
              $query = "SELECT address FROM hospital GROUP BY address ";
              $result = mysqli_query($connection,$query);
              while($row=mysqli_fetch_assoc($result)){
                  echo "<option>".$row["address"]."</option>";
              }

              ?>
          </select>
      </div>

        <div class="col-md-2 "><br>
            <button type="submit" style="padding: 8.5px 32px;" class="btn" name="search_hospital">Search</button>
        </div>


    </div>
    </form>

        <?php

        if(isset($_GET['search_hospital']) && isset($_GET['doc_sp']) ){
            $doc_sp = $_GET['doc_sp'];


            $query = "SELECT * FROM project.hospital where address='$doc_sp' order by address;";
            $result = mysqli_query($connection, $query);
            $count_row = mysqli_num_rows($result);

            if ($count_row > 0){
                while ($row = mysqli_fetch_assoc($result)){

                    ?>

                    <br><br>

                    <div class="row">
                        <div class="col-md-3 text-left" style="border-right: 1px solid #404040;height: 170px;">
                            <img style="width:250px;height:150px;border-square: 100%;" src="images/h2.jpg">
                        </div>
                        <div class="col-md-6 text-left" style="border-right: 1px solid #404040;height: 170px;">
                            <p id='a' style="color:#001a00;font-size: 25px;"><b><?php echo $row['name']; ?></b></p>

                            <p class="u-amount " style="color: #005ce6;font-family:consolas;font-size: 19px; "><span
                                    class="glyphicon glyphicon-info-sign"></span> <b><?php echo $row['description']; ?></p>

                            <p style="color:#001a00 ;font-family: consolas;font-size: 16px;"><?php echo $row['speciality']; ?></p>
							<p class="u-amount " style="font-size=6px; "><span class="glyphicon glyphicon-map-marker "></span> <?php echo $row['fax']; ?>, <b><?php echo $row['address']; ?></p>
							<p style="color:#001a00;font-family: consolas;font-size: 16px;"><span class="glyphicon glyphicon-envelope "></span> <?php echo $row['email']; ?></p>
                            <br>

                            <p></p>
                        </div>
                        <br>

                        <div class="col-md-3 text-left">

                            <p style="color:#001a00"> Emergency Call </p>
					<p class="u-amount" style="color:red;font-family:;font-size=6px; "><span class="glyphicon glyphicon-hand-right "></span> <?php echo $row['emergency']; ?></p>
					<p class="u-amount " style="font-size=6px; "><span class="glyphicon glyphicon-earphone "></span> <?php echo $row['phone']; ?></p><br>


                        <button   type="button" style= "padding: 8.5px 25px;" class="btn btn-sm btn-primary pull-right" onclick=window.open('detail_hospital.php?<?php echo "hid=".$row['hospital_id']; ?>','_self') >See More</button> <br><br> <br>
                        </div>
                    </div>
                    <hr style="height:2px;border:none;color:#cccccc;background-color:#cccccc;">
                    <br>
                    <?php
                }
            }
        }
        ?>



        <br>
    </div>
    <div class="col-md-2"></div>


        </div>




<script type="text/javascript">

        document.getElementById('doc_sp').value = "<?php if(isset($_GET['search_doctor'])) echo $_GET['doc_sp'] ;?>";

        $('#schedule_modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('id'); // Extract info from data-* attributes
            var modal = $(this);
            var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "schedule_modal.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.modal-content').html(data);

                },
                error: function(err) {
                    console.log(err);
                }
            });
        });






      /*  $(document).ready(function(){
            $( "#search" ).on( "submit", function( event ) {
                event.preventDefault();




                var data = $("#search").serializeArray();
                data.push({name: 'search_doctor', value: 'true'});
                /*   data.push({name: 'sid', value: $("#s_id").val()});
                 data.push({name: 'uid', value:$("#uid").val()});
                 data.push({name: 'max', value:max});

                console.log(data);


                $.ajax({
                    type: "POST",
                    url: "action.php",
                    data: data,
                    dataType: "json",
                    success: function(data) {

                        console.log(data);
                        $('#result').html(data);


                    }
                });

            });
        });*/





</script>


<!-- IE9 Placeholder Support -->

<!-- /.container -->
<?php

include "footer.php";
?>

