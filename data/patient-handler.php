<?php
	require_once('handler.php');

	if(isset($_POST['get_all_patient'])){
		$compcode = "PAT";

		$sql = $handler->query("SELECT pat_num FROM patient ORDER BY pat_indate DESC");

		if ($sql->rowCount()) {
			$r = $sql->fetch(PDO::FETCH_OBJ);
			$cus_con = substr($r->pat_num, 4);
			$convert = $cus_con + 1;
		}else{
			$convert = 1;
		}

		$pat_num =  $compcode.str_pad($convert, 4, "0", STR_PAD_LEFT);
		echo $pat_num;

	}elseif (isset($_POST['get_patinfo'])) {
		$id = $_POST['get_patinfo'];

		$sql = $handler->prepare("SELECT 
		patient.pat_num, 
		patient.pat_fname, 
		patient.pat_mname, 
		patient.pat_lname,
		patient.pat_bday, 
		patient.pat_cstat,
		patient.pat_contact,
		patient.pat_email,
		patient.pat_fb,
		patient.pat_homadd,
		patient.pat_occu,
		patient.pat_offwor,
		patient.pat_asse,
		patient.pat_refered,
		lt_plan.ltp_p1,
		lt_plan.ltp_p2,
		lt_plan.ltp_p3,
		lt_plan.ltp_p4,
		lt_plan.ltp_p5,
		lt_plan.ltp_p6,
		lt_plan.ltp_p7,
		lt_plan.ltp_p8,
		lt_plan.ltp_p9,
		visit.vis_date,
		visit.vis_patBp,
		visit.vis_patHt,
		visit.vis_patWt,
		visit.vis_patBmi,
		visit.vis_parBp,
		visit.vis_parHt,
		visit.vis_parWt,
		visit.vis_parBmi,
		complaint.com_g,
		complaint.com_a,
		complaint.com_p,
		complaint.com_l,
		complaint.com_lmp,
		complaint.com_Lh,
		complaint.com_Ln,
		complaint.com_Ll,
		complaint.com_pmp,
		complaint.com_Ph,
		complaint.com_Pn,
		complaint.com_Pl,
		charge.ch_ip,
		charge.ch_doc,
		charge.ch_irre,
		charge.ch_dys,
		charge.ch_dis,
		charge.ch_dia,
		charge.ch_ast,
		charge.ch_smo,
		charge.ch_dri,
		charge.ch_cont,
		charge.ch_hpv,
		charge.ch_pap,
		gyne.gy_date,
		gyne.gy_doctor,
		gyne.gy_diag,
		gyne.gy_tre,
		gyne.gy_mar,
		gyne.gy_coh,
		gyne.gy_try,
		gyne.gy_coi,
		partners.par_lname,
		partners.par_fname,
		partners.par_mname,
		partners.par_bdate,
		partners.par_occu,
		partners.par_other,
		partners.par_owomen,
		partners.par_eche,
		partners.par_eradia,
		partners.par_eheat,
		partners.par_dia,
		partners.par_ast,
		partners.par_smo,
		partners.par_dri,
		partners.par_mum,
		partners.par_var,
		partners.par_erec,
		partners.par_vas,
		partners.par_horm,
		partners.par_supp,
		partners.par_anti
		FROM patient INNER JOIN lt_plan ON patient.pat_num = lt_plan.pat_num
		INNER JOIN visit ON patient.pat_num = visit.pat_num
		INNER JOIN complaint ON patient.pat_num = complaint.pat_num
		INNER JOIN charge ON patient.pat_num = charge.pat_num
		INNER JOIN gyne ON patient.pat_num = gyne.pat_num
		INNER JOIN partners ON patient.pat_num = partners.pat_num
		WHERE patient.pat_num = ? ORDER BY patient.pat_indate DESC");

		$sql->execute(array($id));

		$row = $sql->fetch(PDO::FETCH_OBJ);

		$result[] = array(
			'pat_num' => $row->pat_num,
			'lname' => $row->pat_lname, 
			'fname' => $row->pat_fname,
			'mname' => $row->pat_mname,
			'bday' => $row->pat_bday,
			'cstat' => $row->pat_cstat,
			'contact' => $row->pat_contact,
			'email' => $row->pat_email,
			'fb' => $row->pat_fb,
			'homadd' => $row->pat_homadd,
			'occu' => $row->pat_occu,
			'offwor' => $row->pat_offwor,
			'asse' => $row->pat_asse,
			'refered' => $row->pat_refered,
			'ltp1' => $row->ltp_p1,
			'ltp2' => $row->ltp_p2,
			'ltp3' => $row->ltp_p3,
			'ltp4' => $row->ltp_p4,
			'ltp5' => $row->ltp_p5,
			'ltp6' => $row->ltp_p6,
			'ltp7' => $row->ltp_p7,
			'ltp8' => $row->ltp_p8,
			'ltp9' => $row->ltp_p9,
			'visDate' => $row->vis_date,
			'patBp' => $row->vis_patBp,
			'patHt' => $row->vis_patHt,
			'patWt' => $row->vis_patWt,
			'patBmi' => $row->vis_patBmi,
			'parBp' => $row->vis_parBp,
			'parHt' => $row->vis_parHt,
			'parWt' => $row->vis_parWt,
			'parBmi' => $row->vis_parBmi,
			'comGAPL' => $row->com_g,
			'coma' => $row->com_a,
			'comp' => $row->com_p,
			'coml' => $row->com_l,
			'comlmp' => $row->com_lmp,
			'comlh' => $row->com_Lh,
			'comln' => $row->com_Ln,
			'comll' => $row->com_Ll,
			'compmp' => $row->com_pmp,
			'comph' => $row->com_Ph,
			'compn' => $row->com_Pn,
			'compl' => $row->com_Pl,
			'chip' => $row->ch_ip,
			'chdoc' => $row->ch_doc,
			'chirre' => $row->ch_irre,
			'chdys' => $row->ch_dys,
			'chdis' => $row->ch_dis,
			'chdia' => $row->ch_dia,
			'chast' => $row->ch_ast,
			'chsmo' => $row->ch_smo,
			'chdri' => $row->ch_dri,
			'chcont' => $row->ch_cont,
			'chhpv' => $row->ch_hpv,
			'chpap' => $row->ch_pap,
			'gydate' => $row->gy_date,
			'gydoc' => $row->gy_doctor,
			'gydiag' => $row->gy_diag,
			'gytre' => $row->gy_tre,
			'gymar' => $row->gy_mar,
			'gycoh' => $row->gy_coh,
			'gytry' => $row->gy_try,
			'gycoi' => $row->gy_coi,
			'parLname'=>$row->par_lname,
			'parFname'=>$row->par_fname,
			'parMname'=>$row->par_mname,
			'parBday'=>$row->par_bdate,
			'parOccu'=>$row->par_occu,
			'parOther'=>$row->par_other,
			'parNoChild'=>$row->par_owomen,
			'parChe'=>$row->par_eche,
			'parHeat'=>$row->par_eheat,
			'parRad'=>$row->par_eradia,
			'parExpo'=>$row->par_dia,
			'parAst'=>$row->par_ast,
			'parSmo'=>$row->par_smo,
			'parDri'=>$row->par_dri,
			'parMum'=>$row->par_mum,
			'parVar'=>$row->par_var,
			'parED'=>$row->par_erec,
			'parVas'=>$row->par_vas,
			'parHor'=>$row->par_horm,
			'parSup'=>$row->par_supp,
			'parAnti'=>$row->par_anti
		);

		echo json_encode($result);

	}elseif (isset($_POST['pat-num'])) {
		$pat_num = $_POST['pat-num'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$bday = $_POST['bday'];
		$cstat = $_POST['cstat'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$fb = $_POST['fb'];
		$haddress = $_POST['haddress'];
		$occu = $_POST['occu'];
		$owaddress = $_POST['owaddress'];
		$assess = $_POST['assess'];
		$refby = $_POST['refby'];

	
		$sqlCheck = $handler->prepare("SELECT pat_email, pat_contact FROM patient WHERE pat_email= ? OR pat_contact= ?");
		$sqlCheck->execute(array($email,$contact));

		if ($sqlCheck->rowCount()) {
			echo 0;
		}else{
			$tz  = new DateTimeZone('Asia/Taipei');
			$age = DateTime::createFromFormat('m/d/Y', $bday , $tz)
		     ->diff(new DateTime('now', $tz))
			 ->y;
			 
			if ($age<1) {
		    	echo 2;
		    }else{

				//Patient information
				$sql = $handler->prepare("INSERT INTO
					patient(
					`pat_num`,
					`pat_lname`,
					`pat_fname`,
					`pat_mname`,
					`pat_bday`,
					`pat_cstat`,
					`pat_contact`,
					`pat_email`,
					`pat_fb`,
					`pat_homadd`,
					`pat_occu`,
					`pat_offwor`,
					`pat_asse`,
					`pat_refered`,
					`pat_indate`
					) 
					VALUES(
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					now())
					");

				$sql->execute(array(
					$pat_num,
					$lname,
					$fname,
					$mname,
					$bday,
					$cstat,
					$contact,
					$email,
					$fb,
					$haddress,
					$occu,
					$owaddress,
					$assess,
					$refby
				));

				//long term plan
				$sql = $handler->prepare("INSERT INTO lt_plan(
					`pat_num`,
					`ltp_p1`,
					`ltp_p2`,
					`ltp_p3`,
					`ltp_p4`,
					`ltp_p5`,
					`ltp_p6`,
					`ltp_p7`,
					`ltp_p8`,
					`ltp_p9`,
					`ltp_indate`
					) 
					VALUES(
						:pat_num,
						:ltp1,
						:ltp2,
						:ltp3,
						:ltp4,
						:ltp5,
						:ltp6,
						:ltp7,
						:ltp8,
						:ltp9,
						now()
					)");

				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num']:null,
					'ltp1' => isset($_POST['ltp1']) ? $_POST['ltp1']:null,
					'ltp2' => isset($_POST['ltp2']) ? $_POST['ltp2']:null,
					'ltp3' => isset($_POST['ltp3']) ? $_POST['ltp3']:null,
					'ltp4' => isset($_POST['ltp4']) ? $_POST['ltp4']:null,
					'ltp5' => isset($_POST['ltp5']) ? $_POST['ltp5']:null,
					'ltp6' => isset($_POST['ltp6']) ? $_POST['ltp6']:null,
					'ltp7' => isset($_POST['ltp7']) ? $_POST['ltp7']:null,
					'ltp8' => isset($_POST['ltp8']) ? $_POST['ltp8']:null,
					'ltp9' => isset($_POST['ltp9']) ? $_POST['ltp9']:null
				));
				
				//first visit
				$sql = $handler->prepare("INSERT INTO 
				visit(
					`pat_num`,
					`vis_date`,
					`vis_patBp`,
					`vis_patHt`,
					`vis_patWt`,
					`vis_patBmi`,
					`vis_parBp`,
					`vis_parHt`,
					`vis_parWt`,
					`vis_parBmi`
				) 
				VALUES(
					:pat_num,
					:vis_date,
					:vis_patBp,
					:vis_patHt,
					:vis_patWt,
					:vis_patBmi,
					:vis_parBp,
					:vis_parHt,
					:vis_parWt,
					:vis_parBmi
				)");

				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num']:null,
					'vis_date' => isset($_POST['fvdate']) ? $_POST['fvdate']:null,
					'vis_patBp' => isset($_POST['patBp']) ? $_POST['patBp']:null,
					'vis_patHt' => isset($_POST['patHt']) ? $_POST['patHt']:null,
					'vis_patWt' => isset($_POST['patWt']) ? $_POST['patWt']:null,
					'vis_patBmi' => isset($_POST['patBmi']) ? $_POST['patBmi']:null,
					'vis_parBp' => isset($_POST['parBp']) ? $_POST['parBp']:null,
					'vis_parHt' => isset($_POST['parHt']) ? $_POST['parHt']:null,
					'vis_parWt' => isset($_POST['parWt']) ? $_POST['parWt']:null,
					'vis_parBmi' => isset($_POST['parBmi']) ? $_POST['parBmi']:null
				));


				//complaint
				$sql = $handler->prepare("INSERT INTO complaint(
					`pat_num`,
					`com_g`,
					`com_a`,
					`com_p`,
					`com_l`,
					`com_lmp`,
					`com_Lh`,
					`com_Ln`,
					`com_Ll`,
					`com_pmp`,
					`com_Ph`,
					`com_Pn`,
					`com_Pl`
				) 
				VALUES(
					:pat_num,
					:g,
					:a,
					:p,
					:l,
					:lmp,
					:lmph,
					:lmpn,
					:lmpl,
					:pmp,
					:pmph,
					:pmpn,
					:pmpl
				)");

				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num']:null,
					'g' => isset($_POST['comGAPL']) ? $_POST['comGAPL']:null,
					'a' => isset($_POST['coma']) ? $_POST['coma']:null,
					'p' => isset($_POST['comp']) ? $_POST['comp']:null,
					'l' => isset($_POST['coml']) ? $_POST['coml']:null,
					'lmp' => isset($_POST['lmp']) ? $_POST['lmp']:null,
					'lmph' => isset($_POST['lmph']) ? $_POST['lmph']:null,
					'lmpn' => isset($_POST['lmpn']) ? $_POST['lmpn']:null,
					'lmpl' => isset($_POST['lmpl']) ? $_POST['lmpl']:null,
					'pmp' => isset($_POST['pmp']) ? $_POST['pmp']:null,
					'pmph' => isset($_POST['pmph']) ? $_POST['pmph']:null,
					'pmpn' => isset($_POST['pmpn']) ? $_POST['pmpn']:null,
					'pmpl' => isset($_POST['pmpl']) ? $_POST['pmpl']:null
				));

				//charge
				$sql = $handler->prepare("INSERT INTO charge(
					`pat_num`,
					`ch_ip`,
					`ch_doc`,
					`ch_irre`,
					`ch_dys`,
					`ch_dis`,
					`ch_dia`,
					`ch_ast`,
					`ch_smo`,
					`ch_dri`,
					`ch_cont`,
					`ch_hpv`,
					`ch_pap`
					) 
					VALUES(
						:pat_num,
						:ip,
						:doc,
						:irreg,
						:dysmen,
						:discha,
						:diabe,
						:asth,
						:smok,
						:drink,
						:contra,
						:hpvv,
						:lps
					)");
				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num']:null,
					'ip' => isset($_POST['ip7']) ? $_POST['ip7']:null,
					'doc' => isset($_POST['doc']) ? $_POST['doc']:null,
					'irreg' => isset($_POST['irreg']) ? $_POST['irreg']:null,
					'dysmen' => isset($_POST['dysmen']) ? $_POST['dysmen']:null,
					'discha' => isset($_POST['discha']) ? $_POST['discha']:null,
					'diabe' => isset($_POST['diabe']) ? $_POST['diabe']:null,
					'asth' => isset($_POST['asth']) ? $_POST['asth']:null,
					'smok' => isset($_POST['smok']) ? $_POST['smok']:null,
					'drink' => isset($_POST['drink']) ? $_POST['drink']:null,
					'contra' => isset($_POST['contra']) ? $_POST['contra']:null,
					'hpvv' => isset($_POST['hpvv']) ? $_POST['hpvv']:null,
					'lps' => isset($_POST['lps']) ? $_POST['lps']:null
				));

				//gyne
				$sql = $handler->prepare("INSERT INTO gyne(
					`pat_num`,
					`gy_date`,
					`gy_doctor`,
					`gy_diag`,
					`gy_tre`,
					`gy_mar`,
					`gy_coh`,
					`gy_try`,
					`gy_coi`
					) VALUES(
						:pat_num,
						:gcdate,
						:doctor,
						:diag,
						:treat,
						:yrsMar,
						:yrsCoh,
						:yrsTry,
						:coiFre
					)");
				
				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num']:null,
					'gcdate' => isset($_POST['gcdate']) ? $_POST['gcdate']:null,
					'doctor' => isset($_POST['doctor']) ? $_POST['doctor']:null,
					'diag' => isset($_POST['diag']) ? $_POST['diag']:null,
					'treat' => isset($_POST['treat']) ? $_POST['treat']:null,
					'yrsMar' => isset($_POST['yrsMar']) ? $_POST['yrsMar']:null,
					'yrsCoh' => isset($_POST['yrsCoh']) ? $_POST['yrsCoh']:null,
					'yrsTry' => isset($_POST['yrsTry']) ? $_POST['yrsTry']:null,
					'coiFre' => isset($_POST['coiFre']) ? $_POST['coiFre']:null
				));

				//partners
				$sql = $handler->prepare("INSERT INTO partners(
					`pat_num`,
					`par_lname`,
					`par_fname`,
					`par_mname`,
					`par_bdate`,
					`par_occu`,
					`par_other`,
					`par_owomen`,
					`par_eche`,
					`par_eradia`,
					`par_eheat`,
					`par_dia`,
					`par_ast`,
					`par_smo`,
					`par_dri`,
					`par_mum`,
					`par_var`,
					`par_erec`,
					`par_vas`,
					`par_horm`,
					`par_supp`,
					`par_anti`
					) 
					VALUES(
						:pat_num,
						:parLname,
						:parFname,
						:parMname,
						:parBday,
						:parOccu,
						:parOther,
						:parNoChild,
						:parChe,
						:parHeat,
						:parRad,
						:parExpo,
						:parAst,
						:parSmo,
						:parDri,
						:parMum,
						:parVar,
						:parED,
						:parVas,
						:parHor,
						:parSup,
						:parAnti
					)");

				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num']:null,
					'parLname' => isset($_POST['parLname']) ? $_POST['parLname']:null,
					'parFname' => isset($_POST['parFname']) ? $_POST['parFname']:null,
					'parMname' => isset($_POST['parMname']) ? $_POST['parMname']:null,
					'parBday' => isset($_POST['parBday']) ? $_POST['parBday']:null,
					'parOccu' => isset($_POST['parOccu']) ? $_POST['parOccu']:null,
					'parOther' => isset($_POST['parOther']) ? $_POST['parOther']:null,
					'parNoChild' => isset($_POST['parNoChild']) ? $_POST['parNoChild']:null,
					'parChe' => isset($_POST['parChe']) ? $_POST['parChe']:null,
					'parHeat' => isset($_POST['parHeat']) ? $_POST['parHeat']:null,
					'parRad' => isset($_POST['parRad']) ? $_POST['parRad']:null,
					'parExpo' => isset($_POST['parExpo']) ? $_POST['parExpo']:null,
					'parAst' => isset($_POST['parAst']) ? $_POST['parAst']:null,
					'parSmo' => isset($_POST['parSmo']) ? $_POST['parSmo']:null,
					'parDri' => isset($_POST['parDri']) ? $_POST['parDri']:null,
					'parMum' => isset($_POST['parMum']) ? $_POST['parMum']:null,
					'parVar' => isset($_POST['parVar']) ? $_POST['parVar']:null,
					'parED' => isset($_POST['parED']) ? $_POST['parED']:null,
					'parVas' => isset($_POST['parVas']) ? $_POST['parVas']:null,
					'parHor' => isset($_POST['parHor']) ? $_POST['parHor']:null,
					'parSup' => isset($_POST['parSup']) ? $_POST['parSup']:null,
					'parAnti' => isset($_POST['parAnti']) ? $_POST['parAnti']:null
				));

			
			//ultra sound report
			$patnum = $_POST['pat-num'];
			$sql = $handler->prepare("INSERT INTO ultrasound(
				`pat_num`,
				`usr_pus`,
				`usr_uterus`,
				`usr_size_1`,
				`usr_size_2`,
				`usr_size_3`,
				`usr_contour`,
				`usr_echopattern`,
				`usr_echorem`,
				`usr_endometrium`,
				`usr_endometrium_sel`,
				`usr_endometrium_rem`,
				`usr_cer1`,
				`usr_cer2`,
				`usr_cer_urm`,
				`usr_ro1`,
				`usr_ro2`,
				`usr_ro3`,
				`usr_ro_rem`,
				`usr_lo1`,
				`usr_lo2`,
				`usr_lo3`,
				`usr_lo_rem`,
				`usr_cdsf`,
				`usr_opm`,
				`usr_impre`,
				`usr_indate`
				) VALUES(
						:pat_num, 
						:pus,
						:uterus,
						:size1,
						:size2,
						:size3,
						:contour,
						:echopattern,
						:echorem,
						:endometrium,
						:endometrium_sel,
						:endorem,
						:cer1,
						:cer2,
						:urm,
						:ro1,
						:ro2,
						:ro3,
						:rigrem,
						:lo1,
						:lo2,
						:lo3,
						:lefrem,
						:cdsf,
						:opm,
						:impre,
						:urdate
				)

		");



		$sql->execute(array(
				'pat_num' => $patnum,
				'pus'=> isset($_POST['pus']) ? $_POST['pus'] : null,
				'uterus'=> isset($_POST['uterus']) ? $_POST['uterus'] : null,
				'size1'=> isset($_POST['size1']) ? $_POST['size1'] : null,
				'size2'=> isset($_POST['size2']) ? $_POST['size2'] : null,
				'size3'=> isset($_POST['size3']) ? $_POST['size3'] : null,
				'contour'=> isset($_POST['contour']) ? $_POST['contour'] : null,
				'echopattern'=> isset($_POST['echopattern']) ? $_POST['echopattern'] : null,
				'echorem'=> isset($_POST['echorem']) ? $_POST['echorem'] : null,
				'endometrium'=> isset($_POST['endometrium']) ? $_POST['endometrium'] : null,
				'endometrium_sel'=> isset($_POST['endometrium_sel']) ? $_POST['endometrium_sel'] : null,
				'endorem'=> isset($_POST['endorem']) ? $_POST['endorem'] : null,
				'cer1'=> isset($_POST['cer1']) ? $_POST['cer1'] : null,
				'cer2'=> isset($_POST['cer2']) ? $_POST['cer2'] : null,
				'urm'=> isset($_POST['urm']) ? $_POST['urm'] : null,
				'ro1'=> isset($_POST['ro1']) ? $_POST['ro1'] : null,
				'ro2'=> isset($_POST['ro2']) ? $_POST['ro2'] : null,
				'ro3'=> isset($_POST['ro3']) ? $_POST['ro3'] : null,
				'rigrem'=> isset($_POST['rigrem']) ? $_POST['rigrem'] : null,
				'lo1'=> isset($_POST['lo1']) ? $_POST['lo1'] : null,
				'lo2'=> isset($_POST['lo2']) ? $_POST['lo2'] : null,
				'lo3'=> isset($_POST['lo3']) ? $_POST['lo3'] : null,
				'lefrem'=> isset($_POST['lefrem']) ? $_POST['lefrem'] : null,
				'cdsf'=> isset($_POST['cdsf']) ? $_POST['cdsf'] : null,
				'opm'=> isset($_POST['opm']) ? $_POST['opm'] : null,
				'impre'=> isset($_POST['impre']) ? $_POST['impre'] : null,
				'urdate'=> isset($_POST['urdate']) ? $_POST['urdate'] : null
		));

		//Trans-Abdominal Report
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
			'tar_indate'=> isset($_POST['tardate']) ? $_POST['tardate'] : null,
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


		//embyology report
		$sql = $handler->prepare("INSERT INTO 
        embryology(
            `pat_num`,
            `emb_esdate`,
            `emb_cycle`,
            `emb_opudate`,
            `emb_tnec`,
            `emb_rt`,
            `emb_lt`,
            `emb_tnef1`,
            `emb_tnef2`,
            `emb_tnez1`,
            `emb_tnez2`,
            `emb_pi`,
            `emb_mi`,
            `emb_tnme`,
            `emb_tnae1`,
            `emb_tnae2`,
            `emb_tnpe`,
            `emb_tneafi1`,
            `emb_tneafi2`,
            `emb_tneafi3`,
            `emb_tnefer1`,
            `emb_tnefer2`,
            `emb_tnefer3`,
            `emb_tnecle`,
            `emb_tnetran`,
            `emb_getran`,
            `emb_tned`,
            `emb_tnefro`,
            `emb_density`,
            `emb_motility`,
            `emb_morphology`,
            `emb_embryologist`
        ) 
        VALUES(
            :pat_num,
            :esdate,
            :cycle,
            :opudate,
            :tnec,
            :rt,
            :lt,
            :tnef1,
            :tnef2,
            :tnez1,
            :tnez2,
            :emb_pi,
            :mi,
            :tnme,
            :tnae1,
            :tnae2,
            :tnpe,
            :tneafi1,
            :tneafi2,
            :tneafi3,
            :tnefer1,
            :tnefer2,
            :tnefer3,
            :tnecle,
            :tnetran,
            :getran,
            :tned,
            :tnefro,
            :density,
            :motility,
            :morphology,
            :embryologist
        )");

        $sql->execute(array(
            'pat_num' => $patnum,
            'esdate' => isset($_POST['esdate']) ? $_POST['esdate'] : null,
            'cycle' => isset($_POST['cycle']) ? $_POST['cycle'] : null,
            'opudate' => isset($_POST['opudate']) ? $_POST['opudate'] : null,
            'tnec' => isset($_POST['tnec']) ? $_POST['tnec'] : null,
            'rt' => isset($_POST['rt']) ? $_POST['rt'] : null,
            'lt' => isset($_POST['lt']) ? $_POST['lt'] : null,
            'tnef1' => isset($_POST['tnef1']) ? $_POST['tnef1'] : null,
            'tnef2' => isset($_POST['tnef2']) ? $_POST['tnef2'] : null,
            'tnez1' => isset($_POST['tnez1']) ? $_POST['tnez1'] : null,
            'tnez2' => isset($_POST['tnez2']) ? $_POST['tnez2'] : null,
            'emb_pi' => isset($_POST['pi']) ? $_POST['pi'] : null,
            'mi' => isset($_POST['mi']) ? $_POST['mi'] : null,
            'tnme' => isset($_POST['tnme']) ? $_POST['tnme'] : null,
            'tnae1' => isset($_POST['tnae1']) ? $_POST['tnae1'] : null,
            'tnae2' => isset($_POST['tnae2']) ? $_POST['tnae2'] : null,
            'tnpe' => isset($_POST['tnpe']) ? $_POST['tnpe'] : null,
            'tneafi1' => isset($_POST['tneafi1']) ? $_POST['tneafi1'] : null,
            'tneafi2' => isset($_POST['tneafi2']) ? $_POST['tneafi2'] : null,
            'tneafi3' => isset($_POST['tneafi3']) ? $_POST['tneafi3'] : null,
            'tnefer1' => isset($_POST['tnefer1']) ? $_POST['tnefer1'] : null,
            'tnefer2' => isset($_POST['tnefer2']) ? $_POST['tnefer2'] : null,
            'tnefer3' => isset($_POST['tnefer3']) ? $_POST['tnefer3'] : null,
            'tnecle' => isset($_POST['tnecle']) ? $_POST['tnecle'] : null,
            'tnetran' => isset($_POST['tnetran']) ? $_POST['tnetran'] : null,
            'getran' => isset($_POST['getran']) ? $_POST['getran'] : null,
            'tned' => isset($_POST['tned']) ? $_POST['tned'] : null,
            'tnefro' => isset($_POST['tnefro']) ? $_POST['tnefro'] : null,
            'density' => isset($_POST['density']) ? $_POST['density'] : null,
            'motility' => isset($_POST['motility']) ? $_POST['motility'] : null,
            'morphology' => isset($_POST['morphology']) ? $_POST['morphology'] : null,
            'embryologist' => isset($_POST['embryologist']) ? $_POST['embryologist'] : null
        ));

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
			}
		}
	}elseif (isset($_POST['pat-num-edit'])) {
		$pat_num = $_POST['pat-num-edit'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$bday = $_POST['bday'];
		$cstat = $_POST['cstat'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$fb = $_POST['fb'];
		$haddress = $_POST['haddress'];
		$occu = $_POST['occu'];
		$owaddress = $_POST['owaddress'];
		$assess = $_POST['assess'];
		$refby = $_POST['refby'];

		$ltp1 = isset($_POST['ltp1']) ? $_POST['ltp1']:null;
		$ltp2 = isset($_POST['ltp2']) ? $_POST['ltp2']:null;
		$ltp3 = isset($_POST['ltp3']) ? $_POST['ltp3']:null;
		$ltp4 = isset($_POST['ltp4']) ? $_POST['ltp4']:null;
		$ltp5 = isset($_POST['ltp5']) ? $_POST['ltp5']:null;
		$ltp6 = isset($_POST['ltp6']) ? $_POST['ltp6']:null;
		$ltp7 = isset($_POST['ltp7']) ? $_POST['ltp7']:null;
		$ltp8 = isset($_POST['ltp8']) ? $_POST['ltp8']:null;
		$ltp9 = isset($_POST['ltp9']) ? $_POST['ltp9']:null;

		$vis_date = isset($_POST['fvdate']) ? $_POST['fvdate']:null;
		$vis_patBp = isset($_POST['patBp']) ? $_POST['patBp']:null;
		$vis_patHt = isset($_POST['patHt']) ? $_POST['patHt']:null;
		$vis_patWt = isset($_POST['patWt']) ? $_POST['patWt']:null;
		$vis_patBmi = isset($_POST['patBmi']) ? $_POST['patBmi']:null;
		$vis_parBp = isset($_POST['parBp']) ? $_POST['parBp']:null;
		$vis_parHt = isset($_POST['parHt']) ? $_POST['parHt']:null;
		$vis_parWt = isset($_POST['parWt']) ? $_POST['parWt']:null;
		$vis_parBmi = isset($_POST['parBmi']) ? $_POST['parBmi']:null;

		$g= isset($_POST['comGAPL']) ? $_POST['comGAPL']:null;
		$a= isset($_POST['coma']) ? $_POST['coma']:null;
		$p= isset($_POST['comp']) ? $_POST['comp']:null;
		$l= isset($_POST['coml']) ? $_POST['coml']:null;
		$lmp= isset($_POST['lmp']) ? $_POST['lmp']:null;
		$lmph= isset($_POST['lmph']) ? $_POST['lmph']:null;
		$lmpn= isset($_POST['lmpn']) ? $_POST['lmpn']:null;
		$lmpl= isset($_POST['lmpl']) ? $_POST['lmpl']:null;
		$pmp= isset($_POST['pmp']) ? $_POST['pmp']:null;
		$pmph= isset($_POST['pmph']) ? $_POST['pmph']:null;
		$pmpn= isset($_POST['pmpn']) ? $_POST['pmpn']:null;
		$pmpl= isset($_POST['pmpl']) ? $_POST['pmpl']:null;

		$ip= isset($_POST['ip7']) ? $_POST['ip7']:null;
		$doc= isset($_POST['doc']) ? $_POST['doc']:null;
		$irreg= isset($_POST['irreg']) ? $_POST['irreg']:null;
		$dysmen= isset($_POST['dysmen']) ? $_POST['dysmen']:null;
		$discha= isset($_POST['discha']) ? $_POST['discha']:null;
		$diabe= isset($_POST['diabe']) ? $_POST['diabe']:null;
		$asth= isset($_POST['asth']) ? $_POST['asth']:null;
		$smok= isset($_POST['smok']) ? $_POST['smok']:null;
		$drink= isset($_POST['drink']) ? $_POST['drink']:null;
		$contra= isset($_POST['contra']) ? $_POST['contra']:null;
		$hpvv= isset($_POST['hpvv']) ? $_POST['hpvv']:null;
		$lps= isset($_POST['lps']) ? $_POST['lps']:null;

		$gcdate= isset($_POST['gcdate']) ? $_POST['gcdate']:null;
		$doctor= isset($_POST['doctor']) ? $_POST['doctor']:null;
		$diag= isset($_POST['diag']) ? $_POST['diag']:null;
		$treat= isset($_POST['treat']) ? $_POST['treat']:null;
		$yrsMar= isset($_POST['yrsMar']) ? $_POST['yrsMar']:null;
		$yrsCoh= isset($_POST['yrsCoh']) ? $_POST['yrsCoh']:null;
		$yrsTry= isset($_POST['yrsTry']) ? $_POST['yrsTry']:null;
		$coiFre= isset($_POST['coiFre']) ? $_POST['coiFre']:null;

		$parLname= isset($_POST['parLname']) ? $_POST['parLname']:null;
		$parFname= isset($_POST['parFname']) ? $_POST['parFname']:null;
		$parMname= isset($_POST['parMname']) ? $_POST['parMname']:null;
		$parBday= isset($_POST['parBday']) ? $_POST['parBday']:null;
		$parOccu= isset($_POST['parOccu']) ? $_POST['parOccu']:null;
		$parOther= isset($_POST['parOther']) ? $_POST['parOther']:null;
		$parNoChild= isset($_POST['parNoChild']) ? $_POST['parNoChild']:null;
		$parChe= isset($_POST['parChe']) ? $_POST['parChe']:null;
		$parHeat= isset($_POST['parHeat']) ? $_POST['parHeat']:null;
		$parRad= isset($_POST['parRad']) ? $_POST['parRad']:null;
		$parExpo= isset($_POST['parExpo']) ? $_POST['parExpo']:null;
		$parAst= isset($_POST['parAst']) ? $_POST['parAst']:null;
		$parSmo= isset($_POST['parSmo']) ? $_POST['parSmo']:null;
		$parDri= isset($_POST['parDri']) ? $_POST['parDri']:null;
		$parMum= isset($_POST['parMum']) ? $_POST['parMum']:null;
		$parVar= isset($_POST['parVar']) ? $_POST['parVar']:null;
		$parED= isset($_POST['parED']) ? $_POST['parED']:null;
		$parVas= isset($_POST['parVas']) ? $_POST['parVas']:null;
		$parHor= isset($_POST['parHor']) ? $_POST['parHor']:null;
		$parSup= isset($_POST['parSup']) ? $_POST['parSup']:null;
		$parAnti= isset($_POST['parAnti']) ? $_POST['parAnti']:null;

		$sqlCheck = $handler->prepare("SELECT pat_email, pat_contact FROM patient WHERE (pat_email= ? OR pat_contact= ?) AND pat_num!=?");
		$sqlCheck->execute(array($email,$contact,$pat_num));

		if ($sqlCheck->rowCount()) {
			echo 1;
		}else{
			
			$sql = $handler->prepare("UPDATE patient SET 
				pat_lname=?,
				pat_fname=?,
				pat_mname=?,
				pat_bday=?,
				pat_cstat=?,
				pat_contact=?,
				pat_email=?,
				pat_fb=?,
				pat_homadd=?,
				pat_occu=?,
				pat_offwor=?,
				pat_asse=?,
				pat_refered=?
				WHERE pat_num=?
			");

			$sql->execute(array(
				$lname,
				$fname,
				$mname,
				$bday,
				$cstat,
				$contact,
				$email,
				$fb,
				$haddress,
				$occu,
				$owaddress,
				$assess,
				$refby,
				$pat_num
			));

			//long term plan
			$sql = $handler->prepare("UPDATE lt_plan SET
				ltp_p1=?,
				ltp_p2=?,
				ltp_p3=?,
				ltp_p4=?,
				ltp_p5=?,
				ltp_p6=?,
				ltp_p7=?,
				ltp_p8=?,
				ltp_p9=?
				WHERE pat_num = '$pat_num'
			");

			$sql->execute(array(
					$ltp1,
					$ltp2,
					$ltp3,
					$ltp4,
					$ltp5,
					$ltp6,
					$ltp7,
					$ltp8,
					$ltp9	
			));

			//first visit
			$sql = $handler->prepare("UPDATE visit SET
				vis_date=?,
				vis_patBp=?,
				vis_patHt=?,
				vis_patWt=?,
				vis_patBmi=?,
				vis_parBp=?,
				vis_parHt=?,
				vis_parWt=?,
				vis_parBmi=?
				WHERE pat_num = '$pat_num'
			");

				$sql->execute(array(
					$vis_date,
					$vis_patBp,
					$vis_patHt,
					$vis_patWt,
					$vis_patBmi,
					$vis_parBp,
					$vis_parHt,
					$vis_parWt,
					$vis_parBmi	
				));
				
			
			//complaint
			$sql = $handler->prepare("UPDATE complaint SET
				com_g=?,
				com_a=?,
				com_p=?,
				com_l=?,
				com_lmp=?,
				com_Lh=?,
				com_Ln=?,
				com_Ll=?,
				com_pmp=?,
				com_Ph=?,
				com_Pn=?,
				com_Pl=?
				WHERE pat_num = '$pat_num'
			");

			$sql->execute(array(
				$g,
				$a,
				$p,
				$l,
				$lmp,
				$lmph,
				$lmpn,
				$lmpl,
				$pmp,
				$pmph,
				$pmpn,
				$pmpl
			));

			//charge
			$sql = $handler->prepare("UPDATE charge SET
				ch_ip=?,
				ch_doc=?,
				ch_irre=?,
				ch_dys=?,
				ch_dis=?,
				ch_dia=?,
				ch_ast=?,
				ch_smo=?,
				ch_dri=?,
				ch_cont=?,
				ch_hpv=?,
				ch_pap=?
				WHERE pat_num = '$pat_num'
			");

			$sql->execute(array(
				$ip,
				$doc,
				$irreg,
				$dysmen,
				$discha,
				$diabe,
				$asth,
				$smok,
				$drink,
				$contra,
				$hpvv,
				$lps
			));
			
			//gyne
			$sql = $handler->prepare("UPDATE gyne SET
				gy_date=?,
				gy_doctor=?,
				gy_diag=?,
				gy_tre=?,
				gy_mar=?,
				gy_coh=?,
				gy_try=?,
				gy_coi=?
				WHERE pat_num = '$pat_num'
			");

			$sql->execute(array(
				$gcdate,
				$doctor,
				$diag,
				$treat,
				$yrsMar,
				$yrsCoh,
				$yrsTry,
				$coiFre
			));

			//partners
			$sql = $handler->prepare("UPDATE partners SET 
				par_lname=?,
				par_fname=?,
				par_mname=?,
				par_bdate=?,
				par_occu=?,
				par_other=?,
				par_owomen=?,
				par_eche=?,
				par_eradia=?,
				par_eheat=?,
				par_dia=?,
				par_ast=?,
				par_smo=?,
				par_dri=?,
				par_mum=?,
				par_var=?,
				par_erec=?,
				par_vas=?,
				par_horm=?,
				par_supp=?,
				par_anti=?
				WHERE pat_num = '$pat_num'
			");

			$sql->execute(array(
				$parLname,
				$parFname,
				$parMname,
				$parBday,
				$parOccu,
				$parOther,
				$parNoChild,
				$parChe,
				$parRad,
				$parHeat,
				$parExpo,
				$parAst,
				$parSmo,
				$parDri,
				$parMum,
				$parVar,
				$parED,
				$parVas,
				$parHor,
				$parSup,
				$parAnti
			));

				echo 0;
		}

	}else if(isset($_POST['info']) && isset($_POST['patient'])){
		$tz  = new DateTimeZone('Asia/Taipei');

		$patient = $_POST['patient'];

		$sql = $handler->prepare("SELECT 
		patient.pat_num, 
		patient.pat_fname, 
		patient.pat_mname, 
		patient.pat_lname,
		patient.pat_bday, 
		patient.pat_cstat,
		patient.pat_contact,
		patient.pat_email,
		patient.pat_fb,
		patient.pat_homadd,
		patient.pat_occu,
		patient.pat_offwor,
		patient.pat_asse,
		patient.pat_refered,
		patient.pat_indate,
		visit.vis_patBp,
		visit.vis_patHt,
		visit.vis_patWt,
		visit.vis_patBmi,
		visit.vis_parBp,
		visit.vis_parHt,
		visit.vis_parWt,
		visit.vis_parBmi,
		partners.par_lname,
		partners.par_fname,
		partners.par_mname,
		partners.par_bdate,
		partners.par_occu,
		partners.par_other,
		partners.par_owomen,
		partners.par_eche,
		partners.par_eradia,
		partners.par_eheat,
		partners.par_dia,
		partners.par_ast,
		partners.par_smo,
		partners.par_dri,
		partners.par_mum,
		partners.par_var,
		partners.par_erec,
		partners.par_vas,
		partners.par_horm,
		partners.par_supp,
		partners.par_anti
		FROM patient
		INNER JOIN visit ON patient.pat_num = visit.pat_num
		INNER JOIN partners ON patient.pat_num = partners.pat_num
		WHERE patient.pat_num = ? ORDER BY patient.pat_indate DESC
		");

		$sql->execute(array($patient));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			if ($row->par_mname!="") {
				$parMname = ucfirst($row->par_mname).".";
			}else{
				$parMname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$parName = ucfirst($row->par_fname)." ".$parMname." ".ucfirst($row->par_lname);
			$dateCre = date_create($row->pat_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i:s a');
			$age = DateTime::createFromFormat('m/d/Y', $row->pat_bday , $tz)
		     ->diff(new DateTime('now', $tz))
			 ->y;
			 
			if($row->par_bdate!=""){
				$parAge = DateTime::createFromFormat('m/d/Y', $row->par_bdate , $tz)
		     	->diff(new DateTime('now', $tz))
			 	->y;

			 	$parBCre = date_create($row->par_bdate);
		    	$parBday = date_format($parBCre, 'M. d, Y');
			}else{
				$parAge = "N/A";
				$parBday = "N/A";
			}
			 
		    $bdayCre = date_create($row->pat_bday);
			$bday = date_format($bdayCre, 'M. d, Y');
			
			

		     $result[] = array(
				'pat_num' => $row->pat_num, 
				'fullname' => $fullname,
				'bday' => $bday,
				'age' => $age,
				'cstat' => $row->pat_cstat,
				'contact' => $row->pat_contact,
				'email' => $row->pat_email,
				'fb' => $row->pat_fb,
				'homadd' => $row->pat_homadd,
				'occu' => $row->pat_occu,
				'offwor' => $row->pat_offwor,
				'asse' => $row->pat_asse,
				'refered' => $row->pat_refered,
				'patBp' => $row->vis_patBp,
				'patHt' => $row->vis_patHt,
				'patWt' => $row->vis_patWt,
				'patBmi' => $row->vis_patBmi,
				'indate' => $date,
				'parFullname'=>$parName,
				'parBday'=>$parBday,
				'parAge'=>$parAge,
				'parOccu'=>$row->par_occu,
				'parOther'=>$row->par_other,
				'parNoChild'=>$row->par_owomen,
				'parChe'=>$row->par_eche,
				'parHeat'=>$row->par_eheat,
				'parRad'=>$row->par_eradia,
				'parExpo'=>$row->par_dia,
				'parAst'=>$row->par_ast,
				'parSmo'=>$row->par_smo,
				'parDri'=>$row->par_dri,
				'parMum'=>$row->par_mum,
				'parVar'=>$row->par_var,
				'parED'=>$row->par_erec,
				'parVas'=>$row->par_vas,
				'parHor'=>$row->par_horm,
				'parSup'=>$row->par_supp,
				'parAnti'=>$row->par_anti,
				'parBp' =>$row->vis_parBp,
				'parHt' =>$row->vis_parHt,
				'parWt' =>$row->vis_parWt,
				'parBmi' =>$row->vis_parBmi
			);
		    
		}

		echo json_encode($result);
	}else if(isset($_POST['partners']) && isset($_POST['partner'])){
		$pat_num = $_POST['partner'];

		$sql = $handler->prepare("SELECT * FROM partners WHERE pat_num=:patnum");
		$sql->execute(array('patnum'=>$pat_num));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			$eversmoke = $row->par_eversmoke;
			$cursmoke = $row->par_cursmoke;
			$everdra = $row->par_everdra;
			$curdri = $row->par_curdri;
			$morethan = $row->par_morethan;

			if($eversmoke=="on"){
				$eversmoke = "Yes";
			}else{
				$eversmoke = "No";
			}

			if($cursmoke=="on"){
				$cursmoke = "Yes";
			}else{
				$cursmoke = "No";
			}

			if($everdra=="on"){
				$everdra = "Yes";
			}else{
				$everdra = "No";
			}
			
			if($curdri=="on"){
				$curdri = "Yes";
			}else{
				$curdri = "No";
			}

			if($morethan=="on"){
				$morethan = "Yes";
			}else{
				$morethan = "No";
			}


			$result[] = array(
				'fullname' => $row->par_fullname,
				'parbday' => $row->par_parbday,
				'parwei' => $row->par_parwei,  
				'parhei' => $row->par_parhei,
				'noc' => $row->par_noc,
				'paroccu' => $row->par_paroccu,
				'eversmoke' => $eversmoke,
				'cursmoke' => $cursmoke,
				'stiperday' => $row->par_stiperday,
				'agesta' => $row->par_agesta,
				'stiperdaybef' => $row->par_stiperdaybef,
				'agestop' => $row->par_agestop,
				'everdra' => $everdra,
				'curdri' => $curdri,
				'morethan' => $morethan,
				'numdrink' => $row->par_numdrink,
				'agestodri' => $row->par_agestodri,
				'drugs' => $row->par_drugs
			);
		}

		echo json_encode($result);
	}else if(isset($_POST['siemen']) && isset($_POST['siemen_info'])){
		$pat_num = $_POST['siemen_info'];

		$sql = $handler->prepare("SELECT * FROM siemen WHERE pat_num=:patnum");
		$sql->execute(array('patnum'=>$pat_num));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			$result[] = array(
				'color' => $row->sie_color,
				'volume' => $row->sie_volume,
				'ph' => $row->sie_ph,
				'viscosity' => $row->sie_viscosity,
				'liquetime' => $row->sie_liquetime, 
				'motility' => $row->sie_motility,
				'grading' => $row->sie_grading,
				'morphology' => $row->sie_morphology,
				'spercnt' => $row->sie_spercnt,
				'puscell' => $row->sie_puscell,
				'redcell' => $row->sie_redcell,
				'bacteria' => $row->sie_bacteria,
				'daysabs' => $row->sie_daysabs,
				'wss' => $row->sie_wss
			);
		}

		echo json_encode($result);
	}elseif(isset($_POST['del'])){
		$pat_num = $_POST['pat-num-del'];

		//delete from patient table
		$sql = $handler->prepare("DELETE FROM patient WHERE pat_num=?");
		$sql->execute(array($pat_num));

		$sql = $handler->prepare("DELETE FROM lt_plan WHERE pat_num=?");
		$sql->execute(array($pat_num));
		
		$sql = $handler->prepare("DELETE FROM visit WHERE pat_num=?");
		$sql->execute(array($pat_num));
		
		$sql = $handler->prepare("DELETE FROM complaint WHERE pat_num=?");
		$sql->execute(array($pat_num));
		
		$sql = $handler->prepare("DELETE FROM charge WHERE pat_num=?");
		$sql->execute(array($pat_num));

		$sql = $handler->prepare("DELETE FROM gyne WHERE pat_num=?");
		$sql->execute(array($pat_num));

		$sql = $handler->prepare("DELETE FROM partners WHERE pat_num=?");
		$sql->execute(array($pat_num));

	}else{
		$result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, patient.pat_indate, 
		patient.pat_bday, patient.pat_email, patient.pat_contact, patient.pat_occu, patient.pat_cstat, patient.pat_homadd
		FROM patient ORDER BY patient.pat_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->pat_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
				'pat_num' => $row->pat_num, 
				'fullname' => $fullname,
				'bday' => $row->pat_bday,
				'email' => $row->pat_email,
				'contact' => $row->pat_contact,
				'add' => $row->pat_homadd,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
	}
?>