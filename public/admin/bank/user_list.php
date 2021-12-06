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
                                <strong><i class="icon-user icon-large"></i>&nbsp;User List</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Email</th>
                                    <th style="text-align:center;">Phone Number</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM user ORDER BY userid ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$userid=$row['userid'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['first_name']; ?> <?php echo $row ['last_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['cell']; ?></td>
								<td style="text-align:center; width:350px;">
								     <a href="delete1.php<?php echo '?userid='.$userid; ?>" class="btn btn-danger">Delete</a>
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