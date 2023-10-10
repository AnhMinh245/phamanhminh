const numbers = document.getElementsByTagName("button");
const result = document.getElementById("result");

for(let number of numbers){
	number.addEventListener("click", function(){
		result.innerHTML += this.value;
	});
}

function clear(){
	let res = result.innerHTML;
	result.innerHTML = res.substring(0, res.length - 1)
}

function clearE(){
	result.innerHTML = "";
}

function calculate(){
	let res = result.innerHTML;
	let output = eval(res);
	result.innerHTML = output;
}