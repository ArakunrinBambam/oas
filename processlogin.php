<?php 
	include("classes/DB.php");

	$username = $_POST['matno'];
	$password = $_POST['pass'];
	

	if (!$username || !$password) {
		echo "blank";
		exit;
	}	

	if (!get_magic_quotes_gpc()){

		$username = addslashes($username);
		$password = addslashes($password);
	}

	if (($username=='Admin') && ($password=='bambam')){
		session_start();
		$_SESSION['admin_id']='Administrator';
		echo 'admin';
	
	}else {


	$query = "Select * from tblstudent where matno='$username' and sname='$password'";

	$rs = $db->query($query) or die($db->error);

	if ($rs->num_rows){

		$data = $rs->fetch_object();

		session_start();
		$name = "$data->sname $data->oname";
		$_SESSION['fname'] = $name;
		$_SESSION['sname']= $data->sname;
		$_SESSION['oname']= $data->oname;
		$_SESSION['matno']= $data->matno;
		$_SESSION['email']= $data->email;
		echo "success";


		
	}else {
		echo "fail";
	}


	$rs->free();
	
		
}




	
?>