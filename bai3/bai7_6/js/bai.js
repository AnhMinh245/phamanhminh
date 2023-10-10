var chks = document.getElementsByName("chk");
for (let i = 0; i < chks.length; i++)
	chks[i].onchange = function() {
			if (this.checked) {
				this.parentNode.parentNode.classList.add("selectedr");
				let c = document.getElementsByName("chk");
				let j = 0;
				for (; j < c.length; j++) 
					if (!c[j].checked) break;
				if (j == c.length) document.getElementById("chkall").checked = true;
				else document.getElementById("chkall").checked = false;
				document.querySelector("div.group-op").classList.remove("nodisplay");
			} else {
				this.parentNode.parentNode.classList.remove("selectedr");
				document.getElementById("chkall").checked = false;
				let c = document.getElementsByName("chk");	
				let j = 0;		
				for (; j < c.length; j++)
					if (c[j].checked) break;
				if (j == c.length) document.querySelector("div.group-op").classList.add("nodisplay");
				else document.querySelector("div.group-op").classList.remove("nodisplay");
				
			}
	};

document.getElementById("chkall").onchange = function() {
	let c = document.getElementsByName("chk");			
	for (let i = 0; i < c.length; i++) {
		c[i].checked = this.checked;
		if (c[i].checked) c[i].parentNode.parentNode.classList.add("selectedr");
		else c[i].parentNode.parentNode.classList.remove("selectedr");		
	}
	if (this.checked) document.querySelector("div.group-op").classList.remove("nodisplay");
	else document.querySelector("div.group-op").classList.add("nodisplay");
};


document.querySelector(".group-op-delete").onclick = function() {
	let c = document.getElementsByName("chk");	 		
	for (let i = c.length-1; i >= 0; i--)
		if (c[i].checked) {
			c[i].parentNode.parentNode.parentNode.removeChild(c[i].parentNode.parentNode);
		}
};

