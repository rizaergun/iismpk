$(document).ready(function(e) {
	illeriGetir();
    $("#iller").bind('change',ilceleriGetir);
    $("#ilceler").bind('change',semtGetir);
    $("#semtler").bind('change',mahalleGetir);
});

function illeriGetir(){
	$.post('dinamik.php',{ilId: 0},function(output){
		$("#iller").append(output);
	});	
}

function ilceleriGetir(){
	if($("#iller").val() != 0){
		$.post('dinamik.php',{ilId: $("#iller").val()},function(output){
			$("#ilceler option").remove();
			$("#ilceler").append(output);
		});
	}
	else{
		$("#ilceler option").remove();
		$("#ilceler").append('<option value="0">Önce İl Seçiniz</option>');
	}
}

function semtGetir(){
	if($("#ilceler").val() != 0){
		$.post('dinamik.php',{ilceId: $("#ilceler").val()},function(output){
			$("#semtler option").remove();
			$("#semtler").append(output);
		});
	}
	else{
		$("#semtler option").remove();
		$("#semtler").append('<option value="0">Önce İlçe Seçiniz</option>');
	}
}

function mahalleGetir(){
	if($("#semtler").val() != 0){
		$.post('dinamik.php',{semtlerId: $("#semtler").val()},function(output){
			$("#mahalleler option").remove();
			$("#mahalleler").append(output);
		});
	}
	else{
		$("#mahalleler option").remove();
		$("#mahalleler").append('<option value="0">Önce Semt Seçiniz</option>');
	}
}
