<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - Discord Bot JJ-8 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - ステータス効果一覧 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_tab.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_table.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/popover.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
  table.my-custom th:nth-child(1) {
    width: 35% !important;
  }
  table.my-custom td {
    background-color: #f7f7f7;
  }
  #popover::backdrop {
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(2px);
  }
  .status-detail-button {
    margin-right: 5px;
  }
</style>
</head>
<body>
<!-- ヘッダー -->
<div id="header">
<?php include "parts/header.html" ?>
</div>
<!-- / ヘッダー -->
<!-- メイン画像 -->
<div id="mainBanner" class="subImg">
	<div class="inner">
		<img src="images/sub_image_status_effects.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>SWGoH ステータス効果一覧</h2>
			<h3>バフ（強化）、デバフ（弱体）の一覧</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
<!-- コンテンツ -->
	<section id="status-effects">

		<section class="content">

      <nav class="swgoh-tab-nav">
				<ul class="swgoh-tab-nav">
					<li id="buff-tab">バフ</li>
					<li id="debuff-tab">デバフ</li>
					<li id="others-tab">その他</li>
				</ul>
			</nav>
				
			<div id="buff-div" class="targetDiv">
				<table class="my-custom">
          <thead>
          <tr>
						<th>ステータス名</th><th>ステータス効果</th>
					</tr>
          </thead>
					<tbody>
          <tr>
						<td class="status-name">規律</td>
						<td class="status-effect">
            この効果発生中のユニットの攻撃はカウンターされず、プロテクションを無効化する。<br>
            時間経過プロテクションのスタックを得るたび、2ターンの時間経過回復のスタックも得る。
            </td>
					</tr>
          </tbody>
				</table>
      </div>

      <div id="debuff-div" class="targetDiv" style="display: none;">
				<table class="my-custom">
          <thead>
          <tr>
						<th>ステータス名</th><th>ステータス効果</th>
					</tr>
          </thead>
					<tbody>
          <tr>

					</tr>
          </tbody>
				</table>
      </div>

      <div id="others-div" class="targetDiv" style="display: none;">
				<table class="my-custom">
          <thead>
          <tr>
						<th>ステータス名</th><th>ステータス効果</th>
					</tr>
          </thead>
					<tbody>
          <tr>

					</tr>
          </tbody>
				</table>
      </div>

		</section>
    
	</section>
	<!-- / コンテンツ -->
  
</div>
<!-- / WRAPPER -->

<!-- フッター -->
<div id="footer">
	<?php include "parts/footer.html" ?>
</div>
<!-- / フッター -->

<script src="js/common.js"></script>
<script src="js/modalManager.js"></script>
<script>
	const page = window.location.pathname.split("/").pop();
	changeActivePage(page);
  
  const STATUS_TYPES = ["DEBUFF", "BUFF", "OTHERS"];

  fetch("api/status_effects.php", {
    method: "GET",
    headers: { "Content-Type": "application/json" }
  })
  .then(response =>  response.text())
  .then(result => {
    const data = JSON.parse(result);
    const STATUS_EFFECTS = {"DEBUFF": [], "BUFF": [], "OTHERS": []};
    for (i in data) {
      const type = data[i]["type"];
      STATUS_EFFECTS[STATUS_TYPES[type]].push(data[i]);
    }

    createStatusTable(STATUS_EFFECTS);
  })
  .catch(error => {
    console.error("Error: ", error);
  });

  function createStatusTable(statusEffects) {
    const tBodyBuff = document.querySelector("#buff-div table tbody");
    tBodyBuff.removeChild(tBodyBuff.querySelector("tr"));
    const tBodyDebuff = document.querySelector("#debuff-div table tbody");
    const tBodyOthers = document.querySelector("#others-div table tbody");

    for (let i in statusEffects["BUFF"]) {
      tBodyBuff.appendChild(createTableRow(statusEffects["BUFF"][i]));
    }
    for (let i in statusEffects["DEBUFF"]) {
      tBodyDebuff.appendChild(createTableRow(statusEffects["DEBUFF"][i]));
    }
    for (let i in statusEffects["OTHERS"]) {
      tBodyOthers.appendChild(createTableRow(statusEffects["OTHERS"][i]));
    }
  }

  function createTableRow(statusEffects) {
    const tr = document.createElement("tr");

    const tdStatusName = document.createElement("td");
    const span = document.createElement("span");
    span.textContent = statusEffects["statusname"];
    
    if (statusEffects["type"] != 2) { // Type 2: その他
      const modalButton = document.createElement("button");
      modalButton.setAttribute("type", "button");
      modalButton.setAttribute("class", "status-detail-button");
      modalButton.textContent = "詳細";
      modalButton.addEventListener("click", function(e) {
        modalManager.setupModal(statusEffects["statusname"], true);
      });
      tdStatusName.appendChild(modalButton);
    }
    
    tdStatusName.appendChild(span);

    const tdDescription = document.createElement("td");
    tdDescription.textContent = statusEffects["description"];

    tr.appendChild(tdStatusName);
    tr.appendChild(tdDescription);

    return tr;
  }
</script>
<script>
  const divsObj = {
    "buff-tab": "buff-div",
    "debuff-tab": "debuff-div",
    "others-tab": "others-div",
  }
  const tabs = document.querySelectorAll("ul.swgoh-tab-nav li");
  tabs.forEach(function(tab) {
    tab.addEventListener("click", function() {
      toggleDisplay(tab.id);
    })
  });
  
  function toggleDisplay(tabId) {
    const tabs = document.querySelectorAll("ul.swgoh-tab-nav li");
    tabs.forEach(function(tab) {
      if (tab.id == tabId) {
        document.querySelector("#" + tab.id).style.fontWeight = "bolder";
        document.querySelector("#" + tab.id).style.backgroundColor = "#98c457";
        document.querySelector("#" + tab.id).style.color = "black";
      } else {
        document.querySelector("#" + tab.id).style.fontWeight = "normal";
        document.querySelector("#" + tab.id).style.backgroundColor = "#2b5f2a";
        document.querySelector("#" + tab.id).style.color = "white";
      }
    });
    
    const divs = document.querySelectorAll(".targetDiv");
    for (let key in divsObj) {
      const divId = divsObj[tabId];
      
      divs.forEach(function(div) {
        if (div.id == divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      });
    }
  }
</script>
</body>
</html>