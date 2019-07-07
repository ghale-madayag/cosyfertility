$(document).ready(function(){
    $("form#form-actual").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "data/actual-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data==1) {
                    $("#patname").val('').change();
                    $("input[type=text]").val("");
                    $('input').iCheck('uncheck'); 
                    toastSuccess("Successful", "Actual follow-up visit has been successully added");
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
                window.location.replace('actual-edit.php?patient='+encryptedAES);
            });
        }
    });

    $("form#form-actual-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "data/actual-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
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
            alert('Please select patient');
        }else{
           var del = confirm("Are you sure you want to delete the plan record?");

           if(del==true){
                $.each($("input[name='pat-chk']:checked"), function(){
                    var formData = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "data/actual-handler.php",
                        data: "del=true&usr="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "Plan record was successfully deleted");
                            refresh("patient-all");
                        }
                    })
                });
           }
        }
    })

})

function getAllActPlan() {
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
            "url": "data/actual-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "actid" },
            { "data": "pat_num" },
            { "data": "pat_num" },
            { "data": "fullname" },
            { "data": "date" }
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
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'actual-add.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');

     $("#patient-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.actid, "My Secret Passphrase");
        window.location.replace('actual-edit.php?patient='+encryptedAES);
   })
}

function getActPlanInfo(){
    var plaintext = decrypt('patient');
    $.ajax({
        type: "POST",
        url: "data/actual-handler.php",
        data: "get_usr="+plaintext,
        cache: false,
        success: function(data){
           var json = $.parseJSON(data);
           $(json).each(function(i, val) {
                $("#planid").val(val.id);
                $("#pat_fullname").val(val.fullname);
                $("#data1").val(val.data1);
                $("#data2").val(val.data2);
                $("#data3").val(val.data3);
                $("#data4").val(val.data4);
                $("#data5").val(val.data5);
                if(val.data6=="on"){
                    $('#data6').iCheck('check');
                }

                if(val.data7=="on"){
                    $('#data7').iCheck('check');
                }
                if(val.data8=="on"){
                    $('#data8').iCheck('check');
                }
                if(val.data9=="on"){
                    $('#data9').iCheck('check');
                }
                $("#data10").val(val.data10);
                $("#data11").val(val.data11);
                $("#data12").val(val.data12);
                $("#data13").val(val.data13);
                if(val.data14=="on"){
                    $('#data14').iCheck('check');
                }
                if(val.data15=="on"){
                    $('#data15').iCheck('check');
                }
                if(val.data16=="on"){
                    $('#data16').iCheck('check');
                }
                if(val.data17=="on"){
                    $('#data17').iCheck('check');
                }
                if(val.data18=="on"){
                    $('#data18').iCheck('check');
                }
                if(val.data19=="on"){
                    $('#data19').iCheck('check');
                }
                if(val.data20=="on"){
                    $('#data20').iCheck('check');
                }
                if(val.data21=="on"){
                    $('#data21').iCheck('check');
                }
                if(val.data22=="on"){
                    $('#data22').iCheck('check');
                }
                if(val.data23=="on"){
                    $('#data23').iCheck('check');
                }
                if(val.data24=="on"){
                    $('#data24').iCheck('check');
                }
                if(val.data25=="on"){
                    $('#data25').iCheck('check');
                }
                if(val.data26=="on"){
                    $('#data26').iCheck('check');
                }
                if(val.data27=="on"){
                    $('#data27').iCheck('check');
                }
                if(val.data29=="on"){
                    $('#data29').iCheck('check');
                }
                if(val.data31=="on"){
                    $('#data31').iCheck('check');
                }
                if(val.data33=="on"){
                    $('#data33').iCheck('check');
                }
                if(val.data35=="on"){
                    $('#data35').iCheck('check');
                }
                if(val.data37=="on"){
                    $('#data37').iCheck('check');
                }
                $("#data28").val(val.data28);
                $("#data30").val(val.data30);
                $("#data32").val(val.data32);
                $("#data34").val(val.data34);
                $("#data36").val(val.data36);

           })
        }
    })
}