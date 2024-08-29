const PAGES = [
  {"name": "index"},
  {"name": "overview"},
];

function changeActivePage(page) {
  const anchor = document.querySelector(`ul#topnav a[href="/chiptips/${page}"]`);
  if (anchor == null) { return; }

  const li = anchor.parentElement;
	//console.log(li);
	li.classList.toggle("active");
}