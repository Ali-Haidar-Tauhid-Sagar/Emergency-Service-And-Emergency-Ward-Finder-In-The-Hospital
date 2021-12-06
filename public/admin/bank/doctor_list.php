<?php
require('header.php');
?>
<?php
include('../../../includes/db_connection.php');
?>



<div class="container">

<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Doctor List</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Speciality</th>
                                    <th style="text-align:center;">All Hospital Name</th>
									<th style="text-align:center;">Gender</th>
									<th style="text-align:center;">Contact</th>
									<th style="text-align:center;">Fee</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM doctor ORDER BY doctor_id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$doctor_id=$row['doctor_id'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['speciality']; ?></td>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['qualification']; ?></td>
								<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['gender']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['contact']; ?></td>
								<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['fee']; ?></td>
								<td style="text-align:center; width:150px;">
								     <a href="deletedoctor.php<?php echo '?doctor_id='.$doctor_id; ?>" class="btn btn-danger">Delete</a>
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