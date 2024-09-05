<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - 公式フォーラム・ニュース | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - 銀河チャレンジ | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
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
	/* .official-forum {
		margin-top: 0;
		width: 100%;
		background-color: #f7f7f7;
		padding-top: 10px;
	}
	.official-forum div {
		padding: 15px;
	} */
	article.closed {
		display: none;
	}
	/* .lede ul {
		list-style-type: disc;
		margin-left: 30px;
		margin-bottom: 10px;
	} */
	dl {
		background: rgba(255, 255, 255, 0.5) !important;
		/* background-color: #f7f7f7; */
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
		<img src="images/sub_image_gc.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>銀河チャレンジ攻略</h2>
			<h3>
				SWGoH Galactic Challenge</h3>
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
				GC 412 <span class="planet">ネヴァロ</span>：
				<span class="enemy">ならず者</span><br>
				<span class="bonus-alignment">レジスタンス</span>のボーナス
				<!-- <p class="readmore">&raquo; 詳細を確認する</p> -->
			</h3>
			<article class="gc">
				<dl>
					<dt>偉業</dt>
					<dd>フルチーム：レジスタンス<br>
					レジスタンスのフルチームでバトルをクリアする
					</dd>
					<dd>爪痕を残す<br>
					攻撃力上昇を20回得てバトルをクリアする
					</dd>
					<dd>無防備<br>
					チームにタンクを使用せずにバトルに勝利する
					</dd>
				</dl>
				<p>※ レベルクリアの偉業は記載対象から除外しています。</p>
				<hr>
				<dl>
					<dt>クリア編成</dt>
					<dd></dd>
				</dl>
			</article>
		</section>

		<section class="content">
			<h3 class="heading">
				次回の銀河チャレンジ【予告】
			</h3>
			<article class="gc">
				<dl>
					<dt>GC 413 <span class="planet">イラム</span>：
					<span class="enemy">レジスタンス</span><br>
					<span class="bonus-alignment">ファースト・オーダー</span>のボーナス
					</dt>
					<dd>敵情報<br>
					<ul>
						<li>フィン</li>
						<li>ゾリ・ブリス</li>
						<li>レジスタンスの英雄フィン</li>
						<li>レジスタンスの英雄ポー</li>
						<li>ポー・ダメロン</li>
					</ul>
					</dd>
					<dd>偉業<br>
					<ul>
						<li>ステルスを10回得てバトルをクリアする</li>
						<li>チームにタンクを使用せずにバトルに勝利する</li>
						<li>ファースト・オーダーのフルチームでバトルをクリアする</li>
					</ul>
					</dd>
				</dl>
				<p>※ レベルクリアの偉業は記載対象から除外しています。</p>
			</article>
		</section>

		<!-- <?php //include "history_gc/gc_2024.html" ?> -->
    
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
				.querySelector("article.gc")
				.classList.remove("closed");
		});
	});
</script>
</body>
</html>