/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var holdtime = 15;
//fx = document.getElementById('bodylayer').style.width;

function initText(){
	//alert("!");
	dom = document.getElementById('movieText').style;
	//fx = document.getElementById('bodylayer').offsetWidth;
	//fx = ofx.offsetWidth;
	
	x = dom.left;
	y = dom.top;
	
	x = x.match(/\d+/);
	y = y.match(/\d+/);
	//fx = fx.match(/\d+/);
	//document.write(" *"+fx);
	moveText(x,y,holdtime);	
}
	
function moveText(x,y,holdtime){
	fx = document.getElementById('bodylayer').offsetWidth - 200;
	
	//document.write(fx);
	//finalx = 820;
	finalx = fx;
	//alert("-"+finalx);
	finaly = 0;
	if(x != finalx){
		if (x > finalx){
		x--;
		}else if(x < finalx){
		x++;
		}	
	}
	
	if(y != finaly){
		if (y > finaly){
		y--;
		}else if(y < finaly){
		y++;
		}
	}
	
	if((x != finalx) || (y != finaly)){
		dom.left = x + "px";
		dom.top = y + "px";
		if (x == finalx){
			x = 0;
		}
		setTimeout("moveText(" + x + "," + y + ","+holdtime+")",holdtime);
	}
}

function stopMoving(){
	holdtime = 25;	
}

function resumeMoving(){
	holdtime = 10;	
}

function goHome(){
	if(! confirm("Are you sure to quit current page?")){
		return false;
	}else{
		document.location.href = "./movie.html";
	}
}

