DROP TABLE IF EXISTS assessment;

CREATE TABLE `assessment` (
  `ass_num` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `ass_desc` text,
  `ass_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`ass_num`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO assessment VALUES("13","PAT0005","hello","2018-06-25 13:53:51");
INSERT INTO assessment VALUES("14","PAT0007","Primary Infertility \n\nDiminished Ovarian Reserve secondary to age factor","2018-07-13 22:01:23");
INSERT INTO assessment VALUES("15","PAT0009","Primary Infertility","2018-07-13 23:33:44");



DROP TABLE IF EXISTS embryology;

CREATE TABLE `embryology` (
  `emb_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) DEFAULT NULL,
  `emb_esdate` varchar(45) DEFAULT NULL,
  `emb_cycle` varchar(45) DEFAULT NULL,
  `emb_opudate` varchar(45) DEFAULT NULL,
  `emb_tnec` varchar(45) DEFAULT NULL,
  `emb_rt` varchar(45) DEFAULT NULL,
  `emb_lt` varchar(45) DEFAULT NULL,
  `emb_tnef1` varchar(45) DEFAULT NULL,
  `emb_tnef2` varchar(45) DEFAULT NULL,
  `emb_tnez1` varchar(45) DEFAULT NULL,
  `emb_tnez2` varchar(45) DEFAULT NULL,
  `emb_pi` varchar(45) DEFAULT NULL,
  `emb_mi` varchar(45) DEFAULT NULL,
  `emb_tnme` varchar(45) DEFAULT NULL,
  `emb_tnae1` varchar(45) DEFAULT NULL,
  `emb_tnae2` varchar(45) DEFAULT NULL,
  `emb_tnpe` varchar(45) DEFAULT NULL,
  `emb_tneafi1` varchar(45) DEFAULT NULL,
  `emb_tneafi2` varchar(45) DEFAULT NULL,
  `emb_tneafi3` varchar(45) DEFAULT NULL,
  `emb_tnefer1` varchar(45) DEFAULT NULL,
  `emb_tnefer2` varchar(45) DEFAULT NULL,
  `emb_tnefer3` varchar(45) DEFAULT NULL,
  `emb_tnecle` varchar(45) DEFAULT NULL,
  `emb_tnetran` varchar(45) DEFAULT NULL,
  `emb_getran` varchar(45) DEFAULT NULL,
  `emb_tned` varchar(45) DEFAULT NULL,
  `emb_tnefro` varchar(45) DEFAULT NULL,
  `emb_density` varchar(45) DEFAULT NULL,
  `emb_motility` varchar(45) DEFAULT NULL,
  `emb_morphology` varchar(45) DEFAULT NULL,
  `emb_embryologist` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS history;

CREATE TABLE `history` (
  `his_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `his_b1` varchar(45) DEFAULT NULL,
  `his_b2` varchar(45) DEFAULT NULL,
  `his_b3` varchar(45) DEFAULT NULL,
  `his_b4` varchar(45) DEFAULT NULL,
  `his_b5` varchar(45) DEFAULT NULL,
  `his_b6` varchar(45) DEFAULT NULL,
  `his_b7` varchar(45) DEFAULT NULL,
  `his_b8` varchar(45) DEFAULT NULL,
  `his_b9` varchar(45) DEFAULT NULL,
  `his_c1` varchar(45) DEFAULT NULL,
  `his_c2` varchar(45) DEFAULT NULL,
  `his_c3` varchar(45) DEFAULT NULL,
  `his_c4` varchar(45) DEFAULT NULL,
  `his_c5` varchar(45) DEFAULT NULL,
  `his_c6` varchar(45) DEFAULT NULL,
  `his_c7` varchar(45) DEFAULT NULL,
  `his_c8` varchar(45) DEFAULT NULL,
  `his_c9` varchar(45) DEFAULT NULL,
  `his_d1` varchar(45) DEFAULT NULL,
  `his_e1` varchar(45) DEFAULT NULL,
  `his_e2` varchar(45) DEFAULT NULL,
  `his_e1_2` varchar(45) DEFAULT NULL,
  `his_f1` varchar(45) DEFAULT NULL,
  `his_f2` varchar(45) DEFAULT NULL,
  `his_f3` varchar(45) DEFAULT NULL,
  `his_f4` varchar(45) DEFAULT NULL,
  `his_f5` varchar(45) DEFAULT NULL,
  `his_f6` varchar(45) DEFAULT NULL,
  `his_f7` varchar(45) DEFAULT NULL,
  `his_f8` varchar(45) DEFAULT NULL,
  `his_f9` varchar(45) DEFAULT NULL,
  `his_f10` varchar(45) DEFAULT NULL,
  `his_f11` varchar(45) DEFAULT NULL,
  `his_f12` varchar(45) DEFAULT NULL,
  `his_f13` varchar(45) DEFAULT NULL,
  `his_f14` varchar(45) DEFAULT NULL,
  `his_f15` varchar(45) DEFAULT NULL,
  `his_f16` varchar(45) DEFAULT NULL,
  `his_f17` varchar(45) DEFAULT NULL,
  `his_f18` varchar(45) DEFAULT NULL,
  `his_f19` varchar(45) DEFAULT NULL,
  `his_f20` varchar(45) DEFAULT NULL,
  `his_f21` varchar(45) DEFAULT NULL,
  `his_f22` varchar(45) DEFAULT NULL,
  `his_f23` varchar(45) DEFAULT NULL,
  `his_f24` varchar(45) DEFAULT NULL,
  `his_g1` varchar(45) DEFAULT NULL,
  `his_g2` varchar(45) DEFAULT NULL,
  `his_g3` varchar(45) DEFAULT NULL,
  `his_g4` varchar(45) DEFAULT NULL,
  `his_g5` varchar(45) DEFAULT NULL,
  `his_g6` varchar(45) DEFAULT NULL,
  `his_g7` varchar(45) DEFAULT NULL,
  `his_h1` varchar(45) DEFAULT NULL,
  `his_h2` varchar(45) DEFAULT NULL,
  `his_h3` varchar(45) DEFAULT NULL,
  `his_h4` varchar(45) DEFAULT NULL,
  `his_h5` varchar(45) DEFAULT NULL,
  `his_h6` varchar(45) DEFAULT NULL,
  `his_h7` varchar(45) DEFAULT NULL,
  `his_h8` varchar(45) DEFAULT NULL,
  `his_h9` varchar(45) DEFAULT NULL,
  `his_h10` varchar(45) DEFAULT NULL,
  `his_i1` varchar(45) DEFAULT NULL,
  `his_i2` varchar(45) DEFAULT NULL,
  `his_i3` varchar(45) DEFAULT NULL,
  `his_i4` varchar(45) DEFAULT NULL,
  `his_i5` varchar(45) DEFAULT NULL,
  `his_i6` varchar(45) DEFAULT NULL,
  `his_i7` varchar(45) DEFAULT NULL,
  `his_i8` varchar(45) DEFAULT NULL,
  `his_i9` varchar(45) DEFAULT NULL,
  `his_i10` varchar(45) DEFAULT NULL,
  `his_j1` varchar(45) DEFAULT NULL,
  `his_j2` varchar(45) DEFAULT NULL,
  `his_j3` varchar(45) DEFAULT NULL,
  `his_j4` varchar(45) DEFAULT NULL,
  `his_j5` varchar(45) DEFAULT NULL,
  `his_j6` varchar(45) DEFAULT NULL,
  `his_j7` varchar(45) DEFAULT NULL,
  `his_k1` varchar(45) DEFAULT NULL,
  `his_k2` varchar(45) DEFAULT NULL,
  `his_k3` varchar(45) DEFAULT NULL,
  `his_k1_2` varchar(45) DEFAULT NULL,
  `his_k2_2` varchar(45) DEFAULT NULL,
  `his_k3_2` varchar(45) DEFAULT NULL,
  `his_k1_3` varchar(45) DEFAULT NULL,
  `his_k2_3` varchar(45) DEFAULT NULL,
  `his_k3_3` varchar(45) DEFAULT NULL,
  `his_l1` varchar(45) DEFAULT NULL,
  `his_l2` varchar(45) DEFAULT NULL,
  `his_l3` varchar(45) DEFAULT NULL,
  `his_l4` varchar(45) DEFAULT NULL,
  `his_l5` varchar(45) DEFAULT NULL,
  `his_l6` varchar(45) DEFAULT NULL,
  `his_l7` varchar(45) DEFAULT NULL,
  `his_l8` varchar(45) DEFAULT NULL,
  `his_l9` varchar(45) DEFAULT NULL,
  `his_l10` varchar(45) DEFAULT NULL,
  `his_l11` varchar(45) DEFAULT NULL,
  `his_m1` varchar(45) DEFAULT NULL,
  `his_m2` varchar(45) DEFAULT NULL,
  `his_m3` varchar(45) DEFAULT NULL,
  `his_m4` varchar(45) DEFAULT NULL,
  `his_n1` varchar(45) DEFAULT NULL,
  `his_n2` varchar(45) DEFAULT NULL,
  `his_n3` varchar(45) DEFAULT NULL,
  `his_n4` varchar(45) DEFAULT NULL,
  `his_n5` varchar(45) DEFAULT NULL,
  `his_n6` varchar(45) DEFAULT NULL,
  `his_n7` varchar(45) DEFAULT NULL,
  `his_n8` varchar(45) DEFAULT NULL,
  `his_n9` varchar(45) DEFAULT NULL,
  `his_o1` varchar(45) DEFAULT NULL,
  `his_o2` varchar(45) DEFAULT NULL,
  `his_o3` varchar(45) DEFAULT NULL,
  `his_o4` varchar(45) DEFAULT NULL,
  `his_o5` varchar(45) DEFAULT NULL,
  `his_o6` varchar(45) DEFAULT NULL,
  `his_o7` varchar(45) DEFAULT NULL,
  `his_o8` varchar(45) DEFAULT NULL,
  `his_o9` varchar(45) DEFAULT NULL,
  `his_o10` varchar(45) DEFAULT NULL,
  `his_o11` varchar(45) DEFAULT NULL,
  `his_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`his_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO history VALUES("38","PAT0007","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","on","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","2018-07-13 22:08:21");



DROP TABLE IF EXISTS partners;

CREATE TABLE `partners` (
  `pat_num` varchar(10) NOT NULL,
  `par_fullname` varchar(100) DEFAULT NULL,
  `par_parbday` varchar(45) DEFAULT NULL,
  `par_parwei` varchar(10) DEFAULT NULL,
  `par_parhei` varchar(10) DEFAULT NULL,
  `par_noc` varchar(2) DEFAULT NULL,
  `par_paroccu` varchar(45) DEFAULT NULL,
  `par_eversmoke` varchar(3) DEFAULT NULL,
  `par_cursmoke` varchar(3) DEFAULT NULL,
  `par_stiperday` varchar(3) DEFAULT NULL,
  `par_agesta` varchar(2) DEFAULT NULL,
  `par_stiperdaybef` varchar(3) DEFAULT NULL,
  `par_agestop` varchar(2) DEFAULT NULL,
  `par_everdra` varchar(3) DEFAULT NULL,
  `par_curdri` varchar(3) DEFAULT NULL,
  `par_morethan` varchar(3) DEFAULT NULL,
  `par_numdrink` varchar(3) DEFAULT NULL,
  `par_agestodri` varchar(2) DEFAULT NULL,
  `par_drugs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO partners VALUES("PAT0008","Allan","","","","","","","","","","","","","","","","","");
INSERT INTO partners VALUES("PAT0007","Jovel","","","","1","","on","on","5","","","","on","on","","3 t","","");
INSERT INTO partners VALUES("PAT0009","Ronel","","","","","Electrical Engineer","","","","","","","on","on","","6","","");



DROP TABLE IF EXISTS patient;

CREATE TABLE `patient` (
  `pat_num` varchar(7) NOT NULL,
  `pat_lname` varchar(100) DEFAULT NULL,
  `pat_fname` varchar(100) DEFAULT NULL,
  `pat_mname` varchar(100) DEFAULT NULL,
  `pat_nname` varchar(25) DEFAULT NULL,
  `pat_bday` varchar(10) DEFAULT NULL,
  `pat_email` varchar(100) DEFAULT NULL,
  `pat_occu` varchar(100) DEFAULT NULL,
  `pat_socstat` varchar(25) DEFAULT NULL,
  `pat_contact` varchar(20) DEFAULT NULL,
  `pat_add1` varchar(255) DEFAULT NULL,
  `pat_add2` varchar(255) DEFAULT NULL,
  `pat_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("PAT0008","valenzuela","madonna","m","Donna, Mads","05/18/1978","madonna.valenzuela@gmail.com","Statistician","Married","(63) 917-459-2855","Blk 15 Lot 23, 2nd St., Marisol, Angeles City","n/a","2018-07-13 23:21:00");
INSERT INTO patient VALUES("PAT0009","Tolentino","Marra","d","marra","09/26/1991","abcde@gmail.com","xxx","Married","(63) 918-947-6344","Blk 150 Lot 12 Bulaon Resettlement, CSFP","","2018-07-13 23:32:52");
INSERT INTO patient VALUES("PAT0007","Ochoa","Carmela","L","Ela","02/08/1978","abcd@gmail.com","","Married","","Blk 15 Lot 22 St. Jude Village, CSFP","New York","2018-07-13 21:29:10");



DROP TABLE IF EXISTS patient_records;

CREATE TABLE `patient_records` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(7) DEFAULT NULL,
  `pr_wei` varchar(10) DEFAULT NULL,
  `pr_hei` varchar(10) DEFAULT NULL,
  `pr_bmi` varchar(5) DEFAULT NULL,
  `pr_bpsys` int(3) DEFAULT NULL,
  `pr_bpdia` int(3) DEFAULT NULL,
  `pr_cc` varchar(45) DEFAULT NULL,
  `pr_lm` varchar(10) DEFAULT NULL,
  `pr_pm` varchar(10) DEFAULT NULL,
  `pr_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO patient_records VALUES("50","PAT0008","54","152","23.37","100","80","prenatal check up","5/16/1978","04/16/1978","2018-07-13 23:21:00");
INSERT INTO patient_records VALUES("51","PAT0009","78","163","29.36","110","80","Primary Infertility","07/04/2018","06/04/2018","2018-07-13 23:32:52");
INSERT INTO patient_records VALUES("49","PAT0007","76","158","30.44","120","80","Gyne check-up / infertility","07/06/2018","06/07/2018","2018-07-13 21:29:10");



DROP TABLE IF EXISTS plan;

CREATE TABLE `plan` (
  `plan_num` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `plan_desc` text,
  `plan_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`plan_num`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO plan VALUES("8","PAT0001","test","2018-06-29 00:16:26");
INSERT INTO plan VALUES("9","PAT0007","semen analysis\n\nvitamins\n\n75 gm OGTT, HBA1C, TSH\n\nDhea\n\nFfup: July 21","2018-07-13 22:43:23");
INSERT INTO plan VALUES("10","PAT0009","OGTT, HBA1C, TSH\n\nMetformin, Obimin\n\nCC1OOmg, July 14 to 18\n\nFfup FM JULY 25\n\n\n\nSemen Analyis\n\n\n\n","2018-07-13 23:44:41");



DROP TABLE IF EXISTS referral;

CREATE TABLE `referral` (
  `ref_num` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `ref_desc` text,
  `ref_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`ref_num`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("2","PAT0001","is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.","2018-07-02 17:45:16");
INSERT INTO referral VALUES("3","PAT0005","test","2018-07-02 17:46:17");



DROP TABLE IF EXISTS siemen;

CREATE TABLE `siemen` (
  `pat_num` varchar(10) NOT NULL,
  `sie_color` varchar(45) DEFAULT NULL,
  `sie_volume` varchar(6) DEFAULT NULL,
  `sie_ph` varchar(6) DEFAULT NULL,
  `sie_viscosity` varchar(5) DEFAULT NULL,
  `sie_liquetime` varchar(10) DEFAULT NULL,
  `sie_motility` varchar(10) DEFAULT NULL,
  `sie_grading` varchar(5) DEFAULT NULL,
  `sie_morphology` varchar(10) DEFAULT NULL,
  `sie_spercnt` varchar(5) DEFAULT NULL,
  `sie_puscell` varchar(20) DEFAULT NULL,
  `sie_redcell` varchar(10) DEFAULT NULL,
  `sie_bacteria` varchar(45) DEFAULT NULL,
  `sie_daysabs` varchar(5) DEFAULT NULL,
  `sie_wss` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO siemen VALUES("PAT0008","","","","","","","","","","","","","","");
INSERT INTO siemen VALUES("PAT0007","creamy white","","","","","","","","","","","","","");
INSERT INTO siemen VALUES("PAT0009","creamy white","","","","","","","","","","","","","");



DROP TABLE IF EXISTS transabdominal;

CREATE TABLE `transabdominal` (
  `tar_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) NOT NULL,
  `tar_indate` varchar(10) NOT NULL,
  `tar_num` varchar(50) NOT NULL,
  `tar_pres` varchar(255) NOT NULL,
  `tar_bip_dia` varchar(50) NOT NULL,
  `tar_occ_dia` varchar(50) NOT NULL,
  `tar_cep_ind` varchar(50) NOT NULL,
  `tar_fem_len` varchar(50) NOT NULL,
  `tar_abd_cir` varchar(50) NOT NULL,
  `tar_est_fet_wei` varchar(50) NOT NULL,
  `tar_pla` varchar(255) NOT NULL,
  `tar_tone` varchar(255) NOT NULL,
  `tar_move` varchar(255) NOT NULL,
  `tar_brea` varchar(255) NOT NULL,
  `tar_amn_flu_ind` varchar(255) NOT NULL,
  `tar_impre` text NOT NULL,
  PRIMARY KEY (`tar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS ultrasound;

CREATE TABLE `ultrasound` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) DEFAULT NULL,
  `usr_indate` varchar(10) DEFAULT NULL,
  `usr_pus` varchar(45) DEFAULT NULL,
  `usr_uterus` varchar(45) DEFAULT NULL,
  `usr_size_1` varchar(5) DEFAULT NULL,
  `usr_size_2` varchar(5) DEFAULT NULL,
  `usr_size_3` varchar(4) DEFAULT NULL,
  `usr_contour` varchar(45) DEFAULT NULL,
  `usr_echopattern` varchar(45) DEFAULT NULL,
  `usr_echorem` varchar(255) DEFAULT NULL,
  `usr_endometrium` varchar(5) DEFAULT NULL,
  `usr_endometrium_sel` varchar(45) DEFAULT NULL,
  `usr_endometrium_rem` varchar(255) DEFAULT NULL,
  `usr_cer1` varchar(5) DEFAULT NULL,
  `usr_cer2` varchar(5) DEFAULT NULL,
  `usr_cer_urm` varchar(5) DEFAULT NULL,
  `usr_ro1` varchar(5) DEFAULT NULL,
  `usr_ro2` varchar(5) DEFAULT NULL,
  `usr_ro3` varchar(5) DEFAULT NULL,
  `usr_ro_rem` varchar(255) DEFAULT NULL,
  `usr_lo1` varchar(5) DEFAULT NULL,
  `usr_lo2` varchar(5) DEFAULT NULL,
  `usr_lo3` varchar(5) DEFAULT NULL,
  `usr_lo_rem` varchar(255) DEFAULT NULL,
  `usr_cdsf` varchar(45) DEFAULT NULL,
  `usr_opm` varchar(45) DEFAULT NULL,
  `usr_impre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

INSERT INTO ultrasound VALUES("89","PAT0009","07/14/2018","Transvaginal","","7.1","3.7","4.6","","","","0.6","","","","","","3.8","1.9","","","3.5","1.9","","","","","Normal uterus and adnexae");
INSERT INTO ultrasound VALUES("90","PAT0008","07/14/2018","Transvaginal","","8.7","5.5","7.1","Smooth","Homogenous","","","","","","","","3.4","1.5","","","2.5","1.5","","","None","Absent","SINGLE LIVE INTRAUTERINE PREGNANCY, APPROXIMATELY 6 WEEKS 5 DAYS AOG BY GS ");
INSERT INTO ultrasound VALUES("91","PAT0008","12/25/2018","Transabdominal","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO ultrasound VALUES("88","PAT0007","07/14/2018","Transvaginal","","6.6","4.5","4.5","","","","0.6","","","","","","2.4","1.5","","DF RO 1.0 X 0.9 cms","2.4","1.3","","","","","normal uterus  and adnexae");



DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(45) DEFAULT NULL,
  `user_mname` varchar(45) DEFAULT NULL,
  `user_lname` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_pword` varchar(45) DEFAULT NULL,
  `user_contact` varchar(20) DEFAULT NULL,
  `user_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","Carlos","P","Flores Jr.","admin@gmail.com","38f078a81a2b033d197497af5b77f95b50bfcfb8","09298370289","2018-03-28 00:19:15");
INSERT INTO user VALUES("3","Abegail","P","Laxamana","ghale.madayag@gmail.com","7c4a8d09ca3762af61e59520943dc26494f8941b","09298370288","2018-03-28 00:26:45");
INSERT INTO user VALUES("8","Pitabasan","D","Reyes","pdreyes@gmail.com","7c4a8d09ca3762af61e59520943dc26494f8941b","092983702830","2018-04-19 23:49:01");
INSERT INTO user VALUES("9","Jhoanna","A","De Vera","jadevera@yahoo.com","7c4a8d09ca3762af61e59520943dc26494f8941b","09298370254","2018-04-19 23:50:21");
INSERT INTO user VALUES("10","Eileen","C","Sy","cosyfertilityclinic@gmail.com","7c4a8d09ca3762af61e59520943dc26494f8941b","+639175213895","2018-07-16 05:16:36");



