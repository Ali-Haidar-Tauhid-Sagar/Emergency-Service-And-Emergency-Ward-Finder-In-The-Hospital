<?php


include '../../../includes/db_connection.php';


    if(isset($_POST['update'])){

        $admin_id=(int)$_POST['admin_id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
		$phone=$_POST['phone'];
        $emergency=$_POST['emergency'];
		$fax=$_POST['fax'];

        $sql=" UPDATE abulance
                SET

                 name = '{$name}' -- name - VARCHAR(100) NOT NULL
				 ,address = '{$address}' -- address - VARCHAR(50)
                 ,phone = '{$phone}' -- phone - VARCHAR(255)
                 ,emergency = '{$emergency}' -- emergency - VARCHAR(255)
				 ,fax = '{$fax}' -- fax - VARCHAR(255)
                 

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