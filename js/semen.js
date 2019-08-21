$(document).ready(function(){
    
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
             console.log(data)
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
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-usr.php\'"><i class="fa fa-plus"></i> Add New</button>'+
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