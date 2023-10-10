const list = [
"",
"pages/page1.html",
"pages/page2.html",
"pages/page3.html"
];

const myForm = document.getElementById("myForm");
const nodes = myForm.getElementsByTagName("p");
	for(let i =0; i<nodes.length; i++){
		nodes[i].addEventListener("mouseover", mouseOver);
		nodes[i].addEventListener("mouseout", mouseOut);
		nodes[i].addEventListener("click", click);
	}

function mouseOver() {
	if(document.getElementById(this.id).style.backgroundColor=="aqua"){
	}
	else{
		document.getElementById(this.id).style.backgroundColor = "azure";
	}
}

function mouseOut() {
	if(document.getElementById(this.id).style.backgroundColor=="aqua"){
	}
	else{
		document.getElementById(this.id).style.backgroundColor = "lightgray";
	}
}

function click(){
	const myForm = document.getElementById("myForm");
	const nodes = myForm.getElementsByTagName("p");
	for(let i =0; i<nodes.length; i++){
		nodes[i].style.backgroundColor="lightgray";
	}
	this.style.backgroundColor="aqua";
}

function switchPage(id){
	document.getElementById("frameShow").src = list[id];
}

