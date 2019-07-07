<?php
    require_once('handler.php');

      if (isset($_POST['patname'])) {
          $patnum = $_POST['patname'];

          $sql = $handler->prepare("INSERT INTO transabdominal(
                `pat_num`,
                `tar_indate`,
                `tar_num`,
                `tar_pres`,
                `tar_bip_dia`,
                `tar_occ_dia`,
                `tar_cep_ind`,
                `tar_fem_len`,
                `tar_abd_cir`,
                `tar_est_fet_wei`,
                `tar_pla`,
                `tar_tone`,
                `tar_move`,
                `tar_brea`,
                `tar_amn_flu_ind`,
                `tar_impre`
            ) 
            VALUES(
                :patnum,
                :tar_indate,
                :tar_num,
                :tar_pres,
                :tar_bip_dia,
                :tar_occ_dia,
                :tar_cep_ind,
                :tar_fem_len,
                :tar_abd_cir,
                :tar_est_fet_wei,
                :tar_pla,
                :tar_tone,
                :tar_move,
                :tar_brea,
                :tar_amn_flu_ind,
                :tar_impre
            )");

          $sql->execute(array(
            'patnum' => $patnum,
            'tar_indate'=> isset($_POST['urdate']) ? $_POST['urdate'] : null,
            'tar_num'=> isset($_POST['tar_num']) ? $_POST['tar_num'] : null,
            'tar_pres'=> isset($_POST['tar_pres']) ? $_POST['tar_pres'] : null,
            'tar_bip_dia'=> isset($_POST['tar_bip_dia']) ? $_POST['tar_bip_dia'] : null,
            'tar_occ_dia'=> isset($_POST['tar_occ_dia']) ? $_POST['tar_occ_dia'] : null,
            'tar_cep_ind'=> isset($_POST['tar_cep_ind']) ? $_POST['tar_cep_ind'] : null,
            'tar_fem_len'=> isset($_POST['tar_fem_len']) ? $_POST['tar_fem_len'] : null,
            'tar_abd_cir'=> isset($_POST['tar_abd_cir']) ? $_POST['tar_abd_cir'] : null,
            'tar_est_fet_wei'=> isset($_POST['tar_est_fet_wei']) ? $_POST['tar_est_fet_wei'] : null,
            'tar_pla'=> isset($_POST['tar_pla']) ? $_POST['tar_pla'] : null,
            'tar_tone'=> isset($_POST['tar_tone']) ? $_POST['tar_tone'] : null,
            'tar_move'=> isset($_POST['tar_move']) ? $_POST['tar_move'] : null,
            'tar_brea'=> isset($_POST['tar_brea']) ? $_POST['tar_brea'] : null,
            'tar_amn_flu_ind'=> isset($_POST['tar_amn_flu_ind']) ? $_POST['tar_amn_flu_ind'] : null,
            'tar_impre'=> isset($_POST['tar_impre']) ? $_POST['tar_impre'] : null
           ));

           echo 1;

    }elseif(isset($_POST['tarid'])){

        $tarid = $_POST['tarid'];

        $sql = $handler->prepare("UPDATE transabdominal SET
                tar_indate = :tar_indate,
                tar_num = :tar_num,
                tar_pres = :tar_pres,
                tar_bip_dia = :tar_bip_dia,
                tar_occ_dia = :tar_occ_dia,
                tar_cep_ind = :tar_cep_ind,
                tar_fem_len = :tar_fem_len,
                tar_abd_cir = :tar_abd_cir,
                tar_est_fet_wei = :tar_est_fet_wei,
                tar_pla = :tar_pla,
                tar_tone = :tar_tone,
                tar_move = :tar_move,
                tar_brea = :tar_brea,
                tar_amn_flu_ind = :tar_amn_flu_ind,
                tar_impre = :tar_impre
                WHERE tar_id = :tar_id
            ");
        $sql->execute(array(
            'tar_indate' => isset($_POST['urdate']) ? $_POST['urdate'] :null,
            'tar_num' => isset($_POST['tar_num']) ? $_POST['tar_num'] :null,
            'tar_pres' => isset($_POST['tar_pres']) ? $_POST['tar_pres'] :null,
            'tar_bip_dia' => isset($_POST['tar_bip_dia']) ? $_POST['tar_bip_dia'] :null,
            'tar_occ_dia' => isset($_POST['tar_occ_dia']) ? $_POST['tar_occ_dia'] :null,
            'tar_cep_ind' => isset($_POST['tar_cep_ind']) ? $_POST['tar_cep_ind'] :null,
            'tar_fem_len' => isset($_POST['tar_fem_len']) ? $_POST['tar_fem_len'] :null,
            'tar_abd_cir' => isset($_POST['tar_abd_cir']) ? $_POST['tar_abd_cir'] :null,
            'tar_est_fet_wei' => isset($_POST['tar_est_fet_wei']) ? $_POST['tar_est_fet_wei'] :null,
            'tar_pla' => isset($_POST['tar_pla']) ? $_POST['tar_pla'] :null,
            'tar_tone' => isset($_POST['tar_tone']) ? $_POST['tar_tone'] :null,
            'tar_move' => isset($_POST['tar_move']) ? $_POST['tar_move'] :null,
            'tar_brea' => isset($_POST['tar_brea']) ? $_POST['tar_brea'] :null,
            'tar_amn_flu_ind' => isset($_POST['tar_amn_flu_ind']) ? $_POST['tar_amn_flu_ind'] :null,
            'tar_impre' => isset($_POST['tar_impre']) ? $_POST['tar_impre'] :null,
            'tar_id' =>  $tarid
        ));

        echo 1;

     }elseif (isset($_POST['del'])) {

        $tarid = $_POST['tar'];
        $sql = $handler->prepare("DELETE FROM transabdominal WHERE tar_id = :tar");
        $sql->execute(array('tar'=>$tarid));

        

        echo 1;
    }elseif (isset($_POST['tarprint'])) {

        $tarprint = $_POST['tarprint'];
        $result = "";

        $sql = $handler->prepare("SELECT 
            patient.pat_num, 
            patient.pat_fname, 
            patient.pat_mname, 
            patient.pat_lname,
            patient.pat_bday,
            transabdominal.tar_id,
            transabdominal.tar_indate,
            transabdominal.tar_num,
            transabdominal.tar_pres,
            transabdominal.tar_bip_dia,
            transabdominal.tar_occ_dia,
            transabdominal.tar_cep_ind,
            transabdominal.tar_fem_len,
            transabdominal.tar_abd_cir,
            transabdominal.tar_est_fet_wei,
            transabdominal.tar_pla,
            transabdominal.tar_tone,
            transabdominal.tar_move,
            transabdominal.tar_brea,
            transabdominal.tar_amn_flu_ind,
            transabdominal.tar_impre
            FROM patient RIGHT JOIN transabdominal ON
            patient.pat_num = transabdominal.pat_num
            WHERE transabdominal.tar_id = ?
        ");

        $sql->execute(array($tarprint));

        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $tz  = new DateTimeZone('Asia/Taipei');

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->tar_indate);
            $date = date_format($dateCre, 'M. d, Y');
            $age = DateTime::createFromFormat('m/d/Y', $row->pat_bday , $tz)
             ->diff(new DateTime('now', $tz))
             ->y;
            
            $result[] = array(
                'patnum' => $row->pat_num,
                'age' => $age,
                'tar_id' => $row->tar_id,
                'patname' => $fullname,
                'tar_indate' => $date,
                'tar_num' =>$row->tar_num,
                'tar_pres' =>$row->tar_pres,
                'tar_bip_dia' =>$row->tar_bip_dia,
                'tar_occ_dia' =>$row->tar_occ_dia,
                'tar_cep_ind' =>$row->tar_cep_ind,
                'tar_fem_len' =>$row->tar_fem_len,
                'tar_abd_cir' =>$row->tar_abd_cir,
                'tar_est_fet_wei' =>$row->tar_est_fet_wei,
                'tar_pla' =>$row->tar_pla,
                'tar_tone' =>$row->tar_tone,
                'tar_move' =>$row->tar_move,
                'tar_brea' =>$row->tar_brea,
                'tar_amn_flu_ind' =>$row->tar_amn_flu_ind,
                'tar_impre' =>$row->tar_impre
               

            );

           
        }

        echo json_encode($result);
    }elseif(isset($_POST['get_usr'])){

        $tarid = $_POST['get_usr'];

        $result = "";
        $sql = $handler->prepare("SELECT 
            patient.pat_num, 
            patient.pat_fname, 
            patient.pat_mname, 
            patient.pat_lname,
            patient.pat_bday,
            transabdominal.tar_id,
            transabdominal.tar_indate,
            transabdominal.tar_num,
            transabdominal.tar_pres,
            transabdominal.tar_bip_dia,
            transabdominal.tar_occ_dia,
            transabdominal.tar_cep_ind,
            transabdominal.tar_fem_len,
            transabdominal.tar_abd_cir,
            transabdominal.tar_est_fet_wei,
            transabdominal.tar_pla,
            transabdominal.tar_tone,
            transabdominal.tar_move,
            transabdominal.tar_brea,
            transabdominal.tar_amn_flu_ind,
            transabdominal.tar_impre
            FROM patient RIGHT JOIN transabdominal ON
            patient.pat_num = transabdominal.pat_num
            WHERE transabdominal.tar_id = ?
        ");

        $sql->execute(array($tarid));

        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
                $lname = ucfirst($row->pat_mname).".";
            }else{
                $lname = "";
            }

            $tz  = new DateTimeZone('Asia/Taipei');

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $dateCre = date_create($row->tar_indate);
            $date = date_format($dateCre, 'M. d, Y');
            $age = DateTime::createFromFormat('m/d/Y', $row->pat_bday , $tz)
             ->diff(new DateTime('now', $tz))
             ->y;
            
            $result[] = array(
                'patnum' => $row->pat_num,
                'age' => $age,
                'tar_id' => $row->tar_id,
                'patname' => $fullname,
                'tar_indate' => $row->tar_indate,
                'tar_num' =>$row->tar_num,
                'tar_pres' =>$row->tar_pres,
                'tar_bip_dia' =>$row->tar_bip_dia,
                'tar_occ_dia' =>$row->tar_occ_dia,
                'tar_cep_ind' =>$row->tar_cep_ind,
                'tar_fem_len' =>$row->tar_fem_len,
                'tar_abd_cir' =>$row->tar_abd_cir,
                'tar_est_fet_wei' =>$row->tar_est_fet_wei,
                'tar_pla' =>$row->tar_pla,
                'tar_tone' =>$row->tar_tone,
                'tar_move' =>$row->tar_move,
                'tar_brea' =>$row->tar_brea,
                'tar_amn_flu_ind' =>$row->tar_amn_flu_ind,
                'tar_impre' =>$row->tar_impre
               

            );

           
        }

        echo json_encode($result);

    }else{
          $result = "";

          $sql = $handler->query("SELECT 
            patient.pat_num, 
            patient.pat_fname, 
            patient.pat_mname, 
            patient.pat_lname,
            transabdominal.tar_id,
            transabdominal.tar_indate,
            transabdominal.tar_num,
            transabdominal.tar_pres,
            transabdominal.tar_bip_dia,
            transabdominal.tar_occ_dia,
            transabdominal.tar_cep_ind,
            transabdominal.tar_fem_len,
            transabdominal.tar_abd_cir,
            transabdominal.tar_est_fet_wei,
            transabdominal.tar_pla,
            transabdominal.tar_tone,
            transabdominal.tar_move,
            transabdominal.tar_brea,
            transabdominal.tar_amn_flu_ind,
            transabdominal.tar_impre
            FROM patient RIGHT JOIN transabdominal ON
            patient.pat_num = transabdominal.pat_num
            ORDER BY transabdominal.tar_id DESC 
        ");

        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->tar_indate);
            $date = date_format($dateCre, 'M. d, Y');
            
            $result[] = array(
                'tar_id' => $row->tar_id,
                'patname' => $fullname,
                'tar_indate' => $date,
                'tar_num' =>$row->tar_num,
                'tar_pres' =>$row->tar_pres,
                'tar_bip_dia' =>$row->tar_bip_dia,
                'tar_occ_dia' =>$row->tar_occ_dia,
                'tar_cep_ind' =>$row->tar_cep_ind,
                'tar_fem_len' =>$row->tar_fem_len,
                'tar_abd_cir' =>$row->tar_abd_cir,
                'tar_est_fet_wei' =>$row->tar_est_fet_wei,
                'tar_pla' =>$row->tar_pla,
                'tar_tone' =>$row->tar_tone,
                'tar_move' =>$row->tar_move,
                'tar_brea' =>$row->tar_brea,
                'tar_amn_flu_ind' =>$row->tar_amn_flu_ind,
                'tar_impre' =>$row->tar_impre
               

            );

           
        }

        echo json_encode($result);

      }
?>