<?php 
    require_once('handler.php');


    if (isset($_POST['patname'])) {
        $patnum = $_POST['patname'];

        $sql = $handler->prepare("INSERT INTO 
		siemen(
			`pat_num`,
			`sie_sadate`,
			`sie_moc`,
			`sie_abs`,
			`sie_toc`,
			`sie_toa`,
			`sie_liqtim`,
			`sie_color`,
			`sie_volume`,
			`sie_viscosity`,
			`sie_ph`,
			`sie_clf1`,
			`sie_clf2`,
			`sie_clf3`,
			`sie_clf4`,
			`sie_clf5`,
			`sie_clf6`,
			`sie_clf7`,
			`sie_clf8`,
			`sie_clf9`,
			`sie_clf10`,
			`sie_clf11`,
			`sie_clf12`,
			`sie_clf13`,
			`sie_clf14`,
			`sie_clf15`,
			`sie_clf16`,
			`sie_clf17`,
			`sie_clf18`,
			`sie_clf19`,
			`sie_clf20`,
			`sie_clf21`,
			`sie_clf22`,
			`sie_clf23`,
			`sie_clf24`,
			`sie_indate`
		) 
		VALUES(
			:pat_num,
			:sie_sadate,
			:sie_moc,
			:sie_abs,
			:sie_toc,
			:sie_toa,
			:sie_liqtim,
			:sie_color,
			:sie_volume,
			:sie_viscosity,
			:sie_ph,
			:sie_clf1,
			:sie_clf2,
			:sie_clf3,
			:sie_clf4,
			:sie_clf5,
			:sie_clf6,
			:sie_clf7,
			:sie_clf8,
			:sie_clf9,
			:sie_clf10,
			:sie_clf11,
			:sie_clf12,
			:sie_clf13,
			:sie_clf14,
			:sie_clf15,
			:sie_clf16,
			:sie_clf17,
			:sie_clf18,
			:sie_clf19,
			:sie_clf20,
			:sie_clf21,
			:sie_clf22,
			:sie_clf23,
			:sie_clf24,
			now()
			)
		");

		$sql->execute(array(
            'pat_num' => $patnum,
			'sie_sadate' => isset($_POST['sadate']) ? $_POST['sadate'] : null,
			'sie_moc' => isset($_POST['moc']) ? $_POST['moc'] : null,
			'sie_abs' => isset($_POST['abs']) ? $_POST['abs'] : null,
			'sie_toc' => isset($_POST['toc']) ? $_POST['toc'] : null,
			'sie_toa' => isset($_POST['toa']) ? $_POST['toa'] : null,
			'sie_liqtim' => isset($_POST['liqtim']) ? $_POST['liqtim'] : null,
			'sie_color' => isset($_POST['color']) ? $_POST['color'] : null,
			'sie_volume' => isset($_POST['volume']) ? $_POST['volume'] : null,
			'sie_viscosity' => isset($_POST['viscosity']) ? $_POST['viscosity'] : null,
			'sie_ph' => isset($_POST['ph']) ? $_POST['ph'] : null,
			'sie_clf1' => isset($_POST['clf1']) ? $_POST['clf1'] : null,
			'sie_clf2' => isset($_POST['clf2']) ? $_POST['clf2'] : null,
			'sie_clf3' => isset($_POST['clf3']) ? $_POST['clf3'] : null,
			'sie_clf4' => isset($_POST['clf4']) ? $_POST['clf4'] : null,
			'sie_clf5' => isset($_POST['clf5']) ? $_POST['clf5'] : null,
			'sie_clf6' => isset($_POST['clf6']) ? $_POST['clf6'] : null,
			'sie_clf7' => isset($_POST['clf7']) ? $_POST['clf7'] : null,
			'sie_clf8' => isset($_POST['clf8']) ? $_POST['clf8'] : null,
			'sie_clf9' => isset($_POST['clf9']) ? $_POST['clf9'] : null,
			'sie_clf10' => isset($_POST['clf10']) ? $_POST['clf10'] : null,
			'sie_clf11' => isset($_POST['clf11']) ? $_POST['clf11'] : null,
			'sie_clf12' => isset($_POST['clf12']) ? $_POST['clf12'] : null,
			'sie_clf13' => isset($_POST['clf13']) ? $_POST['clf13'] : null,
			'sie_clf14' => isset($_POST['clf14']) ? $_POST['clf14'] : null,
			'sie_clf15' => isset($_POST['clf15']) ? $_POST['clf15'] : null,
			'sie_clf16' => isset($_POST['clf16']) ? $_POST['clf16'] : null,
			'sie_clf17' => isset($_POST['clf17']) ? $_POST['clf17'] : null,
			'sie_clf18' => isset($_POST['clf18']) ? $_POST['clf18'] : null,
			'sie_clf19' => isset($_POST['clf19']) ? $_POST['clf19'] : null,
			'sie_clf20' => isset($_POST['clf20']) ? $_POST['clf20'] : null,
			'sie_clf21' => isset($_POST['clf21']) ? $_POST['clf21'] : null,
			'sie_clf22' => isset($_POST['clf22']) ? $_POST['clf22'] : null,
			'sie_clf23' => isset($_POST['clf23']) ? $_POST['clf23'] : null,
			'sie_clf24' => isset($_POST['clf24']) ? $_POST['clf24'] : null
        ));
        
		echo 1;
		
	}elseif (isset($_POST['get_semen'])){
		$semen = $_POST['get_semen'];
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
                siemen.sie_indate,
				siemen.sie_clf1,
				siemen.sie_clf2,
				siemen.sie_clf3,
				siemen.sie_clf4,
				siemen.sie_clf5,
				siemen.sie_clf6,
				siemen.sie_clf7,
				siemen.sie_clf8,
				siemen.sie_clf9,
				siemen.sie_clf10,
				siemen.sie_clf11,
				siemen.sie_clf12,
				siemen.sie_clf13,
				siemen.sie_clf14,
				siemen.sie_clf15,
				siemen.sie_clf16,
				siemen.sie_clf17,
				siemen.sie_clf18,
				siemen.sie_clf19,
				siemen.sie_clf20,
				siemen.sie_clf21,
				siemen.sie_clf22,
				siemen.sie_clf23,
				siemen.sie_clf24
                FROM patient RIGHT JOIN siemen ON 
                patient.pat_num = siemen.pat_num
                WHERE sie_id = '$semen'
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
                
            $result[] = array(
                'sie_id' => $row->sie_id,
                'patname' => $fullname,
                'sadate' =>$row->sie_sadate,
                'moc' =>$row->sie_moc,
                'abs' =>$row->sie_abs,
                'toc' =>$row->sie_toc,
                'toa' =>$row->sie_toa,
                'liqtim' =>$row->sie_liqtim,
                'color' =>$row->sie_color,
                'volume' =>$row->sie_volume,
                'viscosity' =>$row->sie_viscosity,
                'ph' => $row->sie_ph,
				'indate' => $date,
				'clf1' => $row->sie_clf1,
				'clf2' => $row->sie_clf2,
				'clf3' => $row->sie_clf3,
				'clf4' => $row->sie_clf4,
				'clf5' => $row->sie_clf5,
				'clf6' => $row->sie_clf6,
				'clf7' => $row->sie_clf7,
				'clf8' => $row->sie_clf8,
				'clf9' => $row->sie_clf9,
				'clf10' => $row->sie_clf10,
				'clf11' => $row->sie_clf11,
				'clf12' => $row->sie_clf12,
				'clf13' => $row->sie_clf13,
				'clf14' => $row->sie_clf14,
				'clf15' => $row->sie_clf15,
				'clf16' => $row->sie_clf16,
				'clf17' => $row->sie_clf17,
				'clf18' => $row->sie_clf18,
				'clf19' => $row->sie_clf19,
				'clf20' => $row->sie_clf20,
				'clf21' => $row->sie_clf21,
				'clf22' => $row->sie_clf22,
				'clf23' => $row->sie_clf23,
				'clf24' => $row->sie_clf24

            );
        }

        echo json_encode($result);
	}elseif (isset($_POST['seid'])){
		$seid = $_POST['seid'];

		$sql = $handler->prepare("UPDATE siemen SET 
			sie_sadate=:sie_sadate,
			sie_moc=:sie_moc,
			sie_abs=:sie_abs,
			sie_toc=:sie_toc,
			sie_toa=:sie_toa,
			sie_liqtim=:sie_liqtim,
			sie_color=:sie_color,
			sie_volume=:sie_volume,
			sie_viscosity=:sie_viscosity,
			sie_ph=:sie_ph,
			sie_clf1=:sie_clf1,
			sie_clf2=:sie_clf2,
			sie_clf3=:sie_clf3,
			sie_clf4=:sie_clf4,
			sie_clf5=:sie_clf5,
			sie_clf6=:sie_clf6,
			sie_clf7=:sie_clf7,
			sie_clf8=:sie_clf8,
			sie_clf9=:sie_clf9,
			sie_clf10=:sie_clf10,
			sie_clf11=:sie_clf11,
			sie_clf12=:sie_clf12,
			sie_clf13=:sie_clf13,
			sie_clf14=:sie_clf14,
			sie_clf15=:sie_clf15,
			sie_clf16=:sie_clf16,
			sie_clf17=:sie_clf17,
			sie_clf18=:sie_clf18,
			sie_clf19=:sie_clf19,
			sie_clf20=:sie_clf20,
			sie_clf21=:sie_clf21,
			sie_clf22=:sie_clf22,
			sie_clf23=:sie_clf23,
			sie_clf24=:sie_clf24
			WHERE sie_id='$seid'
		");

		$sql->execute(array(
			'sie_sadate' => isset($_POST['sadate']) ? $_POST['sadate'] : null,
			'sie_moc' => isset($_POST['moc']) ? $_POST['moc'] : null,
			'sie_abs' => isset($_POST['abs']) ? $_POST['abs'] : null,
			'sie_toc' => isset($_POST['toc']) ? $_POST['toc'] : null,
			'sie_toa' => isset($_POST['toa']) ? $_POST['toa'] : null,
			'sie_liqtim' => isset($_POST['liqtim']) ? $_POST['liqtim'] : null,
			'sie_color' => isset($_POST['color']) ? $_POST['color'] : null,
			'sie_volume' => isset($_POST['volume']) ? $_POST['volume'] : null,
			'sie_viscosity' => isset($_POST['viscosity']) ? $_POST['viscosity'] : null,
			'sie_ph' => isset($_POST['ph']) ? $_POST['ph'] : null,
			'sie_clf1' => isset($_POST['clf1']) ? $_POST['clf1'] : null,
			'sie_clf2' => isset($_POST['clf2']) ? $_POST['clf2'] : null,
			'sie_clf3' => isset($_POST['clf3']) ? $_POST['clf3'] : null,
			'sie_clf4' => isset($_POST['clf4']) ? $_POST['clf4'] : null,
			'sie_clf5' => isset($_POST['clf5']) ? $_POST['clf5'] : null,
			'sie_clf6' => isset($_POST['clf6']) ? $_POST['clf6'] : null,
			'sie_clf7' => isset($_POST['clf7']) ? $_POST['clf7'] : null,
			'sie_clf8' => isset($_POST['clf8']) ? $_POST['clf8'] : null,
			'sie_clf9' => isset($_POST['clf9']) ? $_POST['clf9'] : null,
			'sie_clf10' => isset($_POST['clf10']) ? $_POST['clf10'] : null,
			'sie_clf11' => isset($_POST['clf11']) ? $_POST['clf11'] : null,
			'sie_clf12' => isset($_POST['clf12']) ? $_POST['clf12'] : null,
			'sie_clf13' => isset($_POST['clf13']) ? $_POST['clf13'] : null,
			'sie_clf14' => isset($_POST['clf14']) ? $_POST['clf14'] : null,
			'sie_clf15' => isset($_POST['clf15']) ? $_POST['clf15'] : null,
			'sie_clf16' => isset($_POST['clf16']) ? $_POST['clf16'] : null,
			'sie_clf17' => isset($_POST['clf17']) ? $_POST['clf17'] : null,
			'sie_clf18' => isset($_POST['clf18']) ? $_POST['clf18'] : null,
			'sie_clf19' => isset($_POST['clf19']) ? $_POST['clf19'] : null,
			'sie_clf20' => isset($_POST['clf20']) ? $_POST['clf20'] : null,
			'sie_clf21' => isset($_POST['clf21']) ? $_POST['clf21'] : null,
			'sie_clf22' => isset($_POST['clf22']) ? $_POST['clf22'] : null,
			'sie_clf23' => isset($_POST['clf23']) ? $_POST['clf23'] : null,
			'sie_clf24' => isset($_POST['clf24']) ? $_POST['clf24'] : null
		));

		echo 1;
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
                ORDER BY siemen.sie_id DESC
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