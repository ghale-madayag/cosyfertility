$(document).ready(function(){
    $("form#form-tar-add").on('submit', function(e) {
        var formData = new FormData($(this)[0]);

        $.ajax({
            type: "POST",
            url: "data/tar-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                if (data==1) {
                    $("input[type=text],textarea").val("");
                    $("#patname").val('').change();
                    recentTar();
                    toastSuccess("Successfully Registered", "You added new data <a href='all-tar.php'> View All</a>");
                }
            }
        })
        
        e.preventDefault();
    })

    $("#edit").on('click', function(){
        var len = $("input[name='usr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else if(len>1){
            alert('Please select only one record');
        }else{
            $.each($("input[name='usr-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.location.replace('edit-tar.php?patient='+encryptedAES);
            });
        }
    })
    
    //delete selected report
    $("#del").on('click', function(){
        var len = $("input[name='usr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else{
           var del = confirm("Are you sure you want to delete the patient record?");

           if(del==true){
                $.each($("input[name='usr-chk']:checked"), function(){
                    var formData = $(this).val();
                
                    $.ajax({
                        type: "POST",
                        url: "data/tar-handler.php",
                        data: "del=true&tar="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "Record was successfully deleted");
                            refresh("usr-all");
                        }
                    })
                });
           }
        }
    })

    $("form#form-tar-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        
        $.ajax({
            type: "POST",
            url: "data/tar-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                console.log(data)
                
                if (data==1) {
                    recentTar();
                    toastSuccess("Successfully Updated", "You updated data <a href='all-tar.php'> View All</a>");
                }
            }
        })
        
        e.preventDefault();
    })

    $("#print").on('click', function(){
        var len = $("input[name='usr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else if(len>1){
            alert('Please select only one record');
        }else{
            $.each($("input[name='usr-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.open('tar-print.php?patient='+encryptedAES, '_blank');
            });
        }
    })

    $('#export').click(function(){ $('.buttons-excel').click(); });
})

function getAllUsr() {
    
	//iCheck for checkbox and radio inputs
	  /*------ datatables all products---------*/
    var table = $('#usr-all').DataTable( {
        "dom": '<"toolbar">Bfrtip',
        "lengthChange": false,
        "ordering": false,
        "scrollX": true,
        "buttons": [
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Co-Sy Fertility Clinic.'
            },
        ],
        "language": {
            "emptyTable": "No available data"
        },
        "ajax": {
            "url": "data/tar-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "tar_id" },
            { "data": "tar_indate" },
            { "data": "patname" },
            { "data": "tar_num" },
            { "data": "tar_pres" },
            { "data": "tar_bip_dia" },
            { "data": "tar_occ_dia" },
            { "data": "tar_cep_ind" },
            { "data": "tar_fem_len" },
            { "data": "tar_abd_cir" },
            { "data": "tar_est_fet_wei" },
            { "data": "tar_pla" },
            { "data": "tar_tone" },
            { "data": "tar_move" },
            { "data": "tar_brea" },
            { "data": "tar_amn_flu_ind" },
            { "data": "tar_impre" }

        ],
         'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<div class="md-checkbox"><input type="checkbox" name="usr-chk" class="flat-red" name="mt-chk" value="'+$('<div/>').text(data).html()+'" id="'+$('<div/>').text(data).html()+'"><label for="'+$('<div/>').text(data).html()+'"></label></div>';
         }
      }],
      'order': [1, 'asc']
    } );

    /*------------- custom toolbar ------------*/
     $("div.toolbar").html('<div class="mailbox-controls">'+
         '<button type="button" class="btn btn-default btn-sm checkbox-toggle" title="Select All"><i class="fa fa-square-o"></i> Select All</button> '+
         '<div class="btn-group">'+
            '<button type="button" class="btn btn-default btn-sm" id="del" title="Delete"><i class="fa fa-trash-o"></i> Delete</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="edit" title="Edit"><i class="fa fa-edit"></i> Edit</button>'+
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-tar.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="print" title="Print"><i class="fa fa-print"></i> Print</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="export" title="Export"><i class="fa fa-cloud-download"></i> Export to Excel</button>'+
          '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');


     $("#usr-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.tar_id, "My Secret Passphrase");
        window.location.replace('tar-view.php?patient='+encryptedAES);
   })
}

function getusrInfo(){
    var plaintext = decrypt('patient');
    
    $.ajax({
        type: "POST",
        url: "data/tar-handler.php",
        data: "get_usr="+plaintext,
        cache: false,
        success: function(data){
            var json = $.parseJSON(data);
           $(json).each(function(i,val){
                $("#tarid").val(val.tar_id)
                $("#pat_fullname").val(val.patname);
                $("#urdate").val(val.tar_indate);
                $("#tar_num").val(val.tar_num);
                $("#tar_pres").val(val.tar_pres);
                $("#tar_bip_dia").val(val.tar_bip_dia);
                $("#tar_occ_dia").val(val.tar_occ_dia);
                $("#tar_cep_ind").val(val.tar_cep_ind);
                $("#tar_fem_len").val(val.tar_fem_len);
                $("#tar_abd_cir").val(val.tar_abd_cir);
                $("#tar_est_fet_wei").val(val.tar_est_fet_wei);
                $("#tar_pla").val(val.tar_pla);
                $("#tar_tone").val(val.tar_tone);
                $("#tar_move").val(val.tar_move);
                $("#tar_brea").val(val.tar_brea);
                $("#tar_amn_flu_ind").val(val.tar_amn_flu_ind);
                $("#tar_impre").html(val.tar_impre);

           })
        }
    })

}