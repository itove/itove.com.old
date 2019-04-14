function JSClock() {
  var time = new Date();
  var hour = time.getHours();
  var minute = time.getMinutes();
  var second = time.getSeconds();
  var temp = hour;
  temp += ((minute < 10) ? ':0' : ':') + minute;
  temp += ((second < 10) ? ':0' : ':') + second;
  return temp;
}

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
		}
	}
}

function updateTime() {
	var t = JSClock();
	//console.log(n);
	//console.log(t);
	time.innerText = t;

}

var oc = document.getElementById('oc');
var rsv = document.getElementById('rsv');
var time = document.getElementById('time');
var xhr =new XMLHttpRequest();
xhr.onreadystatechange = updateNum;

window.onload = _xhr;

//setInterval(updateTime, 1000);
var intvls = [];
var i = setInterval(_xhr, 10000);
intvls.push(i);
