var bars = document.getElementById('bars');
if (bars) bars.addEventListener('click', toggleSidebar);
function toggleSidebar(){
	var navul = document.getElementById('navul');
	var sidebar = document.getElementById('sidebar');
	navul.classList.toggle('d-none');
}

