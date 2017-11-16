function td(content){
	return "<td>"+content+"</td>";
}

function listUsers(X){
	var L = X.users.length;
	var tmp = "";
	
	for(var i=0; i < L; i++){
		tmp += "@"+X.users[i];
		if(i<L-1) tmp+=", ";
	}
	return "<td>" + tmp + "</td>";
}


function gentab(json){
	
	console.log("===== BEGIN CORP TABLE PARSE =====");
	table = $("#data tbody");
	
	// Hard-code GOV to infinity.
	json.corp[0].funds = "&#8734;";

	// sort by funds. sort alphabetically if two corps have the same funds	
	json.corp.sort(function(a,b){
		var d = b.funds - a.funds;
		if(d == 0){
			if(a.tag > b.tag) return 1;
			if(a.tag < b.tag) return -1;
		}
		return d;
	});

	var n=0;

	for(var X in json.corp){
		X = json.corp[X];
		var row = "<tr style='border-left: 2px solid "+X.color+"'>";
		row += td(X.tag);
		row += td(X.name);
		row += listUsers(X);
		row += td(X.funds);
		row += "</tr>";
		table.append(row);
		
		
		console.log("* Parsed",X.tag);
		n++;
	}
	console.log("Parsed",n,"corps.")	
	console.log("====== END CORP TABLE PARSE ======");
}


function err(a,b,c){
	$("#fail").show();
	console.log(a,b,c);
	alert("JSON parse error :(","This is probably a problem on our end.");
}

function reload(){
	$("#loading").show();
	
	console.clear();

	$("#data tbody tr:not(#header)").remove();
	console.log("Removed old data from table.");


	$.ajax({
	  dataType	:	"json",
	  url		:	"/kcp/json/corp.json",
	  cache		:	false, // <-- this makes it reload properly
	  success	: 	gentab,
	  error		: 	err
	});

	$("#loading").hide();
}


$(document).ready(function(){
	$.ajax({
	  dataType: "json",
	  url: "/kcp/json/corp.json",
	  success	:	gentab,
	  error		: 	err
	});
	
	$("#loading").fadeOut(1000);
});


