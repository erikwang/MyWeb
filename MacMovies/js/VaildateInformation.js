// JavaScript Document
province = new Array();
province = ["ON","QC","NS","NB","MB","BC","PE","SK","AB","NL"];

function vaildateName(){
	var flag = true;
	var fn = document.getElementById("tf_firstname");
	var ln = document.getElementById("tf_lastname");
	var tn = document.getElementById("tf_phone");
	var pr = document.getElementById("tf_province").value;
	var po = document.getElementById("tf_postal");
	var result_fn = fn.value.search(/^[A-Z]+[a-z]*/);
	var result_ln = ln.value.search(/^[A-Z]+[a-z]*/);
	var result_tn = tn.value.search(/^[1-9][0-9][0-9]\-[0-9][0-9][0-9]\-[0-9][0-9][0-9][0-9]$/);
	var result_po = po.value.search(/^([0-9A-Za-z]){3}\s?([0-9A-Za-z]){3}$/);
	var feedbackinfo = new Array();	
	if(result_fn != 0 || fn.value.length > 6){
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
	if(result_po !=0 ){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[3] = "Postal code is illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[3] = "Postal code is OK.";
	}	
	if(checkProvince(pr)){
		feedbackinfo[4] = "Province is OK.";	
	}else{
		feedbackinfo[4] = "Province is illegal.";
		flag = false;	
	}
	
	if(! flag){
		feedBack("",feedbackinfo);
		return false;
	}else{
		return true;	
	}
}



function showhint(tagid){
	var themessage = "";
	switch(tagid){
		case "firstname":
			themessage = "This is the firstname, start with a capital letter. e.g. John";
			break;
		case "lastname":
			themessage = "This is the lastname, start with a capital letter. e.g. Smith";
			break;
		case "city":
			themessage = "This is the city name. e.g. Vancouver";
			break;
		case "street":
			themessage = "This is the street name. e.g. Oak avenue";
			break;
		case "username":	
			themessage = "This is the username, only contains with letters. Maximum 6 alphabetic letters.";
			break;
		case "province":	
			themessage = 'This is the shortcut of Canada provinces, only contains one of "ON","QC","NS","NB","MB","BC","PE","SK","AB","NL".';
			break;
		case "phone":	
			themessage = 'This is the phone number, accept "xxx-xxx-xxxx".';
			break;
		case "postal":	
			themessage = 'This is the Postal code of Canada provinces, accept format like "xxx xxx" or "xxxxxx", non-caps-sensetive.';
			break;
		default:
		themessage = "Please see the help message here.";
	}
	document.getElementById("message").innerHTML = themessage;
}

function checkProvince(strpr){
	theflag = false;
	for(tt=0;tt<province.length;tt++){
		//alert(strpr+" "+province[tt]);
		if(strpr == province[tt]){
			theflag = true;
			//break;
		}
	}
	return theflag;
}


function vaildateMovie(){
	//var flag = true;
	
	var flag2 = true;
	var flag3 = true;
	var flag4 = true;
	var flag5 = true;
	
	var mn1 = document.getElementById("tf_mname1");
	var my1 = document.getElementById("tf_myear1");
	var md1 = document.getElementById("tf_mdir1");
	var ma1 = document.getElementById("tf_mactor1");
	var mr1 = document.getElementById("tf_mrating1");
	//recall to caller, halt if there is any error
	//return (doVaildataMovie(1,mn1,my1,md1,ma1,mr1));
	flag1 = doVaildataMovie(1,mn1,my1,md1,ma1,mr1);
	
	if(document.getElementById("checkbox2").checked){
		var mn2 = document.getElementById("tf_mname2");
		var my2 = document.getElementById("tf_myear2");
		var md2 = document.getElementById("tf_mdir2");
		var ma2 = document.getElementById("tf_mactor2");
		var mr2 = document.getElementById("tf_mrating2");
		flag2 = doVaildataMovie(2,mn2,my2,md2,ma2,mr2);
	}

	if(document.getElementById("checkbox3").checked){
		var mn3 = document.getElementById("tf_mname3");
		var my3 = document.getElementById("tf_myear3");
		var md3 = document.getElementById("tf_mdir3");
		var ma3 = document.getElementById("tf_mactor3");
		var mr3 = document.getElementById("tf_mrating3");
		flag3 = doVaildataMovie(3,mn3,my3,md3,ma3,mr3);
	}

	if(document.getElementById("checkbox4").checked){
		var mn4 = document.getElementById("tf_mname4");
		var my4 = document.getElementById("tf_myear4");
		var md4 = document.getElementById("tf_mdir4");
		var ma4 = document.getElementById("tf_mactor4");
		var mr4 = document.getElementById("tf_mrating4");
		flag4 = doVaildataMovie(4,mn4,my4,md4,ma4,mr4);
	}

	if(document.getElementById("checkbox5").checked){
		var mn5 = document.getElementById("tf_mname5");
		var my5 = document.getElementById("tf_myear5");
		var md5 = document.getElementById("tf_mdir5");
		var ma5 = document.getElementById("tf_mactor5");
		var mr5 = document.getElementById("tf_mrating5");
		flag5 = doVaildataMovie(5,mn5,my5,md5,ma5,mr5);
	}
	
	if(flag1 && flag2 && flag3 && flag4 && flag5){
		return true;	
	}else{
		return false;	
	}
}


function doVaildataMovie(sn,mn,my,md,ma,mr){	
	var flag = true;
	var result_mn = mn.value.search(/^\w+/);
	var result_my = my.value.search(/^[12][0-9][0-9][0-9]$/);
	var result_md = md.value.search(/^\w+/);
	var result_ma = ma.value.search(/^\w+/);
	var result_mr = mr.value.search(/^(10)|[0-9]$/);
	var feedbackinfo = new Array();	
	if(result_mn != 0){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[0] = "Movie name is illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[0] = "Movie name is OK.";
	}	
	if(result_my !=0 ){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[1] = "Movie year is illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[1] = "Movie year is OK.";
	}
	
	if(result_md !=0 ){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[2] = "Director's name is illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[2] = "Director's name is OK.";
	}
	if(result_ma !=0 ){
		//alert("First name is illegal.");
		//document.getElementById("feedback").value="First, Last name is(are) illegal.";
		feedbackinfo[3] = "Actor(s) name(s) is(are) illegal.";
		flag = false;
	}else{
		//alert("First name is OK.");
		//document.getElementById("feedback").value="First, Last name are OK.";
		feedbackinfo[3] = "Actor(s) name(s) is(are) OK.";
	}	
	
	if(result_mr != 0){
		feedbackinfo[4] = "Rating information is illegal.";	
		flag = false;
	}else{
		feedbackinfo[4] = "Rating information is OK.";
	}
	
	if(! flag){
		feedBack(sn,feedbackinfo);
		return false;
	}else{
		return true;	
	}
}

function feedBack(thesn,info){

		var showinfo ="Please check registration information at entry "+thesn+":\n";
		for(t = 0; t < info.length; t++){
			showinfo = showinfo+info[t]+"\n";
		}
		alert(showinfo);

}