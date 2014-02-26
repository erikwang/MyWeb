// JavaScript Document
//objselect = document.getElementById("movc").onclick = checkSelection;
count = 0;



function checkSelection(){
	if (! checkCount()){
		alert("You may chooice maximum 3 catelogies, if you want to change, please click reset button on the page.");
		return false;
	}
	objlist = document.getElementById("mcategories");
	itemindex = objlist.selectedIndex;
	//alert(objselect.value);
	strvalue = objlist[itemindex].value
	if(strvalue == "Empty"){
		return false;	
	}
	
	if(checkDuplicate(strvalue)){
		document.getElementById("l"+count).innerHTML = strvalue;		
		count++;
	}else{
		alert("Found a duplicated input, please chooice another one.")
		return false;	
	}
}

function checkDuplicate(thevalue){
	for(t=0;t<2;t++){
		//alert(document.getElementById("l"+t).innerHTML);
		if (thevalue == document.getElementById("l"+t).innerHTML && thevalue != "Empty"){
			return false;	
		}else{
			return true;	
		}
	}
	
}

function checkCount(){
	if(count < 3){
		return true;	
	}else{
		return false;	
	}
}

function resetSelections(){
	document.getElementById("l0").innerHTML = "Empty";
	document.getElementById("l1").innerHTML = "Empty";
	document.getElementById("l2").innerHTML = "Empty";
	count = 0;
}

function enableinput(i){
	if(document.getElementById("checkbox"+i).checked == true){
		flag = false;
	}else{
		flag = true;	
	}
	document.getElementById("tf_mname"+i).disabled = flag;
	document.getElementById("tf_myear"+i).disabled = flag;
	document.getElementById("tf_actor"+i).disabled = flag;
	document.getElementById("tf_mdir"+i).disabled = flag;
	document.getElementById("tf_rating"+i).disabled = flag;
	document.getElementById("mcategories"+i).disabled = flag;
}