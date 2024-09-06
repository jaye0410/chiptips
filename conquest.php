<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - 征服 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - 征服 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_tab.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/popover.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
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
		<img src="images/sub_image_conquest.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>征服偉業<br>
			Conquest Feats</h2>
			<!--<h3>偉業をクリアして最大報酬を得よう！</h3>-->
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
<!-- コンテンツ -->
	<section id="conquest"><!-- aside入れる際は id="main"に -->

		<section class="content conquest">
			<p>最新開催の征服より、グローバルおよび各セクターの偉業を掲載します。</p>
			<p>各偉業には可能な限り攻略のヒントやオススメ編成候補を表示し、
				偉業にバフ・デバフが指定されている偉業では付与可能なユニットを確認できる仕組みにしています。</p>
			<hr>

			<nav class="swgoh-tab-nav">
				<ul class="swgoh-tab-nav">
					<li id="global-tab">Global</li>
					<li id="sec1-tab">Sec. 1</li>
					<li id="sec2-tab">Sec. 2</li>
					<li id="sec3-tab">Sec. 3</li>
					<li id="sec4-tab">Sec. 4</li>
					<li id="sec5-tab">Sec. 5</li>
				</ul>
			</nav>
				
			<div id="global-feats" class="targetDiv">
				<h3 class="heading">困難な勝利</h3>
				<div><img style="vertical-align:text-bottom;" src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>黄金のチャレンジパスで敵を250体倒す</p>

				<h3 class="heading">連続ブロー</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p><button type="button" class="status-detail-button">よろめき</button>
				の効果を100回発生させる</p>

				<h3 class="heading">ダソミアの魔女</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>ナイト・シスターのフルチームでバトルに20回以上勝利する</p>

				<h3 class="heading">真の帝国</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>インペリアル・レムナントのフルチームでバトルに20回勝利する</p>

				<h3 class="heading">本能に従え</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x1</span>
				<img src="images/data_disk.png" alt="征服データディスク"><span>展開式冷却システム</span></div>
				<p>マスター・クワイ＝ガンが生存した状態で15回勝利する</p>

				<h3 class="heading">こりゃダメだ！</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x1</span>
				<img src="images/data_disk.png" alt="征服データディスク"><span>圧倒的パワー</span></div>
				<p>チームに4体以上のグンガンを入れて15回勝利する</p>
				<p>※「生存している」ことは条件になっていないので、SEEにグンガン4体入れてクリアしました。</p>

				<h3 class="heading">無限のパワー</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>「圧倒的パワー」のデータディスク効果で「圧倒的パワー」を20回得る</p>
				<p>圧倒的パワーのDDは「こりゃダメだ！」の偉業クリアか征服パス購入で入手可能</p>

				<h3 class="heading">制御することを学ばねば</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>「展開式冷却システム」を使ってバトルをクリアする</p>
				<p>展開式冷却システムのDDは「本能に従え」の偉業クリアか征服パス購入で入手可能</p>
			</div>
				
			<div id="sec1-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">消極的アプローチ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p><button type="button" class="status-detail-button">抵抗力低下</button>
				の効果を50回発生させる</p>

				<h3 class="heading">無尽蔵の軍隊</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p><button type="button" class="status-detail-button">減衰</button>
				を50回得る</p>

				<h3 class="heading">闇魔術</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>モーガン・エルズベスが生存した状態で15回勝利する</p>

				<h3 class="heading">これでも食らえ！</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>グンガンで敵を35体倒す</p>

				<h3 class="heading">ミニボス：ジャワ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x7<br></span></div>
				<ol>
					<li>ジオノージアンのフルチームでバトルに勝利する</li>
					<li>ライトサイドのみのチームで勝利する</li>
				</ol><br>

				<h3 class="heading">ラスボス：ダース・マルガス</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>グンガン・ブーマディアを生存させた状態で勝利する</li>
					<li>アミダラ女王で敵を1体倒す</li>
				</ol><br>
			</div>
				
			<div id="sec2-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">不意打ち</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p><button type="button" class="status-detail-button">ボーナスターン</button>
				を50回得る</p>

				<h3 class="heading">カロダンの監督官</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>モーガン・エルズベスで敵を35体倒す</p>

				<h3 class="heading">警戒中</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p><button type="button" class="status-detail-button">警戒</button>
				を20回得る</p>

				<h3 class="heading">ハイパーラプチャー</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p><button type="button" class="status-detail-button">破損</button>
				を50回発生させる</p>

				<h3 class="heading">ミニボス：ハックス将軍</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x7<br></span></div>
				<ol>
					<li>デス・トルーパー（ペリディア）を生存させた状態で勝利する</li>
					<li>二人のクワイ=ガンをチームに入れて勝利する</li>
				</ol><br>

				<h3 class="heading">ラスボス：アイデン・ヴェルシオ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>キャプテン・ターパルスで敵を1体倒す</li>
					<li>ダークサイドのみのチームで勝利する</li>
				</ol><br>
			</div>
				
			<div id="sec3-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">回避行動</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p><button type="button" class="status-detail-button">回避力上昇</button>
				を50回得る</p>

				<h3 class="heading">闇の魔術</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>ナイトシスター・アコライトを生存させてバトルに15回勝利する</p>

				<h3 class="heading">ブルードの戦い</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>ジオノージアンのフルチームでバトルに15回勝利する</p>

				<h3 class="heading">シールド用意</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p><button type="button" class="status-detail-button">仕返し</button>
				を15回得る</p>

				<h3 class="heading">ミニボス：ラダス提督</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x7<br></span></div>
				<ol>
					<li>モーガン・エルズベスを生存させた状態で勝利する</li>
					<li>キャプテン・イノックをチームに入れて勝利する</li>
				</ol><br>

				<h3 class="heading">ラスボス：キャプテン・イノック</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x11<br></span></div>
				<ol>
					<li>アミダラ女王を生存させた状態で勝利する</li>
					<li>サポートユニットを使用せず勝利する</li>
				</ol><br>
			</div>
				
			<div id="sec4-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">抵抗力上昇</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p><button type="button" class="status-detail-button">抵抗力上昇</button>
				を50回得る</p>

				<h3 class="heading">カレラン・ベク</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>チームにカレラン・ベクを入れて15回勝利する</p>

				<h3 class="heading">衰退</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p><button type="button" class="status-detail-button">衰退</button>
				を50回発生させる</p>

				<h3 class="heading">ナイトシスター</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>ナイトシスターのユニットで敵を30体倒す</p>

				<h3 class="heading">ミニボス：タスケン</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>ジャー・ジャー・ビンクスを生存させた状態で勝利する</li>
					<li>銀河共和国のフルチームで勝利する</li>
				</ol><br>

				<h3 class="heading">ラスボス：ダッシュ・レンダー</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x11<br></span></div>
				<ol>
					<li>モフ・ギデオン（ダーク・トルーパー）を生存させた状態で勝利する</li>
					<li>帝国軍を使用せず勝利する</li>
				</ol><br>
			</div>
				
			<div id="sec5-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">精度上昇</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p><button type="button" class="status-detail-button">精度上昇</button>
				を50回得る</p>

				<h3 class="heading">感染</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p><button type="button" class="status-detail-button">感染</button>
				を100回発生させる</p>

				<h3 class="heading">デス・トルーパー（ペリディア）</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p>デス・トルーパー（ペリディア）で敵を25体倒す</p>

				<h3 class="heading">ジオスパイ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p>ジオノージアン・スパイが生存した状態で15回勝利する</p>

				<h3 class="heading">ミニボス：スカイウォーカー将軍</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>オビ＝ワン（パダワン）で敵を1体倒す</li>
					<li>銀河共和国を使用せず勝利する</li>
				</ol><br>

				<h3 class="heading">ラスボス：ジェダイ・ナイトレヴァン</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x12<br></span></div>
				<ol>
					<li>ルーセン・レイエルを生存させた状態で勝利する</li>
					<li>グンガンのフルチームで勝利する</li>
				</ol><br>
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

	const modalButtons = document.querySelectorAll(".status-detail-button");
	modalButtons.forEach(function(button) {
		button.addEventListener("click", function(e) {
			modalManager.setupModal(button.textContent, false);
		});
	});
</script>
<script>
	const divsObj = {
		"global-tab": "global-feats",
		"sec1-tab": "sec1-feats",
		"sec2-tab": "sec2-feats",
		"sec3-tab": "sec3-feats",
		"sec4-tab": "sec4-feats",
		"sec5-tab": "sec5-feats",
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