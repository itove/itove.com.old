// addEvnetListener to projects list
var projects=document.querySelectorAll('#projects tbody tr');
for(var i=0;i<projects.length;i++){
	projects[i].addEventListener("click", progressPage);
}
// addEvnetListener to users list
var projects=document.querySelectorAll('#setting tbody tr');
for(var i=0;i<projects.length;i++){
	projects[i].addEventListener("click", passwd);
}

// addEvnetListener to alertclosebtn
var alertclosebtn=document.querySelectorAll('.alert .close');
for(var i=0;i<alertclosebtn.length;i++){
	alertclosebtn[i].addEventListener("click", closealert);
}

// addEvnetListener to dropdownbtn
var dropdownbtn=document.querySelectorAll('.dropdown button');
for(var i=0;i<dropdownbtn.length;i++){
	dropdownbtn[i].addEventListener("click", dropdown);
	//dropdownbtn[i].addEventListener("focusout", dropdown);
	dropdownbtn[i].addEventListener("blur", dropdown);
}
// addEvnetListener to dropdown-item
var dropdownitem=document.querySelectorAll('.dropdown-menu .dropdown-item');
for(var i=0;i<dropdownitem.length;i++){
	dropdownitem[i].addEventListener("mousedown", dropdownmenu);
}
// addEvnetListener to search
var s=document.querySelector('#search');
if(s) s.addEventListener('keyup', search);

// addEvnetListener to #myproject
var m=document.getElementById('myproject');
if(m) m.addEventListener('click', searchmy);

// addEvnetListener to upload
var u=document.querySelector('#upload input');
if(u) u.addEventListener('change', chname);


// click on projects entries to progress page
function progressPage(){
	var pid=this.querySelector('th').innerText;
	location.href=location.href + "/" + pid;
}
// click on users entries to passwd page
function passwd(){
	var user=this.querySelector('td').innerText;
	console.log(user);
	location.href=location.href + '/../chpwd/' + user;
	var user1=document.querySelector('input').innerText;
	console.log(user1);
}

// close alerts
function closealert(){
	this.parentElement.classList.remove('show');
	var i=this.parentElement
	setTimeout(function(){i.remove()}, 150);
	// set sth so this alert won't come out again when refresh
}

// toggle dropdown menu
function dropdown(){
	// add class show to .dropdown
	this.parentElement.classList.toggle('show');
	// add class show to .dropdown-menu
	this.nextElementSibling.classList.toggle('show');
	// change aria-expanded value to true
	//console.log(this.getAttribute('aria-expanded'));
	this.getAttribute('aria-expanded')=='true' ? this.setAttribute('aria-expanded', 'false') : this.setAttribute('aria-expanded', 'true');
}

// dropdown menu
function dropdownmenu(){
	for(var i=0;i<dropdownitem.length;i++){
		dropdownitem[i].classList.remove('active');
	}
	this.classList.add('active');
	this.parentElement.previousElementSibling.innerText=this.innerText;
	var input=document.querySelectorAll('input, textarea');
	var submit=document.querySelector('button[type=submit]');
	if(this!==document.getElementById('dates').querySelector('.dropdown-menu').firstElementChild){
		//console.log(this);
		// disable inputs
		for(var i=0;i<input.length;i++){
			//input[i].setAttribute("disabled","");
			input[i].setAttribute("readonly","");
		}
		// remove submit
		if(submit) submit.classList.add("d-none");

	}
	else {
		// enable inputs
		for(var i=0;i<input.length;i++){
			//input[i].removeAttribute("disabled");
			input[i].removeAttribute("readonly");
		}
		// add submit
		if(submit) submit.classList.remove("d-none");
	}
}

// search
function search(){
	// value of input
	var v=s.firstElementChild.value;

	var tr=document.querySelectorAll('.searchable');

	// search v in every tr
	for(var i=0;i<tr.length;i++){
		// search v in every td
		for(var j=tr[i].firstElementChild;j;j=j.nextElementSibling){
			if(j.innerText.includes(v)){
				tr[i].classList.remove('d-none');
				j=1; // if find any, j is no longer useful, so we can use it as a switch
				break;
			}
		}
		if(j!==1) tr[i].classList.add('d-none');
	}
}

// searchmy
function searchmy(){
	this.classList.toggle('btn-outline-secondary');
	this.classList.toggle('btn-primary');

	var uid=this.getAttribute('data-uid');

	// tr(s) that "data-uid" attribute NOT equal to uid
	var selector='table tbody tr:not([data-uid="' + uid + '"])';
	var tr=document.querySelectorAll(selector);
	//console.log(tr);

	// search uid in every tr's data-uid
	for(var i=0;i<tr.length;i++){
		if(this.classList.contains('btn-primary')){
			tr[i].classList.add('d-none');
			tr[i].classList.remove('searchable');
		}
		else{
			tr[i].classList.remove('d-none');
			tr[i].classList.add('searchable');
			search(); // to filter
		}
	}
}

function chname(){
	u.nextElementSibling.innerText=u.value;
}
