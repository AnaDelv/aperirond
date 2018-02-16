$("#div_form").hide();
$("#div_exp").hide();
$("#div_int").hide();


function aff_comp(){
	
	$("#div_comp").show(0);
	$("#div_form").hide(0);
	$("#div_exp").hide(0);
	$("#div_int").hide(0);
	page=1;

};

function aff_form(){
	$("#div_comp").hide(0);
	$("#div_form").show(0);
	$("#div_exp").hide(0);
	$("#div_int").hide(0);
	$('#bouton1').removeClass('active');
	page=2;
};

function aff_exp(){
	$("#div_comp").hide(0);
	$("#div_form").hide(0);
	$("#div_exp").show(0);
	$("#div_int").hide(0);
	$('#bouton1').removeClass('active');
	page=3;
};
function aff_int(){
	$("#div_comp").hide(0);
	$("#div_form").hide(0);
	$("#div_exp").hide(0);
	$("#div_int").show(0);
	$('#bouton1').removeClass('active');
	page=4;
};


var page=1;


function aff(){
if (page==1){
	aff_comp();
}else if (page==2){
	aff_form();
}else if (page==3){
	aff_exp();
}else if (page==4){
	aff_int();
}
}

$("#chev1").click(function(){
	if (page<=1){
	page=4;
	}else{
	page=page-1;
}
aff();
});


$("#chev2").click(function(){
	if (page>=4) {
	page=1;}
	else{
	page=page+1;
}
aff();
})



