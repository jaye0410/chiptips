<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
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
<div id="mainBanner" class="mainImg">
	<div class="inner">
		<img src="images/main_image_1.webp" width="940" height="300" alt="ChipTipsオリジナル画像">
    <div class="slogan">
			<h2>SWGoH ChipTips</h2>
			<h3>スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。
				ゲームに役立つDiscord Bot <strong>&quot;JJ-8&quot;</strong> も開発しています。</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
	<p id="last-modified"></p>

	<section class="gridWrapper" id="sub">
		<article class="grid col2">
			<h3>SWGoHの概要</h3>	
			<p>スター・ウォーズ／銀河の英雄（SWGoH）は、スター・ウォーズの壮大な銀河系を舞台にしたロール・プレイング・ゲームです。<br>
				<a href="https://www.ea.com/ja-jp/ea-studios/capital-games" target="_blank">Capital Games</a>によって開発、
				<a href="https://www.ea.com/ja-jp" target="_blank">Electronic Arts</a>よりリリースされており、
				各種スマートフォンおよびPCで楽しむことができます。</p>
			<p>
				映画やアニメシリーズでおなじみのキャラクターはもちろんのこと、
				レジェンズ (非正史) のキャラクターも数多く登場します。
				<br>
				プレイヤーはバラエティに富んだユニットを集め、育成し、戦略的なバトルに挑みます。
			</p>
			<p>
				SWGoHはゲームという枠を超え、
				スター・ウォーズを愛する人々のコミュニケーション・プラットフォームとして機能するとも言えます。
			</p>
			<p class="readmore"><a href="overview.php">&raquo; 詳細を確認する</a></p>
		</article>

		<article class="grid">
			<h3>最新ニュース</h3>
			<div id="official-news-lede">

			</div>
			<p class="readmore"><a href="official_news.php">&raquo; 詳細を確認する</a></p>
		</article>
		
		<article class="grid">
			<h3>基本情報</h3>
			<div id="basic-info-lede">

			</div>
			<p class="readmore"><a href="basic_info.php">&raquo; 詳細を確認する</a></p>
		</article>
		
	</section>

	<!-- 4カラム -->
  <section class="gridWrapper">
		<article class="grid colDark">
			<h3>ユニット解除イベント</h3>
			<p>Coming soon!<br>
			各種イベントで取得できるユニット情報、クリア動画などを掲載するページです。</p>
			<!-- <p class="readmore"><a href="subpage.html">&raquo; 詳細を確認する</a></p> -->
		</article>
		<article class="grid colLight">
			<h3>テリトリー・バトル</h3>
			<p>Coming soon!<br>
			テリトリーバトルの各フェーズでのバトル動画を紹介するページです。</p>
			<!-- <p class="readmore"><a href="subpage.html">&raquo; 詳細を確認する</a></p> -->
		</article>
		<article class="grid colDark">
      <h3>レイド - ナブーの戦い</h3>
			<p>Coming soon!<br>
			レイド「ナブーの戦い」で使用する編成、スコアを紹介するページです。</p>
			<!-- <p class="readmore"><a href="subpage.html">&raquo; 詳細を確認する</a></p> -->
		</article>
    <article class="grid colLight">
			<h3>スターウォーズ</h3>
			<p>Coming soon!<br>
			SWGoH以外のスターウォーズ関連情報を掲載するページです。</p>
			<!-- <p class="readmore"><a href="subpage.html">&raquo; 詳細を確認する</a></p> -->
		</article>
	</section>
	<!-- / 4カラム -->

</div>
<!-- / WRAPPER -->

<!-- フッター -->
<div id="footer">
	<?php include "parts/footer.html" ?>
</div>
<!-- / フッター -->

<script src="js/common.js"></script>
<script>
	const page = window.location.pathname.split("/").pop();
	if (page == "index.php") { page = "" }
	changeActivePage(page);
	
	const lm = getLastModified();
	const str = `Last Update: ${lm["year"]}/${lm["month"]}/${lm["date"]} (${lm["day"]})`;
	document.querySelector("#last-modified").textContent = str;

	loadLede("official_news.php", "#official-news-lede");
	loadLede("basic_info.php", "#basic-info-lede");

	function loadLede(url, targetId) {
		fetch(url, {
			method: "GET",
			// headers: { "Content-Type": "application/json" }
		})
		.then(response =>  response.text())
		.then(result => {
			const dom = new DOMParser().parseFromString(result, "text/html");
			const lede = dom.querySelector("article.lede");
			document.querySelector(targetId).appendChild(lede);
		})
		.catch(error => {
			console.error("Error: ", error);
		});
	}
</script>
</body>
</html>