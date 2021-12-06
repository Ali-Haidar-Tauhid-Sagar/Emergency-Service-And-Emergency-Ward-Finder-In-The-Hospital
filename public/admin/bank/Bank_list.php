

<?php
include ('header.php');
?>
<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;BloodBank List</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">BloodBank Name</th>
                                    <th style="text-align:center;">Email / Fax</th>
                                    <th style="text-align:center;">Phone Number</th>
                                    <th style="text-align:center;">Address</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM blood_bank ORDER BY blood_bank_id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$blood_bank_id=$row['blood_bank_id'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['phone']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['address']; ?></td>
								<td style="text-align:center; width:150px;">
								     <a href="delete2.php<?php echo '?blood_bank_id='.$blood_bank_id; ?>" class="btn btn-danger">Delete</a>
								</td>
									
										
							
								</div>
								</div>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>
	</body>


<?php
 include "footer.php";
 ?>
		
		

		
		
		
  