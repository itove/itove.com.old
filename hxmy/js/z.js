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
	xhr.responseType='';
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.send();
}
function updateNum(){
	if(xhr.readyState === XMLHttpRequest.DONE){
		if(xhr.status === 200){
			var x = xhr.response;
			//console.log(x);
			num.innerText = x;
		}
	}
}

// update page
function updateTime() {
	var t = JSClock();
	//console.log(n);
	//console.log(t);
	time.innerText = t;

}

var num = document.getElementById('num');
var time = document.getElementById('time');
var xhr =new XMLHttpRequest();
xhr.onreadystatechange = updateNum;

setInterval(updateTime, 1000);
setInterval(_xhr, 30000);
