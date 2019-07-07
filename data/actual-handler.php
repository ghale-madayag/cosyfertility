<?php
	require_once("handler.php");

	if(isset($_POST['patname'])){
		 $sql = $handler->prepare("INSERT INTO act_plan(
            `pat_num`,
            `data1`,
            `data2`,
            `data3`,
            `data4`,
            `data5`,
            `data6`,
            `data7`,
            `data8`,
            `data9`,
            `data10`,
            `data11`,
            `data12`,
            `data13`,
            `data14`,
            `data15`,
            `data16`,
            `data17`,
            `data18`,
            `data19`,
            `data20`,
            `data21`,
            `data22`,
            `data23`,
            `data24`,
            `data25`,
            `data26`,
            `data27`,
            `data28`,
            `data29`,
            `data30`,
            `data31`,
            `data32`,
            `data33`,
            `data34`,
            `data35`,
            `data36`,
            `data37`
        ) 
        VALUES(
            :pat_num,
            :data1,
            :data2,
            :data3,
            :data4,
            :data5,
            :data6,
            :data7,
            :data8,
            :data9,
            :data10,
            :data11,
            :data12,
            :data13,
            :data14,
            :data15,
            :data16,
            :data17,
            :data18,
            :data19,
            :data20,
            :data21,
            :data22,
            :data23,
           	:data24,
           	:data25,
            :data26,
            :data27,
            :data28,
            :data29,
            :data30,
            :data31,
            :data32,
            :data33,
            :data34,
            :data35,
            :data36, 
            now()  
       )");

        $sql->execute(array(
            'pat_num' => isset($_POST['patname']) ? $_POST['patname'] : null,
            'data1' => isset($_POST['data1']) ? $_POST['data1'] : null,
            'data2' => isset($_POST['data2']) ? $_POST['data2'] : null,
            'data3' => isset($_POST['data3']) ? $_POST['data3'] : null,
            'data4' => isset($_POST['data4']) ? $_POST['data4'] : null, 
            'data5' => isset($_POST['data5']) ? $_POST['data5'] : null, 
            'data6' => isset($_POST['data6']) ? $_POST['data6'] : null, 
            'data7' => isset($_POST['data7']) ? $_POST['data7'] : null, 
            'data8' => isset($_POST['data8']) ? $_POST['data8'] : null, 
            'data9' => isset($_POST['data9']) ? $_POST['data9'] : null, 
            'data10' => isset($_POST['data10']) ? $_POST['data10'] : null, 
            'data11' => isset($_POST['data11']) ? $_POST['data11'] : null,
            'data12' => isset($_POST['data12']) ? $_POST['data12'] : null,
            'data13' => isset($_POST['data13']) ? $_POST['data13'] : null,
            'data14' => isset($_POST['data14']) ? $_POST['data14'] : null,
            'data15' => isset($_POST['data15']) ? $_POST['data15'] : null,
            'data16' => isset($_POST['data16']) ? $_POST['data16'] : null, 
            'data17' => isset($_POST['data17']) ? $_POST['data17'] : null, 
            'data18' => isset($_POST['data18']) ? $_POST['data18'] : null, 
            'data19' => isset($_POST['data19']) ? $_POST['data19'] : null, 
            'data20' => isset($_POST['data20']) ? $_POST['data20'] : null, 
            'data21' => isset($_POST['data21']) ? $_POST['data21'] : null, 
            'data22' => isset($_POST['data22']) ? $_POST['data22'] : null,
            'data23' => isset($_POST['data23']) ? $_POST['data23'] : null, 
            'data24' => isset($_POST['data24']) ? $_POST['data24'] : null,
            'data25' => isset($_POST['data25']) ? $_POST['data25'] : null,
            'data26' => isset($_POST['data26']) ? $_POST['data26'] : null,
            'data27' => isset($_POST['data27']) ? $_POST['data27'] : null,
            'data28' => isset($_POST['data28']) ? $_POST['data28'] : null, 
            'data29' => isset($_POST['data29']) ? $_POST['data29'] : null, 
            'data30' => isset($_POST['data30']) ? $_POST['data30'] : null, 
            'data31' => isset($_POST['data31']) ? $_POST['data31'] : null, 
            'data32' => isset($_POST['data32']) ? $_POST['data32'] : null, 
            'data33' => isset($_POST['data33']) ? $_POST['data33'] : null,
            'data34' => isset($_POST['data34']) ? $_POST['data34'] : null,
            'data35' => isset($_POST['data35']) ? $_POST['data35'] : null,
            'data36' => isset($_POST['data36']) ? $_POST['data36'] : null
 		));
       echo 1;

    }elseif(isset($_POST['planid'])){
    	$planid = $_POST['planid'];

    	$sql = $handler->prepare("UPDATE act_plan SET
    			data1=:data1,
    			data2=:data2,
    			data3=:data3,
    			data4=:data4,
    			data5=:data5,
    			data6=:data6,
    			data7=:data7,
    			data8=:data8,
    			data9=:data9,
    			data10=:data10,
    			data11=:data11,
    			data12=:data12,
    			data13=:data13,
    			data14=:data14,
    			data15=:data15,
    			data16=:data16,
    			data17=:data17,
    			data18=:data18,
    			data19=:data19,
    			data20=:data20,
    			data21=:data21,
    			data22=:data22,
    			data23=:data23,
    			data24=:data24,
    			data25=:data25,
    			data26=:data26,
    			data27=:data27,
    			data28=:data28,
    			data29=:data29,
    			data30=:data30,
    			data31=:data31,
    			data32=:data32,
    			data33=:data33,
    			data34=:data34,
    			data35=:data35,
    			data36=:data36
    			WHERE act_id = :planid
    		");

    	$sql->execute(array(
    		'planid' => $planid,
    		'data1' => isset($_POST['data1']) ? $_POST['data1']:null,
    		'data2' => isset($_POST['data2']) ? $_POST['data2'] : null,
            'data3' => isset($_POST['data3']) ? $_POST['data3'] : null,
            'data4' => isset($_POST['data4']) ? $_POST['data4'] : null, 
            'data5' => isset($_POST['data5']) ? $_POST['data5'] : null, 
            'data6' => isset($_POST['data6']) ? $_POST['data6'] : null, 
            'data7' => isset($_POST['data7']) ? $_POST['data7'] : null, 
            'data8' => isset($_POST['data8']) ? $_POST['data8'] : null, 
            'data9' => isset($_POST['data9']) ? $_POST['data9'] : null, 
            'data10' => isset($_POST['data10']) ? $_POST['data10'] : null, 
            'data11' => isset($_POST['data11']) ? $_POST['data11'] : null,
            'data12' => isset($_POST['data12']) ? $_POST['data12'] : null,
            'data13' => isset($_POST['data13']) ? $_POST['data13'] : null,
            'data14' => isset($_POST['data14']) ? $_POST['data14'] : null,
            'data15' => isset($_POST['data15']) ? $_POST['data15'] : null,
            'data16' => isset($_POST['data16']) ? $_POST['data16'] : null, 
            'data17' => isset($_POST['data17']) ? $_POST['data17'] : null, 
            'data18' => isset($_POST['data18']) ? $_POST['data18'] : null, 
            'data19' => isset($_POST['data19']) ? $_POST['data19'] : null, 
            'data20' => isset($_POST['data20']) ? $_POST['data20'] : null, 
            'data21' => isset($_POST['data21']) ? $_POST['data21'] : null, 
            'data22' => isset($_POST['data22']) ? $_POST['data22'] : null,
            'data23' => isset($_POST['data23']) ? $_POST['data23'] : null, 
            'data24' => isset($_POST['data24']) ? $_POST['data24'] : null,
            'data25' => isset($_POST['data25']) ? $_POST['data25'] : null,
            'data26' => isset($_POST['data26']) ? $_POST['data26'] : null,
            'data27' => isset($_POST['data27']) ? $_POST['data27'] : null,
            'data28' => isset($_POST['data28']) ? $_POST['data28'] : null, 
            'data29' => isset($_POST['data29']) ? $_POST['data29'] : null, 
            'data30' => isset($_POST['data30']) ? $_POST['data30'] : null, 
            'data31' => isset($_POST['data31']) ? $_POST['data31'] : null, 
            'data32' => isset($_POST['data32']) ? $_POST['data32'] : null, 
            'data33' => isset($_POST['data33']) ? $_POST['data33'] : null,
            'data34' => isset($_POST['data34']) ? $_POST['data34'] : null,
            'data35' => isset($_POST['data35']) ? $_POST['data35'] : null,
            'data36' => isset($_POST['data36']) ? $_POST['data36'] : null 
    	));

    	echo 1;
    }elseif(isset($_POST['get_usr'])){
        $plannum = $_POST['get_usr'];
        $sql = $handler->prepare("SELECT 
        	patient.pat_fname,
        	patient.pat_mname,
        	patient.pat_lname, 
        	act_plan.act_id,
        	act_plan.data1,
        	act_plan.data2,
        	act_plan.data3,
        	act_plan.data4,
        	act_plan.data5,
        	act_plan.data6,
        	act_plan.data7,
        	act_plan.data8,
        	act_plan.data9,
        	act_plan.data10,
        	act_plan.data11,
        	act_plan.data12,
        	act_plan.data13,
        	act_plan.data14,
        	act_plan.data15,
        	act_plan.data16,
        	act_plan.data17,
        	act_plan.data18,
        	act_plan.data19,
        	act_plan.data20,
        	act_plan.data21,
        	act_plan.data22,
        	act_plan.data23,
        	act_plan.data24,
        	act_plan.data25,
        	act_plan.data26,
        	act_plan.data27,
        	act_plan.data28,
        	act_plan.data29,
        	act_plan.data30,
        	act_plan.data31,
        	act_plan.data32,
        	act_plan.data33,
        	act_plan.data34,
        	act_plan.data35,
        	act_plan.data36,
        	act_plan.data37
        	FROM patient INNER JOIN act_plan ON patient.pat_num = act_plan.pat_num WHERE act_plan.act_id = ?
        	");

        $sql->execute(array($plannum));

        while ($row=$sql->fetch(PDO::FETCH_OBJ)) {

            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $result[] = array(
                'id' =>$row->act_id,
                'fullname' => $fullname,
                'data1' => $row->data1,
                'data2' => $row->data2,
                'data3' => $row->data3,
                'data4' => $row->data4,
                'data5' => $row->data5,
                'data6' => $row->data6,
                'data7' => $row->data7,
                'data8' => $row->data8,
                'data9' => $row->data9,
                'data10' => $row->data10,
                'data11' => $row->data11,
                'data12' => $row->data12,
                'data13' => $row->data13,
                'data14' => $row->data14,
                'data15' => $row->data15,
                'data16' => $row->data16,
                'data17' => $row->data17,
                'data18' => $row->data18,
                'data19' => $row->data19,
                'data20' => $row->data20,
                'data21' => $row->data21,
                'data22' => $row->data22,
                'data23' => $row->data23,
                'data24' => $row->data24,
                'data25' => $row->data25,
                'data26' => $row->data26,
                'data27' => $row->data27,
                'data28' => $row->data28,
                'data29' => $row->data29,
                'data30' => $row->data30,
                'data31' => $row->data31,
                'data32' => $row->data32,
                'data33' => $row->data33,
                'data34' => $row->data34,
                'data35' => $row->data35,
                'data36' => $row->data36,
                'data37' => $row->data37
            );
        }

        echo json_encode($result);
    }elseif (isset($_POST['del'])) {
        $actid = $_POST['usr'];
        //plan
        $del = $handler->prepare("DELETE FROM act_plan WHERE act_id=?");
        $del->execute(array($actid));   

	}else{
		$result = "";
		$sql=$handler->query("SELECT patient.pat_num,patient.pat_fname, patient.pat_mname, patient.pat_lname,act_plan.act_id, act_plan.data37 FROM patient
								INNER JOIN act_plan ON patient.pat_num = act_plan.pat_num
							");


		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {

			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->data37);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			$result[] = array(
				'actid' => $row->act_id,
				'pat_num' => $row->pat_num,
				'pat_num' => $row->pat_num,
				'fullname' => $fullname,
				'date' => $date 
			);
		}

		echo json_encode($result);
	}
?>