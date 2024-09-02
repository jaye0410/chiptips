<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - Discord Bot JJ-8 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - Discord Bot JJ-8 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
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
		<img src="images/sub_image_discord_bot.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>SWGoH Status Effects</h2>
			<h3>バフ（強化効果）、デバフ（弱体効果）の一覧です。</h3>
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
						<!-- <td class="status-name">衰退</td>
						<td class="status-effect">
            ヘルススティール -100%。<br>
            敵のターンメーターを減少させるたび、このユニットは追加の固定ダメージを受ける（回避不可、このダメージでは戦闘不能にならない）。<br>
            このユニットのHPが最大まで回復すると、衰退のスタックを全て解除する。
            </td> -->
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
						<!-- <td class="status-name">ダークトルーパー部隊</td>
						<td class="status-effect">
            ダーク・トルーパーは、ベースの最大HPと最大プロテクションの25%分に相当するダーク・トルーパー部隊（以降：部隊）のスタックを4つ持つ。<br>
            最大HPと最大プロテクションの変化を無効化し、部隊のスタックが1つ以上ある限り戦闘不能または破壊されることはない。<br>
            部隊のスタック数が2つ以上ある場合に戦闘不能になった場合、代わりに自身の弱体効果を全て解除し、部隊のスタック数を1減少させ、HPとプロテクションを100%回復させる。<br>
            その時点の部隊のスタック1つにつき防御力が25%上昇する。<br>
            ダーク・トルーパーはクリティカルヒットを受けないが、復活することができない。
            </td> -->
					</tr>
          </tbody>
				</table>
      </div>

      <!-- <div id="popover" popover="manual">
        <button id="close-modal">X</button>
        <p>HTMLのみでモーダルが表示されました</p>
      </div> -->

		</section>
    
	</section>
	<!-- / コンテンツ -->
  
</div>
<!-- / WRAPPER -->

<!-- フッター -->
<div id="footer">
	<div class="inner">
    
		<!-- 3カラム -->
    <section class="gridWrapper">
      
			<article class="grid">
      	<!-- ロゴ -->
				<p class="logo">
					<a href="index.html">SWGoH ChipTips<br />
						<span>－ Let's enjoy another Galaxy. －</span></a>
				</p>
				<!-- / ロゴ -->
			</article>
      
      <article class="grid col3">
      	<ul>
					<li><a href="subpage.html">eco・環境事業</a></li>
					<li><a href="subpage.html">コンピュータ</a></li>
					<li><a href="subpage.html">飲食店事業</a></li>
					<li><a href="subpage.html">ごあいさつ</a></li>
					<li><a href="subpage.html">サービス概要</a></li>
					<li><a href="subpage.html">会社情報</a></li>
					<li><a href="subpage.html">お問い合わせ</a></li>
					<li><a href="subpage.html">サイトマップ</a></li>
				</ul>
      	<p>Copyright(c) 2024 SWGoH ChipTips All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank" rel="nofollow">http://f-tpl.com</a></p>
      </article>
		
    </section>
		<!-- / 3カラム -->
      
	</div>
</div>
<!-- / フッター -->

<script src="js/common.js"></script>
<script>
	const page = window.location.pathname.split("/").pop();
	changeActivePage(page);
  
  const STATUS_TYPES = ["BUFF", "DEBUFF", "OTHERS"];

  fetch("api/status_effects.php", {
    method: "GET",
    headers: { "Content-Type": "application/json" }
  })
  .then(response =>  response.text())
  .then(result => {
    const data = JSON.parse(result);
    const STATUS_EFFECTS = {"BUFF": [], "DEBUFF": [], "OTHERS": []};
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
        modalManager.setupModal(statusEffects["statusname"]);
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