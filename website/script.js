function admin(){	
	
	document.getElementById("adminaction").style.display = "block";
	document.getElementById("getaction").style.display = "none";
	document.getElementById("admin").style.display = "none";
}

function get(){
	
	document.getElementById("usr").style.display = "block";
	document.getElementById("get").style.display = "block";
	document.getElementById("bk").style.display = "block";
	document.getElementById("getaction").style.display = "none";
	document.getElementById("fine").style.display = "block";

}

function bk(){
	document.getElementById("usr").style.display = "none";
	document.getElementById("get").style.display = "none";
	document.getElementById("bk").style.display = "none";
	document.getElementById("getaction").style.display = "block";

}

function fff(){
	var pass = document.getElementById("cp").value;	
	if (pass == "admin@10"){
		document.getElementById("checkcom").style.display = "none";
		document.getElementById("regform").style.display = "block";
	}
}