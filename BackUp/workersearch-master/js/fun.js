function varification() {
	var regex='/^[^a-zA-Z]*$/';
	var x=document.forms["form1"]["fn"].value;
	//alert(x);
	if(!/^[a-zA-Z]+$/.test(x))){
		alert("not valid");
	if(regex.test(x)){
		//....
	}
	}
}