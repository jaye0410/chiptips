function changeActivePage(page) {
  const anchor = document.querySelector(`ul#topnav a[href="/chiptips/${page}"]`);
  if (anchor == null) { return; }

  const li = anchor.parentElement;
	li.classList.toggle("active");
}