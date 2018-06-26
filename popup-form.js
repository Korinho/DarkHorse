window.document.onkeydown = function (e)
{
	if (!e){
		e = event;
	}
	if (e.keyCode == 27){
		document.getElementById("CRMFrame").src="";
		lightbox_close();
	}
}

function lightbox_open(){
	document.getElementById('light').style.display='block';
	document.getElementById('fade').style.display='block';	
}

function lightbox_close(){
	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
}

function lightbox_open1(){
	document.getElementById('light1').style.display='block';
	document.getElementById('fade').style.display='block';	
}

function lightbox_close1(){
	document.getElementById('light1').style.display='none';
	document.getElementById('fade').style.display='none';
}
	
function lightbox_open2(){
	document.getElementById('light2').style.display='block';
	document.getElementById('fade').style.display='block';	
}

function lightbox_close2(){
	document.getElementById('light2').style.display='none';
	document.getElementById('fade').style.display='none';
}

function lightbox_open3(){
	document.getElementById('light3').style.display='block';
	document.getElementById('fade').style.display='block';	
}

function lightbox_close3(){
	document.getElementById('light3').style.display='none';
	document.getElementById('fade').style.display='none';
}

function lightbox_open4(){
	document.getElementById('light4').style.display='block';
	document.getElementById('fade').style.display='block';	
}

function lightbox_close4(){
	document.getElementById('light4').style.display='none';
	document.getElementById('fade').style.display='none';
}