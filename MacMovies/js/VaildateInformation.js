// JavaScript Document


function vaildateName(){
	var flag = true;
	var fn = document.getElementById("tf_firstname");
	var ln = document.getElementById("tf_lastname");
	var tn = document.getElementById("tf_phone");
	var result_fn = fn.value.search(/^[A-Z]+[a-z]*/);
	var result_ln = ln.value.search(/^[A-Z]+[a-z]*/);
	var result_tn = tn.value.search(/^[1-9][0-9][0-9]\-[0-9][0-9][0-9]\-[0-9][0-9][0-9][0-9]$/);
	var feedbackinfo = new Array();	
	if(result_fn != 0 ){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[0] = "First name is illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[0] = "First name is OK.";
	}	
	if(result_ln !=0 ){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[1] = "Last name is illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[1] = "Last name is OK.";
	}
	
	if(result_tn !=0 ){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[2] = "Telephone number is illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[2] = "Telephone number is OK.";
	}
	if(! flag){
		feedBack(feedbackinfo);
			return false;
	}else{
		return true;	
	}
}

function feedBack(info){
	
		var showinfo ="Please check registration information:\n";
		for(t = 0; t < info.length; t++){
			showinfo = showinfo+info[t]+"\n";
		}
		alert(showinfo);

}

function showhint(tagid){
	var themessage = "";
	switch(tagid){
		case "firstname":
			themessage = "This is the firstname, start with a capital letter.";
			break;
		case "username":	
			themessage = "This is the username, only contains with letters.";
			break;
		default:
		themessage = "no hint";
	}
	document.getElementById("message").innerHTML = themessage;
}