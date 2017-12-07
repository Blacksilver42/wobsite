var E_vmenu;

$(document).ready(function(){
	E_vmenu = $("[href='#vehicles']");
	E_vmenu.append($("<div id='vmenu'>").load("/kcp/top/vmenu.html"))
	E_vmenu.mouseover(vmenu_show);
	E_vmenu.mouseout(vmenu_hide);
});

function vmenu_show(){
	$("#vmenu").show();
}
function vmenu_hide(){
	$("#vmenu").hide();
}
