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
<meta name="description" content="SWGoH ChipTips - 外部リンク集 | 当サイトがお世話になっているサイトへのリンクをまとめています。">
<!-- <meta name="keywords" content=""> -->
<title>SWGoH ChipTips - 外部リンク集 | 当サイトがお世話になっているサイトへのリンクをまとめています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
	section.content {
		margin-bottom: 40px;
	}
	.content div {
		text-align: center;
		margin-bottom: 10px;
	}
	.content div.gg {
		background: #333;
		width:80%;
		margin:0 auto 10px auto;
		border:5px solid #f7f7f7;
	}
	.content ul {
		list-style-type: disc;
		margin-left: 30px;
		margin-bottom: 10px;
	}
	.content dl {
		display: flex;
		flex-wrap: wrap;
		border: 1px solid #f7f7f7;
		border-radius: 5px;
		padding: 10px;
	}
	.content dt {
		width: 340px;
	}
	.content dt.image-container {
		text-align: center;
	}
	.content dl dd {
		padding: 10px;
	}
	.swgoh-nav {
		margin-top: 10px;
	}
	.swgoh-nav ul {
		list-style-type: none;
		margin-left: 20px;
		margin-bottom: 10px;
	}
	/* .content h4 {
		font-weight: bold;
		font-size: 16px;
		margin: 5px 0;
	} */
</style>
</head>
<body>
<!-- ヘッダー -->
<div id="header">
<?php include "parts/header.html" ?>
</div>

<!-- メイン画像 -->
<div id="mainBanner" class="subImg">
	<div class="inner">
		<img src="images/sub_image_external_links.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>お世話になっているウェブサイト</h2>
			<h3>Useful External Links</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
	<!-- コンテンツ -->
	<section>
		
		<section class="content">
			<h3 class="heading">
				日本語版 EA公式フォーラム
			</h3>
			<p>以下の画像からジャンプできます。↓</p>
			<div>
			<a href="https://www.ea.com/ja-jp/games/starwars/galaxy-of-heroes/news" target="_blank">
				<img src="images/forum_jp.webp" width="90%" class="frame" alt="日本語版EA公式フォーラムイメージ">
			</a>
			</div>
			
			<p>新たにリリースされたユニットのスキル公開や、カレンダープレビューは特に有用です。</p>
			<p>以前に比べて更新が早くなっており、大変お世話になっているサイトです。</p>
		</section>

		<section class="content">
			<h3 class="heading">
				本家英語版 公式フォーラム
			</h3>
			<p>以下の画像からジャンプできます。↓</p>
			<div>
			<a href="https://forums.ea.com/category/star-wars-galaxy-of-heroes-en" target="_blank">
				<img src="images/forum_en.webp" width="90%" class="frame" alt="EA公式フォーラムイメージ">
			</a>
			</div>
			
			<p>
				ゲームアップデート情報や今後の予定 (Road Ahead) などの最新ニュースは、
				こちらの本家英語版フォーラムで確認しています。
			</p>
		</section>

		<section class="content">
			<h3 class="heading">
				swgoh.gg
			</h3>
			<p>以下の画像からジャンプできます。↓</p>
			<div class="gg">
			<a href="https://swgoh.gg/" target="_blank">
				<img src="https://assets.swgoh.gg/files/site/logo-v2.2d877dcb173c5aa4f0f1.webp" width="100%" alt="swgoh.ggのアイコン">
			</a>
			</div>
			
			<p>
				SWGoHプレイヤーであればもはや知らない人はいないのでは、というほどの超有名サイトです。
			</p>
			<p>中でも特に GAC (グランド・リーナ・チャンピオンシップ) Counters
				の機能は、すでに多くの方が使われているのではないでしょうか。<br>
				もちろん私も愛用しております。
			</p>
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
<script>
	const page = window.location.pathname.split("/").pop();
	changeActivePage(page);
</script>
</body>
</html>