const modalManager = {

  setupModal: function(statusName, includeShip = true) {
    // console.log(`status_name=${statusName}`);
    const modal = document.createElement("div");
    modal.popover = "manual";
    modal.id = "popover";
    
    const h2 = document.createElement("h2");
    h2.textContent = statusName;
    modal.appendChild(h2);
  
    // 閉じるボタン（上部）
    const closeButton = document.createElement("button");
    closeButton.setAttribute("type", "button");
    closeButton.textContent = "X";
    closeButton.addEventListener("click", () => this.removeModal(modal));
    h2.appendChild(closeButton);

    const params = {
      "statusName": statusName,
      "includeShip": includeShip,
    };
    const query = new URLSearchParams(params);
    fetch("api/unit_apply_effects.php?" + query, {
      method: "GET",
      // headers: { "Content-Type": "application/json" },
      // body: JSON.stringify({
      //   "statusName": statusName,
      //   "includeShip": includeShip
      // })
    })
    .then(response =>  response.text())
    .then(result => {
      const titles = ["ユニット名", "種別", "スキル名"];
      const datas = ["unitName", "skillType", "skillName"];
      const data = JSON.parse(result);
      const table = document.createElement("table");
      const thead = document.createElement("thead");
      const tr = document.createElement("tr");

      for (let i = 0; i < titles.length; i ++) {
        const th = document.createElement("th");
        th.textContent = titles[i];
        tr.appendChild(th);
      }
      
      thead.appendChild(tr);
      table.appendChild(thead);

      const tbody = document.createElement("tbody");
      
      for (let key in data) {
        const tr = document.createElement("tr");

        for (let i = 0; i < datas.length; i ++) {
          const td = document.createElement("td");
          td.textContent = data[key][datas[i]];
          tr.appendChild(td);
        }
        tbody.appendChild(tr);
      }
      table.appendChild(tbody);
      modal.appendChild(table);

      // 閉じるボタン（下部）
      const closeButton2 = document.createElement("button");
      closeButton2.setAttribute("type", "button");
      closeButton2.setAttribute("class", "wide");
      closeButton2.textContent = "Close";
      closeButton2.addEventListener("click", () => this.removeModal(modal));
      modal.appendChild(closeButton2);

      document.querySelector("#wrapper").appendChild(modal);
      // showPopoverメソッドで表示する
      modal.showPopover();
    })
    .catch(error => {
      console.error("Error: ", error);
    });
    
  },
  
  removeModal: function(modal) {
    modal.hidePopover();
    modal.remove();
  },

};

