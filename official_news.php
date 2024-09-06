<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N7MHQ5W62P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N7MHQ5W62P');
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - 公式フォーラム・ニュース | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - ニュース・更新情報 | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_table.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
	h3.heading {
		margin-bottom: 0 !important;
	}
	h3.heading p.readmore {
		cursor: pointer;
		text-decoration: underline;
		font-size: 14px;
	}
	.official-forum {
		margin-top: 0;
		width: 100%;
		background-color: #f7f7f7;
		padding-top: 10px;
	}
	.official-forum div {
		padding: 15px;
	}
	article.closed {
		display: none;
	}
	.lede ul {
		list-style-type: disc;
		margin-left: 30px;
		margin-bottom: 10px;
	}
	dl {
		/* background: rgba(255, 255, 255, 0.5) !important; */
		background-color: #f7f7f7;
		/*border-bottom: 1px solid black;*/
		padding: 5px;
	}
	dt {
		font-weight: bold;
		margin-bottom: 5px;
	}
	dt:before {
		white-space: pre-wrap;
		content: "■ "
	}
	dd {
		padding: 5px;
		margin-left: 10px;
		margin-bottom: 5px;
	}
	dd::before {
		white-space: pre-wrap;
		content: "\02022\0020"
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
		<img src="images/sub_image_official_news.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>SWGoH ニュース</h2>
			<h3>
				公式フォーラムのニュース和訳および当サイトの更新情報</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
<!-- コンテンツ -->
	<section>
	<!-- <section id="main"> -->
		<section class="content">
			<h3 class="heading">
				最新ニュース
			</h3>
			<br>
			<article class="lede">
				<p>このページで扱う項目は次のとおりです。</p>
				<ul>
					<li>SWGoH公式フォーラムの和訳</li>
					<li>当サイトの更新情報</li>
					<li>その他のお知らせ</li>
				</ul>
				<p>現在の最新ニュースは、公式フォーラムからのゲームアップデート情報です。</p>
				<p id="forTop">ぜひ ↓ のリンクから詳細を確認してみてください。</p>
			</article>
		</section>

		<section class="content">
			<h3 class="heading">
				アップデート情報 2024年9月4日
				<!-- <p class="readmore">&raquo; 詳細を確認する</p> -->
			</h3>
			<article class="official-forum">
				<dl>
					<dt>ニュース</dt>
					<dd>グレート・マザーの<a href="https://forums.ea.com/blog/swgoh-game-info-hub-en/kit-reveal---great-mothers/4957524" target="_blank">スキル公開および専用データクロンについて</a></dd>
					<dd><a href="https://forums.ea.com/blog/swgoh-game-info-hub-en/star-wars-galaxy-of-heroes-community-update/4957530" target="_blank">スターウォーズ銀河の英雄 コミュニティー・アップデート。</a></dd>
					<dd>コミュニティー・マイルストーン・イベントの報酬が無料ガチャとして利用可能です。</dd>
				</dl>
				<hr>
				<dl>
					<dt>修正</dt>
					<dd>敵チームのソウ・ゲレラのスキル「起爆とラップ設置」は、説明の通りにユニットを戦闘不能にしないよう修正しました。</dd>
					<dd>ボ＝カターン（マンダロア）の「増援が到着」の説明が修正され、アシストの増加がレベル7ではなくレベル8で発生することが明記されました。</dd>
					<dd>ダース・ベイダーが「無慈悲な暴力」を使用した際に、ラダス提督に「めまい」効果が発生しないよう修正しました。</dd>
				</dl>
				<div>
					<p>
						👉 原文は<a class="explicitly" href="https://forums.ea.com/blog/swgoh-game-info-hub-en/update-94/4957527" target="_blank">こちら</a>
					</p>
				</div>
			</article>
		</section>

		<?php include "history_news/news_2024.html" ?>
    
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
<script>
	const page = window.location.pathname.split("/").pop();
	changeActivePage(page);

	const readmoreList = document.querySelectorAll("p.readmore");

	readmoreList.forEach((readmore) => {
		readmore.addEventListener("click", (e) => {
			console.log(e.target.closest("section"));
			e.target.closest("section")
				.querySelector("article.official-forum")
				.classList.remove("closed");
		});
	});

	document.querySelector("#forTop").style.display = 'none';
</script>
</body>
</html>