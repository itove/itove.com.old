function _xhr(){
	xhr.open('GET', 'q/');
	xhr.responseType='json';
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.send();
}
function updateNum(){
	if(xhr.readyState === XMLHttpRequest.DONE){
		if(xhr.status === 200){
			var x = xhr.response;
			//console.log(x);
			oc.innerText = x.oc;
			rsv.innerText = x.rsv;
			if((Math.floor(new Date().getTime()/1000) - x.sec) > 180){
				spinner.className='spinner-grow text-danger';
			}
			else{
				spinner.className='spinner-grow text-warning';
			}
		}
	}
}

var oc = document.getElementById('oc');
var rsv = document.getElementById('rsv');
var spinner = document.getElementById('spinner');
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = updateNum;

window.onload = _xhr;

var intvls = [];
var i = setInterval(_xhr, 10000);
intvls.push(i);
