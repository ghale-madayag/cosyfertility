<?php 
    require_once('handler.php');


    if (isset($_POST['patname'])) {
        $patnum = $_POST['patname'];

    } else {
        $result = "";

        $sql = $handler->query("SELECT 
                patient.pat_num, 
                patient.pat_fname, 
                patient.pat_mname, 
                patient.pat_lname,
                siemen.sie_id,
                siemen.sie_sadate,
                siemen.sie_moc,
                siemen.sie_abs,
                siemen.sie_toc,
                siemen.sie_toa,
                siemen.sie_liqtim,
                siemen.sie_color,
                siemen.sie_volume,
                siemen.sie_viscosity,
                siemen.sie_ph,
                siemen.sie_indate
                FROM patient RIGHT JOIN siemen ON 
                patient.pat_num = siemen.pat_num
                ORDER BY siemen.sie_id
        ");

        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->sie_indate);
            $date = date_format($dateCre, 'M. d, Y');

            $dateCol = date_create($row->sie_sadate);
            $dateCol = date_format($dateCol, 'M. d, Y');

            $satoc = date('h:i A', strtotime($row->sie_toc));
            $satoa = date('h:i A', strtotime($row->sie_toa));
                
            $result[] = array(
                'sie_id' => $row->sie_id,
                'patname' => $fullname,
                'sadate' =>$dateCol,
                'moc' =>$row->sie_moc,
                'abs' =>$row->sie_abs,
                'toc' =>$satoc,
                'toa' =>$satoa,
                'liqtim' =>$row->sie_liqtim,
                'color' =>$row->sie_color,
                'volume' =>$row->sie_volume,
                'viscosity' =>$row->sie_viscosity,
                'ph' => $row->sie_ph,
                'indate' => $date

            );
        }

        echo json_encode($result);
    }
    

?>