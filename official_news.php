<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - 公式フォーラム・ニュース | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - 公式フォーラム・ニュース | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_table.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
	section.content {
		margin-bottom: 40px;
	}
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
			<h2>SWGoH お知らせ</h2>
			<h3>
				公式フォーラムの和訳、および当サイトからの最新ニュース</h3>
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
				アップデート情報 2024年8月28日
				<!-- <p class="readmore">&raquo; 詳細を確認する</p> -->
			</h3>
			<article class="official-forum">
				<dl>
					<dt>ニュース</dt>
					<dd>エズラ・ブリッジャー（流浪）の<a class="explicitly" href="/2024/08/next-conquest-reward-ezra-bridger-exile.html" target="_blank">スキル公開</a></dd>
					<dd><a class="explicitly" href="https://forums.ea.com/blog/swgoh-game-info-hub-en/datacron-set-17/4960330" target="_blank">データクロン セット17</a></dd>
					<dd>ナイト・トルーパーのかけらがダークサイド8-Cハードで入手可能になりました。エンボと入れ替わります。エンボはカンティーナバトルショップで入手できます。</dd>
					<dd>デス・トルーパー（ペリディア）がクロミウムガチャとアイテムショップで入手可能になりました。</dd>
				</dl>
				<hr>
				<dl>
					<dt>修正</dt>
					<dd>ダース・レヴァンがリーダーの場合に、サヴァージが自分自身に暗闇を付与してしまう問題を修正しました。</dd>
					<dd>ナブーレイドで、B1が余分なスタックを獲得できてしまうバグを修正しました。</dd>
					<dd>エンフィス・ネストが侍女（おとり）とモフ・ギデオン（ダークトルーパー）の挑発を解除できる問題を修正しました。</dd>
					<dd>オビ＝ワン（パダワン）のユニークスキル「気高き自制心」のテキストを明確にし、マスター・クワイ＝ガンが自分のターン中にスキルを使用したときのみアシストすることを明記しました。
						これはキャラクターの既存の機能に合わせたテキストの更新です。</dd>
					<dd>キャプテン・イノックのリーダースキルで、有効性上昇にパーセンテージ記号が欠けていたため追加しました。
						これはテキストの修正であり、メカニックは変更されていません。</dd>
					<dd>デイリーミッション「配達待ち」実績がすべての出荷購入を追跡していない問題を修正しました。</dd>
					<dd>タコダナの銀河チャレンジでデスマークが正しく適用されない問題を修正しました。</dd>
					<dd>グランドアリーナで、オミクロン済のキャプテン・レックスが他のフェニックスの味方といくつかのステータス上昇を共有していなかった問題を修正しました。
						優秀な彼には非常に珍しいことでしたが、彼とよく話し合い、今後は共有することを約束してくれました。</dd>
				</dl>
				<div>
					<p>
						👉 原文は<a class="explicitly" href="https://forums.ea.com/blog/swgoh-game-info-hub-en/update-828/4960557" target="_blank">こちら</a>
					</p>
				</div>
			</article>
		</section>

		<?php include "news_history/news_2024.html" ?>
    
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