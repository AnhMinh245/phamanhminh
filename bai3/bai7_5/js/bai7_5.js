document.getElementById("hoten").focus();

function emailcheck(inputText){
	var mailformat = /^\w+([.]?\w+)*@\w([.]?\w+)*(\.\w{2,3})+$/;
	if(inputText.value.match(mailformat)){
		document.getElementById("email_span").style.color="green";
		document.getElementById("email_span").innerHTML="<b>OK</b>";
	}
	else{
		document.getElementById("email_span").style.color="red";
		document.getElementById("email_span").innerHTML="<b>Invalid format</b>";
	}
}

function phonecheck(inputText){
	var phoneformat = /^(\d{10}){1}$/;
	if(inputText.value.match(phoneformat)){
		document.getElementById("dienthoai_span").style.color="green";
		document.getElementById("dienthoai_span").innerHTML="<b>OK</b>";
	}
	else{
		document.getElementById("dienthoai_span").style.color="red";
		document.getElementById("dienthoai_span").innerHTML="<b>Invalid format</b>";
	}
}

function nameCorrection(){
	let name = document.getElementById("hoten").value;
	name = name.toLowerCase();
	const removedSpecial = name.replace(/([^\w\s])/g, "");
	const removedNumber = removedSpecial.replace(/\d/g, "");
	const removedSpace1 = removedNumber.replace(/(\s+)/g, " ");
	const removedSpace2 = removedSpace1.replace(/(^\s)/g, "");
	const removedSpace3 = removedSpace2.replace(/(\s$)/g, "");
	const finalName = removedSpace3.replace(/(^\w{1})|(\s+\w{1})/g, letter => letter.toUpperCase());
	document.getElementById("hoten").value = finalName;
}
