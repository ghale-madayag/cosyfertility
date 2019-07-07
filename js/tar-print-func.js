$(document).ready(function(){
    var tarprint = decrypt('patient');
    var path = window.location.pathname;
    var page = path.split("/").pop();

    $.ajax({
		type: "POST",
		url: "data/tar-handler.php",
		data: "tarprint="+tarprint,
		cache: false,
		success: function(data){
           var json = $.parseJSON(data);
           $(json).each(function(i,val){
                $("#patnum").html(val.patnum);
                $("#tar_indate").html(val.tar_indate);
                $("#age").html(val.age);
                $("#patname").html(val.patname);
                $("#tar_num").html(val.tar_num);
                $("#tar_pres").html(val.tar_pres);
                $("#tar_bip_dia").html(val.tar_bip_dia);
                $("#tar_occ_dia").html(val.tar_occ_dia);
                $("#tar_cep_ind").html(val.tar_cep_ind);
                $("#tar_fem_len").html(val.tar_fem_len);
                $("#tar_abd_cir").html(val.tar_abd_cir);
                $("#tar_est_fet_wei").html(val.tar_est_fet_wei);
                $("#tar_pla").html(val.tar_pla);
                $("#tar_tone").html(val.tar_tone);
                $("#tar_move").html(val.tar_move);
                $("#tar_brea").html(val.tar_brea);
                $("#tar_amn_flu_ind").html(val.tar_amn_flu_ind);
                $("#tar_impre").html(val.tar_impre);

                if (page=="tar-print.php") {
                    window.print();
                 }
           })
        }
    });

    $("#printBtn").on('click', function() {
        var plaintxt = decrypt('patient');

        var formData = plaintxt;
        var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
        
        window.open('tar-print.php?patient='+encryptedAES, '_blank');
    })

})