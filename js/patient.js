$(document).ready(function() {
    
  
    //update patient

    $("form#form-patient-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);

        $.ajax({
            type: "POST",
            url: "data/patient-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
               
                if(data==1){
                    toastErr("Error","Email or Phone # are already exist.");
                }else{
                    toastSuccess("Successfully Updated", "Patient information successfully updated")
                }
            }
        })

        e.preventDefault();
    })
	

	//save the form for the patient
	$("form#form-patient-add").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        console.log(formData);

		$.ajax({
			type: "POST",
			url: "data/patient-handler.php",
			cache: false,
			data: formData,
			async: false,
			processData: false,
			contentType:false,
			success: function(data) {
                console.log(data)
				//clear all fields
                if (data==1) {
                    $("input[type=text],input[type=email], textarea").val("");
                    $("#socstat").val('-1');
                    $("#complaint").val('-1');
                    $('input').iCheck('uncheck'); 
                    
                    toastSuccess("Successfully Registered", "You added new patient <a href='all-patient.php'> View All</a>");
                    patNum();
                }else if(data==2){
                    toastErr("Error", "Invalid Birthday.");

                }else{
                    toastErr("Error", "Duplicate entry of Email or Contact Number.");
                }
				
				
			}
		})
		e.preventDefault();
    });

	//var table = $("#patient-all").DataTable();

    //retrieve all the patient
	

    //redirect to the patient info
    $("#edit").on('click', function(){
        var len = $("input[name='pat-chk']:checked").length;

        if(len==0){
            alert('Please select patient');
        }else if(len>1){
            alert('Please select only one patient');
        }else{
            $.each($("input[name='pat-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.location.replace('edit-patient.php?patient='+encryptedAES);
            });
        }
    })

    //delete selected patient
    $("#del").on('click', function(){
        var len = $("input[name='pat-chk']:checked").length;

        if(len==0){
            alert('Please select patient');
        }else{
           var del = confirm("Are you sure you want to delete the patient?");

           if(del==true){
                $.each($("input[name='pat-chk']:checked"), function(){
                    var formData = $(this).val();
                
                    $.ajax({
                        type: "POST",
                        url: "data/patient-handler.php",
                        data: "del=true&pat-num-del="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "All Patient data has been deleted");
                            refresh("patient-all");
                        }
                    })
                });
           }
        }
    })

    $('#export').click(function(){ $('.buttons-excel').click(); });
})

//function for patient number automation
function patNum(){
	$.ajax({
		type: "POST",
		url: "data/patient-handler.php",
		data: "get_all_patient=true",
		cache:false,
		success: function(data) {
			$("#pat-num").val(data);
			$("#pat-num-h").html("<strong>"+data+"</strong>");
		}
	})
}

// function to compute the body mask index
function bmiComputation(wei, hei) {
	var converted = parseInt(wei)/parseInt(hei)/parseInt(hei)*10000;

	if(!isNaN(converted)){
		$("#bmiVal").val(converted.toFixed(2));
		$("#bmi").val(converted.toFixed(2));
        var bmi = converted.toFixed(2);
        
        //check the bmi
        if (bmi<18.5) {
            console.log("Underweight");
            callBmi("Underweight", "warning","warning");
        }else if(bmi>=18.5 && bmi<=24.9){
            callBmi("Normal weight", "check","success");
        }else if (bmi>=25 && bmi<=29.9) {
            callBmi("Overweight", "warning","warning");
        }else if (bmi>=30) {
            callBmi("Obesity", "ban","danger");
        }
	}
	
}

//function to retrieve all the patient
function getAllPatient() {
	//iCheck for checkbox and radio inputs
      /*------ datatables all products---------*/

    var table = $('#patient-all').DataTable( {
        "dom": '<"toolbar">Bfrtip',
        "lengthChange": false,
        "ordering": false,
        "buttons": [
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Co-Sy Fertility Clinic.'
            },
        ],
        "language": {
            "emptyTable":     "No patient available"
        },
        "ajax": {
            "url": "data/patient-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "pat_num" },
            { "data": "pat_num" },
            { "data": "fullname" },
            { "data": "bday" },
            { "data": "email" },
            { "data": "contact" },
            { "data": "add" },
            { "data": "indate" }
        ],
         'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
            
             return '<div class="md-checkbox"><input type="checkbox" name="pat-chk" class="flat-red" name="mt-chk" value="'+$('<div/>').text(data).html()+'" id="'+$('<div/>').text(data).html()+'"><label for="'+$('<div/>').text(data).html()+'"></label></div>';
        }
        },
        {
        "targets": [ 1 ],
        "visible": false,
        "searchable": false
        },
    ],
      'order': [1, 'asc']
    } );

    /*------------- custom toolbar ------------*/
     $("div.toolbar").html('<div class="mailbox-controls">'+
         '<button type="button" class="btn btn-default btn-sm checkbox-toggle" title="Select All"><i class="fa fa-square-o"></i> Select All</button> '+
         '<div class="btn-group">'+
            '<button type="button" class="btn btn-default btn-sm" id="del" title="Delete"><i class="fa fa-trash-o"></i> Delete</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="edit" title="Edit"><i class="fa fa-edit"></i> Edit</button>'+
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-patient.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="export" title="Export"><i class="fa fa-cloud-download"></i> Export to Excel</button>'+
            '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');

     $("#patient-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.pat_num, "My Secret Passphrase");
        window.location.replace('edit-patient.php?patient='+encryptedAES);
        //window.location.replace('patient-profile.php?patient='+encryptedAES);
   })
}

// function to retrieve the patient information
function get_patinfo() {
    var plaintext = decrypt('patient');

    $.ajax({
        type: "POST",
        url: "data/patient-handler.php",
        data: "get_patinfo="+plaintext,
        cache: false,
        success: function(data) {
            console.log(data)
            $("#pat-num").val(plaintext);
            $("#pat-num-h").html("<strong>"+plaintext+"</strong>");
            
            var json = $.parseJSON(data);
            $(json).each(function (i, val) {
                
                
                $("#fname").val(val.fname);
                $("#lname").val(val.lname);
                $("#mname").val(val.mname);
                $("#bday").val(val.bday);
                $("#email").val(val.email);
                $("#occu").val(val.occu);
                $("#cstat").val(val.cstat);
                $("#contact").val(val.contact);
                $("#fb").val(val.fb);
                $("#haddress").val(val.homadd);
                $("#owaddress").val(val.offwor);
                $("#assess").val(val.asse);
                $("#refby").val(val.refered);
                //long term plan
                if(val.ltp1=="on"){
                    $('#ltp1').iCheck('check');
                }
                if(val.ltp2=="on"){
                    $('#ltp2').iCheck('check');
                }
                if(val.ltp3=="on"){
                    $('#ltp3').iCheck('check');
                }
                if(val.ltp4=="on"){
                    $('#ltp4').iCheck('check');
                }
                if(val.ltp5=="on"){
                    $('#ltp5').iCheck('check');
                }
                if(val.ltp6=="on"){
                    $('#ltp6').iCheck('check');
                }
                if(val.ltp7=="on"){
                    $('#ltp7').iCheck('check');
                }
                if(val.ltp8=="on"){
                    $('#ltp8').iCheck('check');
                }
                if(val.ltp9=="on"){
                    $('#ltp9').iCheck('check');
                }

                //first visit
                $("#fvdate").val(val.visDate);
                $("#patBp").val(val.patBp);
                $("#patHt").val(val.patHt);
                $("#patWt").val(val.patWt);
                $("#patBmi").val(val.patBmi);
                $("#parBp").val(val.parBp);
                $("#parHt").val(val.parHt);
                $("#parWt").val(val.parWt);
                $("#parBmi").val(val.parBmi);

                //coplaint
                $("#lmp").val(val.comlmp);
                $("#pmp").val(val.compmp);
                $('#comGAPL').val(val.comGAPL);
                if(val.coma=="on"){
                    $('#coma').iCheck('check');
                }
                if(val.comp=="on"){
                    $('#comp').iCheck('check');
                }
                if(val.coml=="on"){
                    $('#coml').iCheck('check');
                }
                if(val.comlh=="on"){
                    $('#lmph').iCheck('check');
                }
                if(val.comln=="on"){
                    $('#lmpn').iCheck('check');
                }
                if(val.comll=="on"){
                    $('#lmpl').iCheck('check');
                }
                if(val.comph=="on"){
                    $('#pmph').iCheck('check');
                }
                if(val.compn=="on"){
                    $('#pmpn').iCheck('check');
                }
                if(val.compl=="on"){
                    $('#pmpl').iCheck('check');
                }
                
                //charge
                if(val.chip=="on"){
                    $('#ip7').iCheck('check');
                }

                $("#doc").val(val.chdoc);
                $("input[name=irreg][value="+val.chirre+"]").iCheck('check');
                $("input[name=dysmen][value="+val.chdys+"]").iCheck('check');
                $("input[name=discha][value="+val.chdis+"]").iCheck('check');
                $("input[name=diabe][value="+val.chdia+"]").iCheck('check');
                $("input[name=asth][value="+val.chast+"]").iCheck('check');
                $("input[name=smok][value="+val.chsmo+"]").iCheck('check');
                $("input[name=drink][value="+val.chdri+"]").iCheck('check');
                $("input[name=contra][value="+val.chcont+"]").iCheck('check');
                $("input[name=hpvv][value="+val.chhpv+"]").iCheck('check');
                $("#lps").val(val.chpap);

                //gyne
                $("#gcdate").val(val.gydate);
                $("#doctor").val(val.gydoc);
                $("#diag").val(val.gydiag);
                $("#treat").val(val.gytre);
                $("#yrsMar").val(val.gymar);
                $("#yrsCoh").val(val.gycoh);
                $("#yrsTry").val(val.gytry);
                $("#coiFre").val(val.gycoi);

                //partner
                $("#parLname").val(val.parLname);
                $("#parFname").val(val.parFname);
                $("#parMname").val(val.parMname);
                $("#parBday").val(val.parBday);
                $("#parOccu").val(val.parOccu);
                $("#parOther").val(val.parOther);
                $("#parNoChild").val(val.parNoChild);

                if(val.parChe=="on"){
                    $('#parChe').iCheck('check');
                }
                if(val.parHeat=="on"){
                    $('#parHeat').iCheck('check');
                }
                if(val.parRad=="on"){
                    $('#parRad').iCheck('check');
                }
                $("input[name=parExpo][value="+val.parExpo+"]").iCheck('check');
                $("input[name=parAst][value="+val.parAst+"]").iCheck('check');
                $("input[name=parSmo][value="+val.parSmo+"]").iCheck('check');
                $("input[name=parDri][value="+val.parDri+"]").iCheck('check');
                $("input[name=parMum][value="+val.parMum+"]").iCheck('check');
                $("input[name=parVar][value="+val.parVar+"]").iCheck('check');
                $("input[name=parED][value="+val.parED+"]").iCheck('check');
                $("input[name=parVas][value="+val.parVas+"]").iCheck('check');
                $("input[name=parHor][value="+val.parHor+"]").iCheck('check');
                $("input[name=parSup][value="+val.parSup+"]").iCheck('check');
                $("input[name=parAnti][value="+val.parAnti+"]").iCheck('check');

            })
        }
    })
    
}

function callBmi(title, icon, stat) {
    var bmi = $(".callBmi").empty();

    bmi.html('<div class="alert alert-'+stat+' alert-dismissible">'+
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                '<h4><i class="icon fa fa-'+icon+'"></i>'+title+'</h4>'+
              '</div>');
}

