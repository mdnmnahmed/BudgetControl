<?php 
	session_start();
	include 'conn.php';

	
	
	if (isset($_POST['month'])) {
		$uid = $_SESSION['eid'];

		$id=$_POST['id'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$month=$_POST['month'];
		$money=$_POST['money'];
		$others=$_POST['others'];
		$money_left=$_POST['money_left'];

		  date_default_timezone_set("Asia/Kolkata");
		if ($date=='') {
			$date=date("Y/m/d");
		}
		if ($time=='') {
			$time=date("h:i:s A");
		}
		if ($others=='') {
			$others="---";
		}

		$query="UPDATE `accounts` SET `id`='$id', `date`='$date', `time`='$time', `month`='$month', `money`='$money', `others`='$others', `money_left`='$money_left' WHERE id='$uid' ";
		$query_run=$conn->prepare($query);
		$query_run->execute();
	}

?>