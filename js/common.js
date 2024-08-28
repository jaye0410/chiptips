const PAGES = [
  {"name": "index"},
  {"name": "overview"},
];

function changeActivePage(page) {
  const li = document.querySelector(`ul#topnav a[href="${page}"]`).parentElement;
	//console.log(li);
	li.classList.toggle("active");
}