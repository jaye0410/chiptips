function changeActivePage(page) {
  const anchor = document.querySelector(`ul#topnav a[href="/chiptips/${page}"]`);
  if (anchor == null) { return; }

  const li = anchor.parentElement;
	li.classList.toggle("active");
}

const modalManager = {
  setupModal: function(statusName) {
    const modal = this.createModal(statusName);
    document.querySelector("#wrapper").appendChild(modal);
    // showPopoverメソッドで表示する
    modal.showPopover();
  },
  
  createModal: function(statusName) {
    const modal = document.createElement("div");
    modal.popover = "manual";
    modal.id = "popover";
    
    const span = document.createElement("span");
    span.textContent = statusName;
    modal.appendChild(span);
  
    // -----省略-----
  
    // 閉じるボタン
    const closeButton = document.createElement("button");
    closeButton.setAttribute("type", "button");
    closeButton.textContent = "X";
    closeButton.addEventListener("click", () => this.removeModal(modal));
    modal.appendChild(closeButton);
  
    return modal;
  },
  
  removeModal: function(modal) {
    modal.hidePopover();
    modal.remove();
  },
};
