function malopCheck(){
	var malopformat = /^([\w\d]{6})+$/;
	if(document.getElementById("malop").value.match(malopformat)){
		document.getElementById("malop_span").style.color="green";
		document.getElementById("malop_span").innerHTML="<b>OK</b>";
	}
	else{
		document.getElementById("malop_span").style.color="red";
		document.getElementById("malop_span").innerHTML="<b>Invalid format</b>";
	}
}

function tenlopCheck(){
	var tenlopformat = /^([\w\s\d]{1,50})+$/;
	if(document.getElementById("tenlop").value.match(tenlopformat)){
		document.getElementById("tenlop_span").style.color="green";
		document.getElementById("tenlop_span").innerHTML="<b>OK</b>";
	}
	else{
		document.getElementById("tenlop_span").style.color="red";
		document.getElementById("tenlop_span").innerHTML="<b>Invalid format</b>";
	}
}

function khoahocCheck(){
	var khoahocformat = /^\d+$/;
	if(document.getElementById("khoahoc").value.match(khoahocformat)){
		document.getElementById("khoahoc_span").style.color="green";
		document.getElementById("khoahoc_span").innerHTML="<b>OK</b>";
	}
	else{
		document.getElementById("khoahoc_span").style.color="red";
		document.getElementById("khoahoc_span").innerHTML="<b>Invalid format</b>";
	}
}

function gvcnCheck(){
	var gvcnformat = /^([\w\s\d]{1,50})+$/;
	if(document.getElementById("gvcn").value.match(gvcnformat)){
		document.getElementById("gvcn_span").style.color="green";
		document.getElementById("gvcn_span").innerHTML="<b>OK</b>";
	}
	else{
		document.getElementById("gvcn_span").style.color="red";
		document.getElementById("gvcn_span").innerHTML="<b>Invalid format</b>";
	}
}