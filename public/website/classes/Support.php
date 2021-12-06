<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath."/../libs/Database.php");
include_once ($filepath."/../helpers/Format.php");
?>

<?php
/**
* SELL class
*/
class Support
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	//Product Add by Category and Brand.
	public function insertProduct($data, $file){
		//validation of product data
		$name = $this->fm->validation($data['name']);
		$name = mysqli_real_escape_string($this->db->link, $name);

		$email = $this->fm->validation($data['email']);
		$email = mysqli_real_escape_string($this->db->link, $email);

		$mobile = $this->fm->validation($data['mobile']);
		$mobile = mysqli_real_escape_string($this->db->link, $mobile);

		$subject = $this->fm->validation($data['subject']);
		$subject = mysqli_real_escape_string($this->db->link, $subject);

		if (empty($name) or empty($email) or empty($mobile) or empty($subject))
		{
			$msg = "<span class='error'>Fields must not be empty !.</span>";
			return $msg;
		}else{
				
				$query = "INSERT INTO support_request(name,email,mobile,subject) 
				VALUES('$name','$email','$mobile','$subject')";

				$inserted = $this->db->insert($query);
				if ($inserted) {
					$msg = "<b><span class='success'>Send Your Information successfully. Will be contacted very soon</span></b>";
					return $msg;
				}else{
					$msg = "<span class='error'>Failed to insert.</span>";
					return $msg;
				}
		 	}	
		}
//fetch all Brand list
	public function getAllSupport(){
		$sql = "SELECT * FROM support_request ORDER BY id DESC";
		$result = $this->db->select($sql);
		return $result;
	}
		
	//get Brand by ID
	public function getSupportbyid($id){
		$sql = "SELECT * FROM support_request WHERE id=$id ";
		$result = $this->db->select($sql);
		return $result;
	}

	//delete Brand by ID
	public function delSupport($delid){
		$delid = $this->fm->validation($delid);
		$delid = mysqli_real_escape_string($this->db->link, $delid);
		$sql = "DELETE FROM support_request WHERE id='$delid'";
		$result = $this->db->delete($sql);
		if ($result) {
			$msg = "<span class='error'>Successfully Deleted !.</span>";
			return $msg;
		}else{
			$msg = "<span class='error'>Failed to Delete.</span>";
			return $msg;
		}

	}	
		
	}
		
	
?>