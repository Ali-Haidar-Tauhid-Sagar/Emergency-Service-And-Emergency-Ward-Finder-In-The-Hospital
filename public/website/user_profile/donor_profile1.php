<?php



$uid= $_SESSION['uid'];

$sql="SELECT first_name AS fname,last_name AS lname,email,passwd,cell,pic FROM user WHERE userid={$uid} ";
$result=mysqli_query($connection,$sql);
$profile=mysqli_fetch_assoc($result);

//print_r($profile);




?>


<div id="main" class="tab-pane fade in active" >
    <br>
    <div class="content">

        <div class="col-md-2"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4"></div>
                    

                </div>

                <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-5 text-center" style="solid #404040;height: 100px;">
                
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          
                            <div class="input-group">
                                
                                
                            </div>
                            <span style="color: red" id="error_fname"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         
                            <div class="input-group">
                                
                             
                            </div>
                            <span style="color: red" id="error_lname"></span>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <span style="color: red" id="error_fname"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <span style="color: red" id="error_lname"></span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            
                        </div>
                    </div>




                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            


                        </div>
                    </div>

                </div>
					
                <div class="clearfix"></div>
                <div class="row">
                </div>
                <span style="color: #000099" id="success"><b></b></span>
				<center>
				<h1>Do you want to change password</h1><br>
				<button type="submit" class="btn btn-small"><a href="password.php?id=<?php echo $uid ?>">Click To Change Password</button></center>
                
                <div class="clearfix"></div>
			
                <br>

                


        </div>


    </div>
</div>

