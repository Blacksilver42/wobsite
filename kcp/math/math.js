
///////////////////////////////////////////////// PP's

function score(){
	var out = $("#payload-score .out");
	var cost,rely;
	cost = parseInt($("#cost").val());
	rely = parseInt($("#rely").val());
	if(isNaN(cost) | isNaN(rely)){
		out.html("[Invalid input]");
		return;
	} else {
		out.html((1000/rely - cost/100).toString());
	}
}


function calcPPY(kb, com, body, special){
	var x = kb + com;
	x *= body;
	if($(special)[0].checked == true){
		x *=2;
	}
	
	return x;
}

function buildCost(){
	var raw = parseInt($("#buildcost").val());
	console.log("buildCost(",raw,")");
	if(isNaN(raw)){
		alert("Invalid input");
		return;
	}
	$("#devcost").html((5*raw)|0);
	$("#launchcost").html((1.1*raw)|0);
	$("#testfine").html((1.5*raw)|0);
	$("#failfine").html((2*raw)|0);
	$("#refitcost").html((0.3*raw)|0);
}
