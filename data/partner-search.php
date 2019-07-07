<?php
	require_once('handler.php');

	if(isset($_GET['term'])) {
		$term = $_GET['term'];
		$sql = $handler->prepare("SELECT pat_num, par_fname, par_mname, par_lname FROM partners WHERE par_fname LIKE '%".$term."%' OR par_lname LIKE '%".$term."%'");
		$sql->execute();
	}else{
		$sql = $handler->query("SELECT pat_num, par_fname, par_mname, par_lname FROM partners");
	}
	

	while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
		if ($row->par_mname!="") {
			$lname = ucfirst($row->par_mname).".";
		}else{
			$lname = "";
		}

		$fullname = ucfirst($row->par_fname)." ".$lname." ".ucfirst($row->par_lname);
		$result[] = array(
			'pat_num' => $row->pat_num ,
			'fullname' => $fullname 
		);
	}

	echo json_encode($result);
?>