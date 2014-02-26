// JavaScript Document
// stacking.js
//   Illustrates dynamic stacking of images

var topp = "Layer3";

// The event handler function to move the given element
//  to the top of the display stack

function toTop(newTop) {

// Set the two dom addresses, one for the old top 
//  element and one for the new top element 
  var domTop = document.getElementById(topp).style;
  var domNew = document.getElementById(newTop).style;

// Set the zIndex properties of the two elements, and
//  reset top to the new top
  //domTop.zIndex = "0";
  domNew.zIndex = "4";
  //topp = newTop;
  blackOutTip();
  var domTp = document.getElementById(newTop+'-t').style;
  domTp.visibility = 'visible';
}

function blackOutTip(){
	this.document.getElementById('Layer1-t').style.visibility = 'hidden';
	this.document.getElementById('Layer2-t').style.visibility = 'hidden';
	this.document.getElementById('Layer3-t').style.visibility = 'hidden';
}


function toLow(newTop,zindex) {

// Set the two dom addresses, one for the old top 
//  element and one for the new top element 
  //alert(zindex);
  var domTop = document.getElementById(topp).style;
  var domNew = document.getElementById(newTop).style;

// Set the zIndex properties of the two elements, and
//  reset top to the new top
  //domTop.zIndex = "0";
  domNew.zIndex = zindex;
  
  //var domTp = document.getElementById(newTop+'-t').style;
  //domTp.visibility = 'hidden';
  //topp = newTop;
}

function showTip(tipDiv){
	var domTip = document.getElementById(tipDiv).style;
	domTip.visibility = 'visible';
}
	
function hiddenTip(tipDiv){
	var domTip = document.getElementById(tipDiv).style;
	domTip.visibility = 'hidden';
}	