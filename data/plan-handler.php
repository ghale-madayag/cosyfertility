<?php
    require_once("handler.php");


    if (isset($_POST['patname'])) {
        $sql = $handler->prepare("INSERT INTO st_plan_pat(
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
                `st_lab12`,
                `st_lab13`,
                `st_lab14`,
                `st_lab15`,
                `st_lab16`,
                `st_lab17`,
                `st_lab18`,
                `st_lab19`,
                `st_lab20`,
                `st_lab21`,
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
                `st_res12`,
                `st_res13`,
                `st_res14`,
                `st_res15`,
                `st_res16`,
                `st_res17`,
                `st_res18`,
                `st_res19`,
                `st_res20`,
                `st_res21`,
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
                :st_lab12,
                :st_lab13,
                :st_lab14,
                :st_lab15,
                :st_lab16,
                :st_lab17,
                :st_lab18,
                :st_lab19,
                :st_lab20,
                :st_lab21,
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
                :st_res12,
                :st_res13,
                :st_res14,
                :st_res15,
                :st_res16,
                :st_res17,
                :st_res18,
                :st_res19,
                :st_res20,
                :st_res21,
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
            'st_lab12' => isset($_POST['lab12']) ? $_POST['lab12'] : null, 
            'st_lab13' => isset($_POST['lab13']) ? $_POST['lab13'] : null, 
            'st_lab14' => isset($_POST['lab14']) ? $_POST['lab14'] : null, 
            'st_lab15' => isset($_POST['lab15']) ? $_POST['lab15'] : null, 
            'st_lab16' => isset($_POST['lab16']) ? $_POST['lab16'] : null, 
            'st_lab17' => isset($_POST['lab17']) ? $_POST['lab17'] : null, 
            'st_lab18' => isset($_POST['lab18']) ? $_POST['lab18'] : null, 
            'st_lab19' => isset($_POST['lab19']) ? $_POST['lab19'] : null, 
            'st_lab20' => isset($_POST['lab20']) ? $_POST['lab20'] : null, 
            'st_lab21' => isset($_POST['lab21']) ? $_POST['lab21'] : null,
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
            'st_res11' => isset($_POST['res11']) ? $_POST['res11'] : null, 
            'st_res12' => isset($_POST['res12']) ? $_POST['res12'] : null, 
            'st_res13' => isset($_POST['res13']) ? $_POST['res13'] : null, 
            'st_res14' => isset($_POST['res14']) ? $_POST['res14'] : null, 
            'st_res15' => isset($_POST['res15']) ? $_POST['res15'] : null, 
            'st_res16' => isset($_POST['res16']) ? $_POST['res16'] : null, 
            'st_res17' => isset($_POST['res17']) ? $_POST['res17'] : null, 
            'st_res18' => isset($_POST['res18']) ? $_POST['res18'] : null, 
            'st_res19' => isset($_POST['res19']) ? $_POST['res19'] : null, 
            'st_res20' => isset($_POST['res20']) ? $_POST['res20'] : null, 
            'st_res21' => isset($_POST['res21']) ? $_POST['res21'] : null 
        ));

        $id = $handler->lastInsertId();

        //medicine
        $sql = $handler->prepare("INSERT INTO st_pat_med(
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
            `med28`,
            `med29`,
            `med30`,
            `med31`,
            `med32`,
            `med33`,
            `med34`,
            `med35`,
            `med36`,
            `med37`,
            `med38`,
            `med39`,
            `med40`,
            `med41`,
            `med42`,
            `med43`,
            `med44`,
            `med45`,
            `med46`,
            `med47`,
            `med48`,
            `med49`,
            `med50`,
            `med51`,
            `med52`,
            `med53`,
            `med54`,
            `med55`,
            `med56`,
            `med57`,
            `med58`,
            `med59`,
            `med60`,
            `med61`,
            `med62`,
            `med63`,
            `med64`,
            `med65`,
            `med66`,
            `med67`,
            `med68`,
            `med69`,
            `med70`,
            `med71`,
            `med72`
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
            :med28,
            :med29,
            :med30,
            :med31,
            :med32,
            :med33,
            :med34,
            :med35,
            :med36,
            :med37,
            :med38,
            :med39,
            :med40,
            :med41,
            :med42,
            :med43,
            :med44,
            :med45,
            :med46,
            :med47,
            :med48,
            :med49,
            :med50,
            :med51,
            :med52,
            :med53,
            :med54,
            :med55,
            :med56,
            :med57,
            :med58,
            :med59,
            :med60,
            :med61,
            :med62,
            :med63,
            :med64,
            :med65,
            :med66,
            :med67,
            :med68,
            :med69,
            :med70,
            :med71,
            :med72
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
            'med28' => isset($_POST['med28']) ? $_POST['med28'] : null,
            'med29' => isset($_POST['med29']) ? $_POST['med29'] : null,
            'med30' => isset($_POST['med30']) ? $_POST['med30'] : null,
            'med31' => isset($_POST['med31']) ? $_POST['med31'] : null,
            'med32' => isset($_POST['med32']) ? $_POST['med32'] : null,
            'med33' => isset($_POST['med33']) ? $_POST['med33'] : null,
            'med34' => isset($_POST['med34']) ? $_POST['med34'] : null,
            'med35' => isset($_POST['med35']) ? $_POST['med35'] : null,
            'med36' => isset($_POST['med36']) ? $_POST['med36'] : null,
            'med37' => isset($_POST['med37']) ? $_POST['med37'] : null,
            'med38' => isset($_POST['med38']) ? $_POST['med38'] : null,
            'med39' => isset($_POST['med39']) ? $_POST['med39'] : null,
            'med40' => isset($_POST['med40']) ? $_POST['med40'] : null,
            'med41' => isset($_POST['med41']) ? $_POST['med41'] : null,
            'med42' => isset($_POST['med42']) ? $_POST['med42'] : null,
            'med43' => isset($_POST['med43']) ? $_POST['med43'] : null,
            'med44' => isset($_POST['med44']) ? $_POST['med44'] : null,
            'med45' => isset($_POST['med45']) ? $_POST['med45'] : null,
            'med46' => isset($_POST['med46']) ? $_POST['med46'] : null,
            'med47' => isset($_POST['med47']) ? $_POST['med47'] : null,
            'med48' => isset($_POST['med48']) ? $_POST['med48'] : null,
            'med49' => isset($_POST['med49']) ? $_POST['med49'] : null,
            'med50' => isset($_POST['med50']) ? $_POST['med50'] : null,
            'med51' => isset($_POST['med51']) ? $_POST['med51'] : null,
            'med52' => isset($_POST['med52']) ? $_POST['med52'] : null,
            'med53' => isset($_POST['med53']) ? $_POST['med53'] : null,
            'med54' => isset($_POST['med54']) ? $_POST['med54'] : null,
            'med55' => isset($_POST['med55']) ? $_POST['med55'] : null,
            'med56' => isset($_POST['med56']) ? $_POST['med56'] : null,
            'med57' => isset($_POST['med57']) ? $_POST['med57'] : null,
            'med58' => isset($_POST['med58']) ? $_POST['med58'] : null,
            'med59' => isset($_POST['med59']) ? $_POST['med59'] : null,
            'med60' => isset($_POST['med60']) ? $_POST['med60'] : null,
            'med61' => isset($_POST['med61']) ? $_POST['med61'] : null,
            'med62' => isset($_POST['med62']) ? $_POST['med62'] : null,
            'med63' => isset($_POST['med63']) ? $_POST['med63'] : null,
            'med64' => isset($_POST['med64']) ? $_POST['med64'] : null,
            'med65' => isset($_POST['med65']) ? $_POST['med65'] : null,
            'med66' => isset($_POST['med66']) ? $_POST['med66'] : null,
            'med67' => isset($_POST['med67']) ? $_POST['med67'] : null,
            'med68' => isset($_POST['med68']) ? $_POST['med68'] : null,
            'med69' => isset($_POST['med69']) ? $_POST['med69'] : null,
            'med70' => isset($_POST['med70']) ? $_POST['med70'] : null,
            'med71' => isset($_POST['med71']) ? $_POST['med71'] : null,
            'med72' => isset($_POST['med72']) ? $_POST['med72'] : null,
        ));

        echo 1;

    }elseif (isset($_POST['recplan'])) {
        $sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,plan.plan_num, plan.plan_indate 
        FROM patient RIGHT JOIN plan ON patient.pat_num = plan.pat_num ORDER BY plan.plan_indate DESC LIMIT 5");

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			 if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $dateCre = date_create($row->plan_indate);

			$date = date_format($dateCre, 'M. d, Y');

            $result[] = array(
            	'pat_num' => $row->plan_num,
            	'fullname' => $fullname,
            	'img' => substr(ucfirst($row->pat_fname), 0, 1)."".substr(ucfirst($row->pat_lname), 0, 1),
            	'indate' => $date
            );
		}

        echo json_encode($result);
    }elseif(isset($_POST['get_usr'])){
        $plannum = $_POST['get_usr'];
 
        $sql = $handler->prepare("SELECT
            st_plan_pat.st_id,
            st_plan_pat.st_lab1,
            st_plan_pat.st_lab2,
            st_plan_pat.st_lab3,
            st_plan_pat.st_lab4,
            st_plan_pat.st_lab5,
            st_plan_pat.st_lab6,
            st_plan_pat.st_lab7,
            st_plan_pat.st_lab8,
            st_plan_pat.st_lab9,
            st_plan_pat.st_lab10,
            st_plan_pat.st_lab11,
            st_plan_pat.st_lab12,
            st_plan_pat.st_lab13,
            st_plan_pat.st_lab14,
            st_plan_pat.st_lab15,
            st_plan_pat.st_lab16,
            st_plan_pat.st_lab17,
            st_plan_pat.st_lab18,
            st_plan_pat.st_lab19,
            st_plan_pat.st_lab20,
            st_plan_pat.st_lab21,
            st_plan_pat.st_res1,
            st_plan_pat.st_res2,
            st_plan_pat.st_res3,
            st_plan_pat.st_res4,
            st_plan_pat.st_res5,
            st_plan_pat.st_res6,
            st_plan_pat.st_res7,
            st_plan_pat.st_res8,
            st_plan_pat.st_res9,
            st_plan_pat.st_res10,
            st_plan_pat.st_res11,
            st_plan_pat.st_res12,
            st_plan_pat.st_res13,
            st_plan_pat.st_res14,
            st_plan_pat.st_res15,
            st_plan_pat.st_res16,
            st_plan_pat.st_res17,
            st_plan_pat.st_res18,
            st_plan_pat.st_res19,
            st_plan_pat.st_res20,
            st_plan_pat.st_res21,
            patient.pat_lname,
            patient.pat_fname,
            patient.pat_mname,
            st_pat_med.med1,
            st_pat_med.med2,
            st_pat_med.med3,
            st_pat_med.med4,
            st_pat_med.med5,
            st_pat_med.med6,
            st_pat_med.med7,
            st_pat_med.med8,
            st_pat_med.med9,
            st_pat_med.med10,
            st_pat_med.med11,
            st_pat_med.med12,
            st_pat_med.med13,
            st_pat_med.med14,
            st_pat_med.med15,
            st_pat_med.med16,
            st_pat_med.med17,
            st_pat_med.med18,
            st_pat_med.med19,
            st_pat_med.med20,
            st_pat_med.med21,
            st_pat_med.med22,
            st_pat_med.med23,
            st_pat_med.med24,
            st_pat_med.med25,
            st_pat_med.med26,
            st_pat_med.med27,
            st_pat_med.med28,
            st_pat_med.med29,
            st_pat_med.med30,
            st_pat_med.med31,
            st_pat_med.med32,
            st_pat_med.med33,
            st_pat_med.med34,
            st_pat_med.med35,
            st_pat_med.med36,
            st_pat_med.med37,
            st_pat_med.med38,
            st_pat_med.med39,
            st_pat_med.med40,
            st_pat_med.med41,
            st_pat_med.med42,
            st_pat_med.med43,
            st_pat_med.med44,
            st_pat_med.med45,
            st_pat_med.med46,
            st_pat_med.med47,
            st_pat_med.med48,
            st_pat_med.med49,
            st_pat_med.med50,
            st_pat_med.med51,
            st_pat_med.med52,
            st_pat_med.med53,
            st_pat_med.med54,
            st_pat_med.med55,
            st_pat_med.med56,
            st_pat_med.med57,
            st_pat_med.med58,
            st_pat_med.med59,
            st_pat_med.med60,
            st_pat_med.med61,
            st_pat_med.med62,
            st_pat_med.med63,
            st_pat_med.med64,
            st_pat_med.med65,
            st_pat_med.med66,
            st_pat_med.med67,
            st_pat_med.med68,
            st_pat_med.med69,
            st_pat_med.med70,
            st_pat_med.med71,
            st_pat_med.med72
            FROM st_plan_pat 
            INNER JOIN patient ON patient.pat_num = st_plan_pat.pat_num
            INNER JOIN st_pat_med ON patient.pat_num = st_pat_med.pat_num
            WHERE st_plan_pat.st_id = ?");

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
                'lab11' =>$row->st_lab11 , 
                'lab12' =>$row->st_lab12 , 
                'lab13' =>$row->st_lab13 , 
                'lab14' =>$row->st_lab14 , 
                'lab15' =>$row->st_lab15 , 
                'lab16' =>$row->st_lab16 , 
                'lab17' =>$row->st_lab17 , 
                'lab18' =>$row->st_lab18 , 
                'lab19' =>$row->st_lab19 , 
                'lab20' =>$row->st_lab20 , 
                'lab21' =>$row->st_lab21 ,
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
                'res12' =>$row->st_res12 , 
                'res13' =>$row->st_res13 , 
                'res14' =>$row->st_res14 , 
                'res15' =>$row->st_res15 , 
                'res16' =>$row->st_res16 , 
                'res17' =>$row->st_res17 , 
                'res18' =>$row->st_res18 , 
                'res19' =>$row->st_res19 , 
                'res20' =>$row->st_res20 , 
                'res21' =>$row->st_res21,
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
                'med28' =>$row->med28,
                'med29' =>$row->med29,
                'med30' =>$row->med30,
                'med31' =>$row->med31,
                'med32' =>$row->med32,
                'med33' =>$row->med33,
                'med34' =>$row->med34,
                'med35' =>$row->med35,
                'med36' =>$row->med36,
                'med37' =>$row->med37,
                'med38' =>$row->med38,
                'med39' =>$row->med39,
                'med40' =>$row->med40,
                'med41' =>$row->med41,
                'med42' =>$row->med42,
                'med43' =>$row->med43,
                'med44' =>$row->med44,
                'med45' =>$row->med45,
                'med46' =>$row->med46,
                'med47' =>$row->med47,
                'med48' =>$row->med48,
                'med49' =>$row->med49,
                'med50' =>$row->med50,
                'med51' =>$row->med51,
                'med52' =>$row->med52,
                'med53' =>$row->med53,
                'med54' =>$row->med54,
                'med55' =>$row->med55,
                'med56' =>$row->med56,
                'med57' =>$row->med57,
                'med58' =>$row->med58,
                'med59' =>$row->med59,
                'med60' =>$row->med60,
                'med61' =>$row->med61,
                'med62' =>$row->med62,
                'med63' =>$row->med63,
                'med64' =>$row->med64,
                'med65' =>$row->med65,
                'med66' =>$row->med66,
                'med67' =>$row->med67,
                'med68' =>$row->med68,
                'med69' =>$row->med69,
                'med70' =>$row->med70,
                'med71' =>$row->med71,
                'med72' =>$row->med72
            );
        }

        echo json_encode($result);
    }elseif (isset($_POST['planid'])) {

            $sql = $handler->prepare("UPDATE 
                st_plan_pat SET 
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
                st_lab12=:st_lab12,
                st_lab13=:st_lab13,
                st_lab14=:st_lab14,
                st_lab15=:st_lab15,
                st_lab16=:st_lab16,
                st_lab17=:st_lab17,
                st_lab18=:st_lab18,
                st_lab19=:st_lab19,
                st_lab20=:st_lab20,
                st_lab21=:st_lab21,
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
                st_res11=:st_res11,
                st_res12=:st_res12,
                st_res13=:st_res13,
                st_res14=:st_res14,
                st_res15=:st_res15,
                st_res16=:st_res16,
                st_res17=:st_res17,
                st_res18=:st_res18,
                st_res19=:st_res19,
                st_res20=:st_res20,
                st_res21=:st_res21
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
                'st_lab12' => isset($_POST['lab12']) ? $_POST['lab12'] : null, 
                'st_lab13' => isset($_POST['lab13']) ? $_POST['lab13'] : null, 
                'st_lab14' => isset($_POST['lab14']) ? $_POST['lab14'] : null, 
                'st_lab15' => isset($_POST['lab15']) ? $_POST['lab15'] : null, 
                'st_lab16' => isset($_POST['lab16']) ? $_POST['lab16'] : null, 
                'st_lab17' => isset($_POST['lab17']) ? $_POST['lab17'] : null, 
                'st_lab18' => isset($_POST['lab18']) ? $_POST['lab18'] : null, 
                'st_lab19' => isset($_POST['lab19']) ? $_POST['lab19'] : null, 
                'st_lab20' => isset($_POST['lab20']) ? $_POST['lab20'] : null, 
                'st_lab21' => isset($_POST['lab21']) ? $_POST['lab21'] : null,
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
                'st_res11' => isset($_POST['res11']) ? $_POST['res11'] : null, 
                'st_res12' => isset($_POST['res12']) ? $_POST['res12'] : null, 
                'st_res13' => isset($_POST['res13']) ? $_POST['res13'] : null, 
                'st_res14' => isset($_POST['res14']) ? $_POST['res14'] : null, 
                'st_res15' => isset($_POST['res15']) ? $_POST['res15'] : null, 
                'st_res16' => isset($_POST['res16']) ? $_POST['res16'] : null, 
                'st_res17' => isset($_POST['res17']) ? $_POST['res17'] : null, 
                'st_res18' => isset($_POST['res18']) ? $_POST['res18'] : null, 
                'st_res19' => isset($_POST['res19']) ? $_POST['res19'] : null, 
                'st_res20' => isset($_POST['res20']) ? $_POST['res20'] : null, 
                'st_res21' => isset($_POST['res21']) ? $_POST['res21'] : null 
                )
            );

            $sql = $handler->prepare("UPDATE 
                st_pat_med SET 
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
                med28=:med28,
                med29=:med29,
                med30=:med30,
                med31=:med31,
                med32=:med32,
                med33=:med33,
                med34=:med34,
                med35=:med35,
                med36=:med36,
                med37=:med37,
                med38=:med38,
                med39=:med39,
                med40=:med40,
                med41=:med41,
                med42=:med42,
                med43=:med43,
                med44=:med44,
                med45=:med45,
                med46=:med46,
                med47=:med47,
                med48=:med48,
                med49=:med49,
                med50=:med50,
                med51=:med51,
                med52=:med52,
                med53=:med53,
                med54=:med54,
                med55=:med55,
                med56=:med56,
                med57=:med57,
                med58=:med58,
                med59=:med59,
                med60=:med60,
                med61=:med61,
                med62=:med62,
                med63=:med63,
                med64=:med64,
                med65=:med65,
                med66=:med66,
                med67=:med67,
                med68=:med68,
                med69=:med69,
                med70=:med70,
                med71=:med71,
                med72=:med72
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
                'med28' => isset($_POST['med28']) ? $_POST['med28'] : null,
                'med29' => isset($_POST['med29']) ? $_POST['med29'] : null,
                'med30' => isset($_POST['med30']) ? $_POST['med30'] : null,
                'med31' => isset($_POST['med31']) ? $_POST['med31'] : null,
                'med32' => isset($_POST['med32']) ? $_POST['med32'] : null,
                'med33' => isset($_POST['med33']) ? $_POST['med33'] : null,
                'med34' => isset($_POST['med34']) ? $_POST['med34'] : null,
                'med35' => isset($_POST['med35']) ? $_POST['med35'] : null,
                'med36' => isset($_POST['med36']) ? $_POST['med36'] : null,
                'med37' => isset($_POST['med37']) ? $_POST['med37'] : null,
                'med38' => isset($_POST['med38']) ? $_POST['med38'] : null,
                'med39' => isset($_POST['med39']) ? $_POST['med39'] : null,
                'med40' => isset($_POST['med40']) ? $_POST['med40'] : null,
                'med41' => isset($_POST['med41']) ? $_POST['med41'] : null,
                'med42' => isset($_POST['med42']) ? $_POST['med42'] : null,
                'med43' => isset($_POST['med43']) ? $_POST['med43'] : null,
                'med44' => isset($_POST['med44']) ? $_POST['med44'] : null,
                'med45' => isset($_POST['med45']) ? $_POST['med45'] : null,
                'med46' => isset($_POST['med46']) ? $_POST['med46'] : null,
                'med47' => isset($_POST['med47']) ? $_POST['med47'] : null,
                'med48' => isset($_POST['med48']) ? $_POST['med48'] : null,
                'med49' => isset($_POST['med49']) ? $_POST['med49'] : null,
                'med50' => isset($_POST['med50']) ? $_POST['med50'] : null,
                'med51' => isset($_POST['med51']) ? $_POST['med51'] : null,
                'med52' => isset($_POST['med52']) ? $_POST['med52'] : null,
                'med53' => isset($_POST['med53']) ? $_POST['med53'] : null,
                'med54' => isset($_POST['med54']) ? $_POST['med54'] : null,
                'med55' => isset($_POST['med55']) ? $_POST['med55'] : null,
                'med56' => isset($_POST['med56']) ? $_POST['med56'] : null,
                'med57' => isset($_POST['med57']) ? $_POST['med57'] : null,
                'med58' => isset($_POST['med58']) ? $_POST['med58'] : null,
                'med59' => isset($_POST['med59']) ? $_POST['med59'] : null,
                'med60' => isset($_POST['med60']) ? $_POST['med60'] : null,
                'med61' => isset($_POST['med61']) ? $_POST['med61'] : null,
                'med62' => isset($_POST['med62']) ? $_POST['med62'] : null,
                'med63' => isset($_POST['med63']) ? $_POST['med63'] : null,
                'med64' => isset($_POST['med64']) ? $_POST['med64'] : null,
                'med65' => isset($_POST['med65']) ? $_POST['med65'] : null,
                'med66' => isset($_POST['med66']) ? $_POST['med66'] : null,
                'med67' => isset($_POST['med67']) ? $_POST['med67'] : null,
                'med68' => isset($_POST['med68']) ? $_POST['med68'] : null,
                'med69' => isset($_POST['med69']) ? $_POST['med69'] : null,
                'med70' => isset($_POST['med70']) ? $_POST['med70'] : null,
                'med71' => isset($_POST['med71']) ? $_POST['med71'] : null,
                'med72' => isset($_POST['med72']) ? $_POST['med72'] : null,
            ));
            echo 1;
    }elseif (isset($_POST['del'])) {
        $ass_num = $_POST['usr'];
        //plan
        $del = $handler->prepare("DELETE FROM st_plan_pat WHERE st_id=?");
        $del->execute(array($ass_num));   
        
        $del = $handler->prepare("DELETE FROM st_pat_med WHERE st_id=?");
        $del->execute(array($ass_num));   
    }else{
        $result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,st_plan_pat.st_id,st_plan_pat.st_indate FROM patient
			INNER JOIN st_plan_pat ON patient.pat_num = st_plan_pat.pat_num ORDER BY st_plan_pat.st_indate DESC");

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
                'pat_num' => $row->pat_num,
				'fullname' => $fullname,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
    }
?>