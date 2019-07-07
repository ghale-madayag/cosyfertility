<?php
    require_once("handler.php");

    if(isset($_POST['patname'])){
        $sql = $handler->prepare("INSERT INTO st_plan_par(
            `pat_num`,
            `st_lab1`,
            `st_lab2`,
            `st_lab3`,
            `st_lab4`,
            `st_lab5`,
            `st_lab6`,
            `st_lab7`,
            `st_lab8`,
            `st_lab9`,
            `st_lab10`,
            `st_res1`,
            `st_res2`,
            `st_res3`,
            `st_res4`,
            `st_res5`,
            `st_res6`,
            `st_res7`,
            `st_res8`,
            `st_res9`,
            `st_res10`,
            `st_indate`
        ) 
        VALUES(
            :pat_num,
            :st_lab1,
            :st_lab2,
            :st_lab3,
            :st_lab4,
            :st_lab5,
            :st_lab6,
            :st_lab7,
            :st_lab8,
            :st_lab9,
            :st_lab10,
            :st_res1,
            :st_res2,
            :st_res3,
            :st_res4,
            :st_res5,
            :st_res6,
            :st_res7,
            :st_res8,
            :st_res9,
            :st_res10,
            now()
        )");

        $sql->execute(array(
            'pat_num' => isset($_POST['patname']) ? $_POST['patname'] : null,
            'st_lab1' => isset($_POST['lab1']) ? $_POST['lab1'] : null,
            'st_lab2' => isset($_POST['lab2']) ? $_POST['lab2'] : null,
            'st_lab3' => isset($_POST['lab3']) ? $_POST['lab3'] : null,
            'st_lab4' => isset($_POST['lab4']) ? $_POST['lab4'] : null, 
            'st_lab5' => isset($_POST['lab5']) ? $_POST['lab5'] : null, 
            'st_lab6' => isset($_POST['lab6']) ? $_POST['lab6'] : null, 
            'st_lab7' => isset($_POST['lab7']) ? $_POST['lab7'] : null, 
            'st_lab8' => isset($_POST['lab8']) ? $_POST['lab8'] : null, 
            'st_lab9' => isset($_POST['lab9']) ? $_POST['lab9'] : null, 
            'st_lab10' => isset($_POST['lab10']) ? $_POST['lab10'] : null,
            'st_res1' => isset($_POST['res1']) ? $_POST['res1'] : null,
            'st_res2' => isset($_POST['res2']) ? $_POST['res2'] : null,
            'st_res3' => isset($_POST['res3']) ? $_POST['res3'] : null,
            'st_res4' => isset($_POST['res4']) ? $_POST['res4'] : null, 
            'st_res5' => isset($_POST['res5']) ? $_POST['res5'] : null, 
            'st_res6' => isset($_POST['res6']) ? $_POST['res6'] : null, 
            'st_res7' => isset($_POST['res7']) ? $_POST['res7'] : null, 
            'st_res8' => isset($_POST['res8']) ? $_POST['res8'] : null, 
            'st_res9' => isset($_POST['res9']) ? $_POST['res9'] : null, 
            'st_res10' => isset($_POST['res10']) ? $_POST['res10'] : null 
        ));

        $id = $handler->lastInsertId();

        //medicine
        $sql = $handler->prepare("INSERT INTO st_par_med(
            `pat_num`,
            `st_id`,
            `med1`,
            `med2`,
            `med3`,
            `med4`,
            `med5`,
            `med6`,
            `med7`,
            `med8`,
            `med9`,
            `med10`,
            `med11`,
            `med12`,
            `med13`,
            `med14`,
            `med15`,
            `med16`,
            `med17`,
            `med18`,
            `med19`,
            `med20`,
            `med21`,
            `med22`,
            `med23`,
            `med24`,
            `med25`,
            `med26`,
            `med27`,
            `med28`
        ) 
        VALUES(
            :pat_num,
            :st_id,
            :med1,
            :med2,
            :med3,
            :med4,
            :med5,
            :med6,
            :med7,
            :med8,
            :med9,
            :med10,
            :med11,
            :med12,
            :med13,
            :med14,
            :med15,
            :med16,
            :med17,
            :med18,
            :med19,
            :med20,
            :med21,
            :med22,
            :med23,
            :med24,
            :med25,
            :med26,
            :med27,
            :med28
        )");

        $sql->execute(array(
            'pat_num' => isset($_POST['patname']) ? $_POST['patname'] : null,
            'st_id' => $id,
            'med1' => isset($_POST['med1']) ? $_POST['med1'] : null,
            'med2' => isset($_POST['med2']) ? $_POST['med2'] : null,
            'med3' => isset($_POST['med3']) ? $_POST['med3'] : null,
            'med4' => isset($_POST['med4']) ? $_POST['med4'] : null,
            'med5' => isset($_POST['med5']) ? $_POST['med5'] : null,
            'med6' => isset($_POST['med6']) ? $_POST['med6'] : null,
            'med7' => isset($_POST['med7']) ? $_POST['med7'] : null,
            'med8' => isset($_POST['med8']) ? $_POST['med8'] : null,
            'med9' => isset($_POST['med9']) ? $_POST['med9'] : null,
            'med10' => isset($_POST['med10']) ? $_POST['med10'] : null,
            'med11' => isset($_POST['med11']) ? $_POST['med11'] : null,
            'med12' => isset($_POST['med12']) ? $_POST['med12'] : null,
            'med13' => isset($_POST['med13']) ? $_POST['med13'] : null,
            'med14' => isset($_POST['med14']) ? $_POST['med14'] : null,
            'med15' => isset($_POST['med15']) ? $_POST['med15'] : null,
            'med16' => isset($_POST['med16']) ? $_POST['med16'] : null,
            'med17' => isset($_POST['med17']) ? $_POST['med17'] : null,
            'med18' => isset($_POST['med18']) ? $_POST['med18'] : null,
            'med19' => isset($_POST['med19']) ? $_POST['med19'] : null,
            'med20' => isset($_POST['med20']) ? $_POST['med20'] : null,
            'med21' => isset($_POST['med21']) ? $_POST['med21'] : null,
            'med22' => isset($_POST['med22']) ? $_POST['med22'] : null,
            'med23' => isset($_POST['med23']) ? $_POST['med23'] : null,
            'med24' => isset($_POST['med24']) ? $_POST['med24'] : null,
            'med25' => isset($_POST['med25']) ? $_POST['med25'] : null,
            'med26' => isset($_POST['med26']) ? $_POST['med26'] : null,
            'med27' => isset($_POST['med27']) ? $_POST['med27'] : null,
            'med28' => isset($_POST['med28']) ? $_POST['med28'] : null
        ));



        echo 1;
    }elseif (isset($_POST['planid'])) {

        $sql = $handler->prepare("UPDATE 
            st_plan_par SET 
            st_lab1=:st_lab1,
            st_lab2=:st_lab2,
            st_lab3=:st_lab3,
            st_lab4=:st_lab4,
            st_lab5=:st_lab5,
            st_lab6=:st_lab6,
            st_lab7=:st_lab7,
            st_lab8=:st_lab8,
            st_lab9=:st_lab9,
            st_lab10=:st_lab10,
            st_res1=:st_res1,
            st_res2=:st_res2,
            st_res3=:st_res3,
            st_res4=:st_res4,
            st_res5=:st_res5,
            st_res6=:st_res6,
            st_res7=:st_res7,
            st_res8=:st_res8,
            st_res9=:st_res9,
            st_res10=:st_res10
            WHERE st_id=:st_id");

        $sql->execute(array(
            'st_id'=> isset($_POST['planid']) ? $_POST['planid'] : null,
            'st_lab1' => isset($_POST['lab1']) ? $_POST['lab1'] : null,
            'st_lab2' => isset($_POST['lab2']) ? $_POST['lab2'] : null,
            'st_lab3' => isset($_POST['lab3']) ? $_POST['lab3'] : null,
            'st_lab4' => isset($_POST['lab4']) ? $_POST['lab4'] : null, 
            'st_lab5' => isset($_POST['lab5']) ? $_POST['lab5'] : null, 
            'st_lab6' => isset($_POST['lab6']) ? $_POST['lab6'] : null, 
            'st_lab7' => isset($_POST['lab7']) ? $_POST['lab7'] : null, 
            'st_lab8' => isset($_POST['lab8']) ? $_POST['lab8'] : null, 
            'st_lab9' => isset($_POST['lab9']) ? $_POST['lab9'] : null, 
            'st_lab10' => isset($_POST['lab10']) ? $_POST['lab10'] : null, 
            'st_res1' => isset($_POST['res1']) ? $_POST['res1'] : null,
            'st_res2' => isset($_POST['res2']) ? $_POST['res2'] : null,
            'st_res3' => isset($_POST['res3']) ? $_POST['res3'] : null,
            'st_res4' => isset($_POST['res4']) ? $_POST['res4'] : null, 
            'st_res5' => isset($_POST['res5']) ? $_POST['res5'] : null, 
            'st_res6' => isset($_POST['res6']) ? $_POST['res6'] : null, 
            'st_res7' => isset($_POST['res7']) ? $_POST['res7'] : null, 
            'st_res8' => isset($_POST['res8']) ? $_POST['res8'] : null, 
            'st_res9' => isset($_POST['res9']) ? $_POST['res9'] : null, 
            'st_res10' => isset($_POST['res10']) ? $_POST['res10'] : null
            )
        );

        $sql = $handler->prepare("UPDATE 
            st_par_med SET 
            med1=:med1,
            med2=:med2,
            med3=:med3,
            med4=:med4,
            med5=:med5,
            med6=:med6,
            med7=:med7,
            med8=:med8,
            med9=:med9,
            med10=:med10,
            med11=:med11,
            med12=:med12,
            med13=:med13,
            med14=:med14,
            med15=:med15,
            med16=:med16,
            med17=:med17,
            med18=:med18,
            med19=:med19,
            med20=:med20,
            med21=:med21,
            med22=:med22,
            med23=:med23,
            med24=:med24,
            med25=:med25,
            med26=:med26,
            med27=:med27,
            med28=:med28
            WHERE st_id=:st_id");

        $sql->execute(array(
            'st_id'=> isset($_POST['planid']) ? $_POST['planid'] : null,
            'med1' => isset($_POST['med1']) ? $_POST['med1'] : null,
            'med2' => isset($_POST['med2']) ? $_POST['med2'] : null,
            'med3' => isset($_POST['med3']) ? $_POST['med3'] : null,
            'med4' => isset($_POST['med4']) ? $_POST['med4'] : null,
            'med5' => isset($_POST['med5']) ? $_POST['med5'] : null,
            'med6' => isset($_POST['med6']) ? $_POST['med6'] : null,
            'med7' => isset($_POST['med7']) ? $_POST['med7'] : null,
            'med8' => isset($_POST['med8']) ? $_POST['med8'] : null,
            'med9' => isset($_POST['med9']) ? $_POST['med9'] : null,
            'med10' => isset($_POST['med10']) ? $_POST['med10'] : null,
            'med11' => isset($_POST['med11']) ? $_POST['med11'] : null,
            'med12' => isset($_POST['med12']) ? $_POST['med12'] : null,
            'med13' => isset($_POST['med13']) ? $_POST['med13'] : null,
            'med14' => isset($_POST['med14']) ? $_POST['med14'] : null,
            'med15' => isset($_POST['med15']) ? $_POST['med15'] : null,
            'med16' => isset($_POST['med16']) ? $_POST['med16'] : null,
            'med17' => isset($_POST['med17']) ? $_POST['med17'] : null,
            'med18' => isset($_POST['med18']) ? $_POST['med18'] : null,
            'med19' => isset($_POST['med19']) ? $_POST['med19'] : null,
            'med20' => isset($_POST['med20']) ? $_POST['med20'] : null,
            'med21' => isset($_POST['med21']) ? $_POST['med21'] : null,
            'med22' => isset($_POST['med22']) ? $_POST['med22'] : null,
            'med23' => isset($_POST['med23']) ? $_POST['med23'] : null,
            'med24' => isset($_POST['med24']) ? $_POST['med24'] : null,
            'med25' => isset($_POST['med25']) ? $_POST['med25'] : null,
            'med26' => isset($_POST['med26']) ? $_POST['med26'] : null,
            'med27' => isset($_POST['med27']) ? $_POST['med27'] : null,
            'med28' => isset($_POST['med28']) ? $_POST['med28'] : null
        ));
        echo 1;
    }elseif(isset($_POST['get_usr'])){
        $plannum = $_POST['get_usr'];
 
        $sql = $handler->prepare("SELECT
            st_plan_par.st_id,
            st_plan_par.st_lab1,
            st_plan_par.st_lab2,
            st_plan_par.st_lab3,
            st_plan_par.st_lab4,
            st_plan_par.st_lab5,
            st_plan_par.st_lab6,
            st_plan_par.st_lab7,
            st_plan_par.st_lab8,
            st_plan_par.st_lab9,
            st_plan_par.st_lab10,
            st_plan_par.st_res1,
            st_plan_par.st_res2,
            st_plan_par.st_res3,
            st_plan_par.st_res4,
            st_plan_par.st_res5,
            st_plan_par.st_res6,
            st_plan_par.st_res7,
            st_plan_par.st_res8,
            st_plan_par.st_res9,
            st_plan_par.st_res10,
            partners.par_lname,
            partners.par_fname,
            partners.par_mname,
            st_par_med.med1,
            st_par_med.med2,
            st_par_med.med3,
            st_par_med.med4,
            st_par_med.med5,
            st_par_med.med6,
            st_par_med.med7,
            st_par_med.med8,
            st_par_med.med9,
            st_par_med.med10,
            st_par_med.med11,
            st_par_med.med12,
            st_par_med.med13,
            st_par_med.med14,
            st_par_med.med15,
            st_par_med.med16,
            st_par_med.med17,
            st_par_med.med18,
            st_par_med.med19,
            st_par_med.med20,
            st_par_med.med21,
            st_par_med.med22,
            st_par_med.med23,
            st_par_med.med24,
            st_par_med.med25,
            st_par_med.med26,
            st_par_med.med27,
            st_par_med.med28
            FROM st_plan_par 
            INNER JOIN partners ON partners.pat_num = st_plan_par.pat_num
            INNER JOIN st_par_med ON partners.pat_num = st_par_med.pat_num
            WHERE st_plan_par.st_id = ?");

        $sql->execute(array($plannum));

        while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->par_mname!="") {
				$lname = ucfirst($row->par_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->par_fname)." ".$lname." ".ucfirst($row->par_lname);
            $result[] = array(
                'id' =>$row->st_id,
                'fullname' => $fullname,
                'lab1' =>$row->st_lab1 ,
                'lab2' =>$row->st_lab2 ,
                'lab3' =>$row->st_lab3 ,
                'lab4' =>$row->st_lab4 , 
                'lab5' =>$row->st_lab5,
                'lab6' =>$row->st_lab6 , 
                'lab7' =>$row->st_lab7 , 
                'lab8' =>$row->st_lab8 , 
                'lab9' =>$row->st_lab9 , 
                'lab10' =>$row->st_lab10 , 
                'res1' =>$row->st_res1 ,
                'res2' =>$row->st_res2 ,
                'res3' =>$row->st_res3 ,
                'res4' =>$row->st_res4 , 
                'res5' =>$row->st_res5 , 
                'res6' =>$row->st_res6 , 
                'res7' =>$row->st_res7 , 
                'res8' =>$row->st_res8 , 
                'res9' =>$row->st_res9 , 
                'res10' =>$row->st_res10 , 
                'med1' =>$row->med1,
                'med2' =>$row->med2,
                'med3' =>$row->med3,
                'med4' =>$row->med4,
                'med5' =>$row->med5,
                'med6' =>$row->med6,
                'med7' =>$row->med7,
                'med8' =>$row->med8,
                'med9' =>$row->med9,
                'med10' =>$row->med10,
                'med11' =>$row->med11,
                'med12' =>$row->med12,
                'med13' =>$row->med13,
                'med14' =>$row->med14,
                'med15' =>$row->med15,
                'med16' =>$row->med16,
                'med17' =>$row->med17,
                'med18' =>$row->med18,
                'med19' =>$row->med19,
                'med20' =>$row->med20,
                'med21' =>$row->med21,
                'med22' =>$row->med22,
                'med23' =>$row->med23,
                'med24' =>$row->med24,
                'med25' =>$row->med25,
                'med26' =>$row->med26,
                'med27' =>$row->med27,
                'med28' =>$row->med28
            );
        }

        echo json_encode($result);
    }elseif (isset($_POST['del'])) {
        $ass_num = $_POST['usr'];
        //plan
        $del = $handler->prepare("DELETE FROM st_plan_par WHERE st_id=?");
        $del->execute(array($ass_num));   
        
        $del = $handler->prepare("DELETE FROM st_par_med WHERE st_id=?");
        $del->execute(array($ass_num));   
    }else{
        $result = "";
		$sql = $handler->query("SELECT partners.pat_num, partners.par_fname, partners.par_mname, partners.par_lname,st_id, st_indate FROM partners
			INNER JOIN st_plan_par ON partners.pat_num = st_plan_par.pat_num ORDER BY st_plan_par.st_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->par_mname!="") {
				$lname = ucfirst($row->par_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->par_fname)." ".$lname." ".ucfirst($row->par_lname);
			$dateCre = date_create($row->st_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
                'st_id' => $row->st_id,
                'pat_num' => $row->pat_num,
				'fullname' => $fullname,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
    }
?>