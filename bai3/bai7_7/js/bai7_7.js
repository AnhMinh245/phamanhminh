const myForm = document.getElementById("left");
const nodes = myForm.getElementsByTagName("span");
	for(let i = 0; i<nodes.length; i++){
		nodes[i].addEventListener("mouseover", mouseOver);
		nodes[i].addEventListener("mouseout", mouseOut);
		nodes[i].addEventListener("click", click);
	}
	
function mouseOver() {
	if(this.style.backgroundColor=="aqua"){
	}
	else{
		this.style.backgroundColor = "azure";
	}
}

function mouseOut() {
	if(this.style.backgroundColor=="aqua"){
	}
	else{
		this.style.backgroundColor = "lightgray";
	}
}

function click(){
	const myForm = document.getElementById("left");
	const nodes = myForm.getElementsByTagName("span");
	for(let i =0; i<nodes.length; i++){
		nodes[i].style.backgroundColor="lightgray";
	}
	this.style.backgroundColor="aqua";
	document.getElementById("demo").innerHTML = this.innerText;
}