

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
                                <strong><i class="icon-user icon-large"></i>&nbsp;Contact Request</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Email</th>
                                    <th style="text-align:center;">Subject</th>
                                    <th style="text-align:center;">Message</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM contact ORDER BY id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['Name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Email']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Subject']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Message']; ?></td>
								<td style="text-align:center; width:350px;">
								     <a href="delete.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Delete</a>
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
</html>







<?php
  include "footer.php";
 ?>
		
		

		
		
		
  