<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - 公式フォーラム・ニュース | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - テリトリーバトル | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
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
	dl {
		background: rgba(255, 255, 255, 0.5) !important;
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
		<img src="images/sub_image_rote_tb.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>RotE TB</h2>
			<h3>
			テリトリーバトル「帝国の台頭」</h3>
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
				GC 410 <span class="planet">ジオノーシス</span>：
				<span class="enemy">分離主義者</span><br>
				<span class="bonus-alignment">ジャワ</span>のボーナス
				<!-- <p class="readmore">&raquo; 詳細を確認する</p> -->
			</h3>
			<article class="gc">
				<dl>
					<dt>偉業</dt>
					<dd>フルチーム：ジャワ<br>
					ジャワのフルチームでバトルをクリアする
					</dd>
					<dd>しびれる戦術<br>
					30回スタンさせてバトルをクリアする
					</dd>
					<dd>サーマル・デトネーターを持ってるぞ！<br>
					サーマル・デトネーターを40回発生させてバトルをクリアする
					</dd>
				</dl>
				<p>※ レベルクリアの偉業は記載対象から除外しています。</p>
				<hr>
				<dl>
					<dt>クリア編成</dt>
					<dd>フルチーム：ジャワ<br>
					クリアレベルVIでした。<br>
					このメンツ ↓ では到底Xは無理というものです。
					<img src="images/jawas.webp" width="100%" alt="">
					</dd>
					<dd>しびれる戦術<br>
					レベルX：JML (R7)、JKL (R7)、アイラ (R3)、白レヴァン (R7)、隠者 (R5)
					</dd>
					<dd>サーマル・デトネーターを持ってるぞ！<br>
					レベルIX：JML (R7)、ワット (R7)、隠者 (R5)、ジャワ・エンジニア (G12)、ジャワ・スカベンジャー (G12)
					</dd>
					<dd>最終結果：金箱
						<img src="images/gc20240907.webp" width="100%" alt="GC結果20240907">
					</dd>
				</dl>
			</article>
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