$(document).ready(function() {
    $("form#form-plan").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        
        $.ajax({
            type: "POST",
            url: "data/plan-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log(data)
                if (data==1) {
                    $("#patname").val('').change();
                    $("input[type=text]").val("");
                    $('input').iCheck('uncheck'); 
                    toastSuccess("Successful", "Plan has been successully added");
                    recentPlan();
                }
            }
        })
        e.preventDefault();
    });
    
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
                window.location.replace('patient-edit-plan.php?patient='+encryptedAES);
            });
        }
    });

    $("form#form-plan-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
		$.ajax({
			type: "POST",
			url: "data/plan-handler.php",
			data: formData,
			cache: false,
			async: false,
            processData: false,
            contentType: false,
            success: function(data){
            console.log(data)
              if (data==1) {
                    toastSuccess("Successful", "Plan has been successully updated");
                }
            }
		})
        
        e.preventDefault();
    });

    $("#del").on('click', function(){
        var len = $("input[name='pat-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else{
           var del = confirm("Are you sure you want to delete the plan record?");

           if(del==true){
                $.each($("input[name='pat-chk']:checked"), function(){
                    var formData = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "data/plan-handler.php",
                        data: "del=true&usr="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "Plan record was successfully deleted");
                            refresh("patient-all");
                            recentPlan();
                        }
                    })
                });
           }
        }
    })
});

function getPlanInfo(){
    var plaintext = decrypt('patient');
    
    $.ajax({
        type: "POST",
        url: "data/plan-handler.php",
        data: "get_usr="+plaintext,
        cache: false,
        success: function(data){
            console.log(data)
           var json = $.parseJSON(data);
           $(json).each(function(i, val) {
                $("#planid").val(val.id);
                $("#pat_fullname").val(val.fullname);
                if(val.lab1=="on"){
                    $('#lab1').iCheck('check');
                }
                if(val.lab1=="on"){
                    $('#lab1').iCheck('check');
                }
                if(val.lab2=="on"){
                    $('#lab2').iCheck('check');
                }
                if(val.lab3=="on"){
                    $('#lab3').iCheck('check');
                }
                if(val.lab4=="on"){
                    $('#lab4').iCheck('check');
                }
                if(val.lab5=="on"){
                    $('#lab5').iCheck('check');
                }
                if(val.lab6=="on"){
                    $('#lab6').iCheck('check');
                }
                if(val.lab7=="on"){
                    $('#lab7').iCheck('check');
                }
                if(val.lab8=="on"){
                    $('#lab8').iCheck('check');
                }
                if(val.lab9=="on"){
                    $('#lab9').iCheck('check');
                }
                if(val.lab10=="on"){
                    $('#lab10').iCheck('check');
                }
                if(val.lab11=="on"){
                    $('#lab11').iCheck('check');
                }
                if(val.lab12=="on"){
                    $('#lab12').iCheck('check');
                }
                if(val.lab13=="on"){
                    $('#lab13').iCheck('check');
                }
                if(val.lab14=="on"){
                    $('#lab14').iCheck('check');
                }
                if(val.lab15=="on"){
                    $('#lab15').iCheck('check');
                }
                if(val.lab16=="on"){
                    $('#lab16').iCheck('check');
                }
                if(val.lab17=="on"){
                    $('#lab17').iCheck('check');
                }
                if(val.lab18=="on"){
                    $('#lab18').iCheck('check');
                }
                if(val.lab19=="on"){
                    $('#lab19').iCheck('check');
                }
                if(val.lab20=="on"){
                    $('#lab20').iCheck('check');
                }
                if(val.lab21=="on"){
                    $('#lab21').iCheck('check');
                }
                if(val.lab1=="on"){
                    $('#lab1').iCheck('check');
                }

                $("#res1").val(val.res1);
                $("#res2").val(val.res2);
                $("#res3").val(val.res3);
                $("#res4").val(val.res4);
                $("#res5").val(val.res5);
                $("#res6").val(val.res6);
                $("#res7").val(val.res7);
                $("#res8").val(val.res8);
                $("#res9").val(val.res9);
                $("#res10").val(val.res10);
                $("#res11").val(val.res11);
                $("#res12").val(val.res12);
                $("#res13").val(val.res13);
                $("#res14").val(val.res14);
                $("#res15").val(val.res15);
                $("#res16").val(val.res16);
                $("#res17").val(val.res17);
                $("#res18").val(val.res18);
                $("#res19").val(val.res19);
                $("#res20").val(val.res20);
                $("#res21").val(val.res21);

                $("#med1").val(val.med1);
                $("#med2").val(val.med2);
                $("#med3").val(val.med3);
                $("#med4").val(val.med4);
                $("#med5").val(val.med5);
                $("#med6").val(val.med6);
                $("#med7").val(val.med7);
                $("#med8").val(val.med8);
                $("#med9").val(val.med9);
                $("#med10").val(val.med10);
                $("#med11").val(val.med11);
                $("#med12").val(val.med12);
                $("#med13").val(val.med13);
                $("#med14").val(val.med14);
                $("#med15").val(val.med15);
                $("#med16").val(val.med16);
                $("#med17").val(val.med17);
                $("#med18").val(val.med18);
                $("#med19").val(val.med19);
                $("#med20").val(val.med20);
                $("#med21").val(val.med21);
                $("#med22").val(val.med22);
                $("#med23").val(val.med23);
                $("#med24").val(val.med24);
                $("#med25").val(val.med25);
                $("#med26").val(val.med26);
                $("#med27").val(val.med27);
                $("#med28").val(val.med28);
                $("#med29").val(val.med29);
                $("#med30").val(val.med30);
                $("#med31").val(val.med31);
                $("#med32").val(val.med32);
                $("#med33").val(val.med33);
                $("#med34").val(val.med34);
                $("#med35").val(val.med35);
                $("#med36").val(val.med36);
                $("#med37").val(val.med37);
                $("#med38").val(val.med38);
                $("#med39").val(val.med39);
                $("#med40").val(val.med40);
                $("#med41").val(val.med41);
                $("#med42").val(val.med42);
                $("#med43").val(val.med43);
                $("#med44").val(val.med44);
                $("#med45").val(val.med45);
                $("#med46").val(val.med46);
                $("#med47").val(val.med47);
                $("#med48").val(val.med48);
                $("#med49").val(val.med49);
                $("#med50").val(val.med50);
                $("#med51").val(val.med51);
                $("#med52").val(val.med52);
                $("#med53").val(val.med53);
                $("#med54").val(val.med54);
                $("#med55").val(val.med55);
                $("#med56").val(val.med56);
                $("#med57").val(val.med57);
                $("#med58").val(val.med58);
                $("#med59").val(val.med59);
                $("#med60").val(val.med60);
                $("#med61").val(val.med61);
                $("#med62").val(val.med62);
                $("#med63").val(val.med63);
                $("#med64").val(val.med64);
                $("#med65").val(val.med65);
                $("#med66").val(val.med66);
                $("#med67").val(val.med67);
                $("#med68").val(val.med68);
                $("#med69").val(val.med69);
                $("#med70").val(val.med70);
                $("#med71").val(val.med71);
                $("#med72").val(val.med72);
           })
        }
    })
}

function recentPlan() {
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/plan-handler.php',
	  data: "recplan=true",
	  cache: false,
	  success: function(data){

	    var json = $.parseJSON(data);
		$(json).each(function(i,val){
				
			var formData = val.pat_num;
			var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
			users.append('<li class="item">'+
			'<div class="product-img circle-text">'+val.img+'</div>'+
				'<div class="product-info">'+
				'<a href="edit-assessment.php?patient='+encryptedAES+'" class="product-title">'+val.fullname+'</a>'+
				'<span class="product-description">Date: <strong>'+val.indate+
					'</strong></span>'+
			'</div>'+
			'</li>');
		});
	  }
	})
}

function getAllPlan() {
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
            "emptyTable":     "No plan available"
        },
        "ajax": {
            "url": "data/plan-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "st_id" },
            { "data": "pat_num" },
            { "data": "pat_num" },
            { "data": "fullname" },
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
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'patient-plan-add.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');

     $("#patient-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.st_id, "My Secret Passphrase");
        window.location.replace('patient-edit-plan.php?patient='+encryptedAES);
   })
}