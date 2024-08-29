<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips -　征服 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
/*
デフォルトBG: #98c457
モスグリーン: #2b5f2a
*/
.targetDiv {
	border: 1px solid black;
  color: white;
	background-color: #2b5f2a;
}
.targetDiv p, .targetDiv img{
	margin: 5px;
}
.targetDiv div {
  margin-bottom: 5px;
}
.targetDiv a {
  color: #fffacd;
  text-decoration: underline;
}
.targetDiv ol {
  list-style-type: decimal;
  padding-left: 30px;
}

nav.swgoh-tab-nav, ul.swgoh-tab-nav {
	display: flex;
	flex-wrap: wrap;
}
ul.swgoh-tab-nav li {
	font-size: 12px;
	width: 64px;
	height: 38px;
	text-align: center;
	line-height: 1.5;
	color: white;
	border: 1px solid black;
	border-radius: 0 7px;
	background: #2b5f2a;
	padding: 5px;
	cursor: pointer;
}
#global-tab {
	font-size: 1em;
	font-weight: bold;
	color: black;
	background: #98c457;
	line-height: 2.5;
}

/* スマートフォン 縦(ポートレート) */
@media only screen and (max-width:480px){
  ul.swgoh-tab-nav li {
    width: 46px;
  }
	#global-tab {
		width:50px;
	}
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
	<section id="main">

		<section class="content conquest">

			<nav class="swgoh-tab-nav">
				<ul class="swgoh-tab-nav">
					<li id="global-tab">Global</li>
					<li id="sec1-tab">Sector<br>1</li>
					<li id="sec2-tab">Sector<br>2</li>
					<li id="sec3-tab">Sector<br>3</li>
					<li id="sec4-tab">Sector<br>4</li>
					<li id="sec5-tab">Sector<br>5</li>
				</ul>
			</nav>
			
			<div id="global-feats" class="targetDiv">
				<h3 class="heading">困難な勝利</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p>黄金のチャレンジパスで敵を250体倒す</p>

				<h3 class="heading">自分で決断することを学べ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>キャプテン・レックスが生存した状態で15回勝利する</p>

				<h3 class="heading">続く道</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>ジェダイ・ナイト・カルで敵を35体倒す</p>

				<h3 class="heading">上には上</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>マスターQGJ（クワイ＝ガン・ジン）とオビ＝ワン（パダワン）が生存した状態で15回勝利する</p>

				<h3 class="heading">こりゃダメだ！</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x1</span>
				<img src="images/data_disk.png" alt="征服データディスク"><span>準備万端</span></div>
				<p>チームに4体以上のグンガンを入れて15回勝利する</p>
				<p>※「生存している」ことは条件になっていないので、SEEにグンガン4体入れてクリアしました。</p>

				<h3 class="heading">成功にまぐれなどない</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>チームに4体以上のグンガンを入れて15回勝利する</p>
				<p>準備万端IのDDは「こりゃダメだ！」の偉業クリアか征服パス購入で入手可能</p>

				<h3 class="heading">後に続け</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>「ブーミング・ボイス」のデータディスク効果で60回アシストを発生させる</p>
				<p>ブーミング・ボイスのDDは「全てわかっている」の偉業クリアか征服パス購入で入手可能</p>

				<h3 class="heading">全てわかっている</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x1</span>
				<img src="images/data_disk.png" alt="征服データディスク"><span>ブーミングボイス</span></div>
				<p>モフ・ギデオン（ダーク・トルーパー）で敵を35体倒す</p>

				<h3 class="heading">王族の到着</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15</span></div>
				<p>ドゥークー伯爵、プリンセス・ニーサ、レイア姫、アミダラ女王、ロイヤル・ガードをチームに入れて3回勝利する<br>
					※「生存している」ことは条件になっていない！</p>
			</div>
			
			<div id="sec1-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">回避行動</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>「回避力上昇」の効果を50回発生させる</p>
				<p>
					<a href="/2024/05/units-that-can-apply-evasion-up-effect-list.html" target="_blank">
						回避力上昇を付与できるユニットを確認
					</a>
				</p>

				<h3 class="heading">今や我々がレジスタンスだ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>レジスタンスのフルチームでバトルに10回勝利する</p>

				<h3 class="heading">一緒の方が強い</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>ライトサイドのマンダロリアンで敵を35体倒す</p>

				<h3 class="heading">可愛いのは見た目だけ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>イウォークで敵を35体倒す</p>

				<h3 class="heading">ミニボス：シア・ジュンダ</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x7<br></span></div>
				<ol>
					<li>スカウト・トルーパーで敵を1体倒す</li>
					<li>ライトサイドのみのチームで勝利する</li>
				</ol><br>

				<h3 class="heading">ラスボス：ダース・ベイダー</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>スローン大提督を生存させた状態で勝利する</li>
					<li>帝国軍のユニットを使用せず勝利する</li>
				</ol><br>
			</div>
			
			<div id="sec2-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">反乱軍アサルト</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>反乱軍ファイターで敵を35体倒す</p>

				<h3 class="heading">無力化攻撃</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>「有効性低下」効果を50回発生させる</p>
				<p>
					<a href="/2024/05/units-that-can-apply-potency-down-effect-list.html" target="_blank">
						有効性低下を付与できるユニットを確認
					</a>
				</p>

				<h3 class="heading">無尽蔵の軍隊</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>帝国軍トルーパーで敵を35体倒す</p>

				<h3 class="heading">全てナイトシスター</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x5<br></span></div>
				<p>ナイトシスターのフルチームでバトルに10回勝利する</p>

				<h3 class="heading">ミニボス：セクター2</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x7<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>

				<h3 class="heading">ラスボス：セクター2</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>
			</div>
			
			<div id="sec3-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">セクター3</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>反乱軍ファイターで敵を35体倒す</p>

				<h3 class="heading">セクター3</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>「有効性低下」効果を50回発生させる</p>
				<p>
					<a href="/2024/05/units-that-can-apply-potency-down-effect-list.html" target="_blank">
						有効性低下を付与できるユニットを確認
					</a>
				</p>

				<h3 class="heading">セクター3</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>帝国軍トルーパーで敵を35体倒す</p>

				<h3 class="heading">セクター3</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>ナイトシスターのフルチームでバトルに10回勝利する</p>

				<h3 class="heading">ミニボス：セクター3</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x7<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>

				<h3 class="heading">ラスボス：セクター3</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x11<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>
			</div>
			
			<div id="sec4-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">セクター4</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>反乱軍ファイターで敵を35体倒す</p>

				<h3 class="heading">セクター4</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>「有効性低下」効果を50回発生させる</p>
				<p>
					<a href="/2024/05/units-that-can-apply-potency-down-effect-list.html" target="_blank">
						有効性低下を付与できるユニットを確認
					</a>
				</p>

				<h3 class="heading">セクター4</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>帝国軍トルーパーで敵を35体倒す</p>

				<h3 class="heading">セクター4</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x10<br></span></div>
				<p>ナイトシスターのフルチームでバトルに10回勝利する</p>

				<h3 class="heading">ミニボス：セクター4</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>

				<h3 class="heading">ラスボス：セクター4</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x11<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>
			</div>
			
			<div id="sec5-feats" class="targetDiv" style="display: none;">
				<h3 class="heading">セクター5</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p>反乱軍ファイターで敵を35体倒す</p>

				<h3 class="heading">セクター5</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p>「有効性低下」効果を50回発生させる</p>
				<p>
					<a href="/2024/05/units-that-can-apply-potency-down-effect-list.html" target="_blank">
						有効性低下を付与できるユニットを確認
					</a>
				</p>

				<h3 class="heading">セクター5</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p>帝国軍トルーパーで敵を35体倒す</p>

				<h3 class="heading">セクター5</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x15<br></span></div>
				<p>ナイトシスターのフルチームでバトルに10回勝利する</p>

				<h3 class="heading">ミニボス：セクター5</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x9<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>

				<h3 class="heading">ラスボス：セクター5</h3>
				<div><img src="images/keycard.png" alt="征服キーカード"><span>x12<br></span></div>
				<ol>
					<li>偉業1</li>
					<li>偉業2</li>
				</ol><br>
			</div>
				
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
		</section>

		<!--
		<section class="content" id="gallery">
			<h3 class="heading">写真ギャラリー</h3>
				<article class="gridWrapper">
					<figure class="grid"><a href="subpage.html"><img src="images/gallery1.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery2.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery3.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery4.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery5.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery6.jpg" width="210" height="210" alt=""></a></figure>
				</article>
		</section>
		-->
    
	</section>
	<!-- / コンテンツ -->

	<aside id="sub">
    <section class="grid">
			<h3>ホームページサンプル</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
		</section>
        
    <section class="grid">
			<h3>革新的な技術</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
    </section>
    
    <section class="grid">
			<h3>ホームページサンプル</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
		</section>
    
    <section class="grid">
			<h3>革新的な技術</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
    </section>
    
	</aside>

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
</script>
</body>
</html>