<?php


include '../../../includes/db_connection.php';


    if(isset($_POST['update'])){

        $admin_id=(int)$_POST['admin_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
		$phone=$_POST['phone'];
        $passwd=$_POST['passwd'];

        $sql=" UPDATE admin
                SET

                 name = '{$name}' -- name - VARCHAR(100) NOT NULL
				 ,email = '{$email}' -- email - VARCHAR(50)
                 ,phone = '{$phone}' -- phone - VARCHAR(255)
                 ,passwd = '{$passwd}' -- passwd - VARCHAR(255)
                 

                WHERE
                  admin_id = {$admin_id} -- admin_id - INT(11) NOT NULL
                 ";
        mysqli_query($connection,$sql);
        $affected=mysqli_affected_rows($connection);
        if($affected==1){
            echo json_encode("updated");

        }
        else{
            echo json_encode("failed");
        }



    }




?>