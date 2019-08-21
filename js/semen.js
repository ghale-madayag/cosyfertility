$(document).ready(function(){
    $("form#form-semen-add").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "data/semen-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                if (data==1) {
                    $("input[type=text],input[type=number],input[type=time] textarea").val("");
                    $("#patname").val('').change();
                    recentSemen();
                    toastSuccess("Successfully Registered", "You added new data <a href='all-semen.php'> View All</a>");
                }
            }
        })
        e.preventDefault();
    });

    $("form#form-semen-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "data/semen-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                if (data==1) {
                    recentSemen();
                    toastSuccess("Successfully Updated", "You updated data <a href='all-semen.php'> View All</a>");
                }
            }
        })
        e.preventDefault();
    });

    $("#edit").on('click', function(){
        var len = $("input[name='semen-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else if(len>1){
            alert('Please select only one record');
        }else{
            $.each($("input[name='semen-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.location.replace('edit-semen.php?patient='+encryptedAES);
            });
        }
    })

    $("#del").on('click', function(){
        var len = $("input[name='semen-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else{
           var del = confirm("Are you sure you want to delete the patient record?");

           if(del==true){
                $.each($("input[name='semen-chk']:checked"), function(){
                    var formData = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "data/semen-handler.php",
                        data: "del=true&semen="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "Record was successfully deleted");
                            refresh("semen-all");
                        }
                    })
                });
           }
        }
    })
})

function getAllSemen(){
    var table = $('#semen-all').DataTable( {
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
            "url": "data/semen-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "sie_id" },
            { "data": "patname" },
            { "data": "sadate" },
            { "data": "moc" },
            { "data": "abs" },
            { "data": "toc" },
            { "data": "toa" },
            { "data": "liqtim" },
            { "data": "color" },
            { "data": "volume" },
            { "data": "viscosity" },
            { "data": "ph" },
            { "data": "indate" }
        ],
         'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<div class="md-checkbox"><input type="checkbox" name="semen-chk" class="flat-red" value="'+$('<div/>').text(data).html()+'" id="'+$('<div/>').text(data).html()+'"><label for="'+$('<div/>').text(data).html()+'"></label></div>';
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
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-semen.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="print" title="Print"><i class="fa fa-print"></i> Print</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="export" title="Export"><i class="fa fa-cloud-download"></i> Export to Excel</button>'+
          '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');


    // $("#usr-all tbody").on('click', 'tr td:not(:first-child)', function() {
    //     var data = table.row(this).data();
    //     var encryptedAES = CryptoJS.AES.encrypt(data.usr_id, "My Secret Passphrase");
    //     window.location.replace('usr-view.php?patient='+encryptedAES);
    // })
}

function getSemenInfo(){
    var plaintext = decrypt('patient');

    console.log(plaintext)
    
    $.ajax({
        type: "POST",
        url: "data/semen-handler.php",
        data: "get_semen="+plaintext,
        cache: false,
        success: function(data){
            var json = $.parseJSON(data);
            $(json).each(function(i,val){
                $('#seid').val(val.sie_id);
                $('#pat_fullname').val(val.patname);
                $("#sadate").val(val.sadate);
                $("#moc").val(val.moc);
                $("#abs").val(val.abs);
                $("#toc").val(val.toc);
                $("#toa").val(val.toa);
                $("#liqtim").val(val.liqtim);
                $("#color").val(val.color);
                $("#volume").val(val.volume);
                $("#viscosity").val(val.viscosity);
                $("#ph").val(val.ph);
                $("#clf1").val(val.clf1);
                $("#clf2").val(val.clf2);
                $("#clf3").val(val.clf3);
                $("#clf4").val(val.clf4);
                $("#clf5").val(val.clf5);
                $("#clf6").val(val.clf6);
                $("#clf7").val(val.clf7);
                $("#clf8").val(val.clf8);
                $("#clf9").val(val.clf9);
                $("#clf10").val(val.clf10);
                $("#clf11").val(val.clf11);
                $("#clf12").val(val.clf12);
                $("#clf13").val(val.clf13);
                $("#clf14").val(val.clf14);
                $("#clf15").val(val.clf15);
                $("#clf16").val(val.clf16);
                $("#clf17").val(val.clf17);
                $("#clf18").val(val.clf18);
                $("#clf19").val(val.clf19);
                $("#clf20").val(val.clf20);
                $("#clf21").val(val.clf21);
                $("#clf22").val(val.clf22);
                $("#clf23").val(val.clf23);
                $("#clf24").val(val.clf24);
            })
        }
    })

}