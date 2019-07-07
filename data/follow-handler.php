<?php
     require_once("handler.php");

     if(isset($_POST['patname'])){
        $sql = $handler->prepare("INSERT INTO fol_plan(
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
            `st_lab11`,
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
            `st_res11`,
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
            :st_lab11,
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
            :st_res11,
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
            'st_lab11' => isset($_POST['lab11']) ? $_POST['lab11'] : null,
            'st_res1' => isset($_POST['res1']) ? $_POST['res1'] : null,
            'st_res2' => isset($_POST['res2']) ? $_POST['res2'] : null,
            'st_res3' => isset($_POST['res3']) ? $_POST['res3'] : null,
            'st_res4' => isset($_POST['res4']) ? $_POST['res4'] : null, 
            'st_res5' => isset($_POST['res5']) ? $_POST['res5'] : null, 
            'st_res6' => isset($_POST['res6']) ? $_POST['res6'] : null, 
            'st_res7' => isset($_POST['res7']) ? $_POST['res7'] : null, 
            'st_res8' => isset($_POST['res8']) ? $_POST['res8'] : null, 
            'st_res9' => isset($_POST['res9']) ? $_POST['res9'] : null, 
            'st_res10' => isset($_POST['res10']) ? $_POST['res10'] : null,
            'st_res11' => isset($_POST['res11']) ? $_POST['res11'] : null  
        ));

        echo 1;
    }elseif (isset($_POST['planid'])) {

        $sql = $handler->prepare("UPDATE 
            fol_plan SET 
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
            st_lab11=:st_lab11,
            st_res1=:st_res1,
            st_res2=:st_res2,
            st_res3=:st_res3,
            st_res4=:st_res4,
            st_res5=:st_res5,
            st_res6=:st_res6,
            st_res7=:st_res7,
            st_res8=:st_res8,
            st_res9=:st_res9,
            st_res10=:st_res10,
            st_res10=:st_res11
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
            'st_lab11' => isset($_POST['lab11']) ? $_POST['lab11'] : null, 
            'st_res1' => isset($_POST['res1']) ? $_POST['res1'] : null,
            'st_res2' => isset($_POST['res2']) ? $_POST['res2'] : null,
            'st_res3' => isset($_POST['res3']) ? $_POST['res3'] : null,
            'st_res4' => isset($_POST['res4']) ? $_POST['res4'] : null, 
            'st_res5' => isset($_POST['res5']) ? $_POST['res5'] : null, 
            'st_res6' => isset($_POST['res6']) ? $_POST['res6'] : null, 
            'st_res7' => isset($_POST['res7']) ? $_POST['res7'] : null, 
            'st_res8' => isset($_POST['res8']) ? $_POST['res8'] : null, 
            'st_res9' => isset($_POST['res9']) ? $_POST['res9'] : null, 
            'st_res10' => isset($_POST['res10']) ? $_POST['res10'] : null,
            'st_res11' => isset($_POST['res11']) ? $_POST['res11'] : null
            )
        );

        echo 1;
    }elseif(isset($_POST['get_usr'])){
        $plannum = $_POST['get_usr'];
        $sql = $handler->prepare("SELECT
            fol_plan.st_id,
            fol_plan.st_lab1,
            fol_plan.st_lab2,
            fol_plan.st_lab3,
            fol_plan.st_lab4,
            fol_plan.st_lab5,
            fol_plan.st_lab6,
            fol_plan.st_lab7,
            fol_plan.st_lab8,
            fol_plan.st_lab9,
            fol_plan.st_lab10,
            fol_plan.st_lab11,
            fol_plan.st_res1,
            fol_plan.st_res2,
            fol_plan.st_res3,
            fol_plan.st_res4,
            fol_plan.st_res5,
            fol_plan.st_res6,
            fol_plan.st_res7,
            fol_plan.st_res8,
            fol_plan.st_res9,
            fol_plan.st_res10,
            fol_plan.st_res11,
            patient.pat_lname,
            patient.pat_fname,
            patient.pat_mname
            FROM fol_plan 
            INNER JOIN patient ON patient.pat_num = fol_plan.pat_num
            WHERE fol_plan.st_id = ?");

        $sql->execute(array($plannum));

        while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
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
                'lab11' =>$row->st_lab10 , 
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
                'res11' =>$row->st_res11 , 
            );
        }

        echo json_encode($result);

    }elseif (isset($_POST['del'])) {
        $ass_num = $_POST['usr'];
        //plan
        $del = $handler->prepare("DELETE FROM fol_plan WHERE st_id=?");
        $del->execute(array($ass_num));   

    }else{

        $result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,st_id, st_indate FROM patient
			INNER JOIN fol_plan ON patient.pat_num = fol_plan.pat_num ORDER BY fol_plan.st_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->st_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
                'st_id' => $row->st_id,
                'num' => $row->pat_num,
                'pat_num' => $row->pat_num,
				'fullname' => $fullname,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
    }
?>