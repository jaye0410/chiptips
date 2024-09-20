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
<meta name="description" content="SWGoH ChipTips - スター・ウォーズ歴史年表 | スター・ウォーズの正史・非正史の歴史を年表形式でまとめています。">
<!-- <meta name="keywords" content=""> -->
<title>SWGoH ChipTips - スター・ウォーズ歴史年表</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
.timeline {
	width: 96%;
	max-width: 940px;
	margin: 28px auto;
	border: 1px solid #eeeeee;
	background-color: #2b5f2a;
}

.timeline-list {
	padding: 40px 0;
}

.timeline-list-item {
	display: flex;
	line-height: 1.5;
	font-size: 16px;
	color: #f7f7f7;
}

.timeline-list-item .year {
	width: 20%;
	text-align: right;
	/*padding: 0 0 0 20px;*/
	color: #f7f7f7;
	font-weight: bold;
	margin-right: 30px;
	padding-left: 0;
}

.timeline-list-item .content {
	position: relative;
	width: 80%;
	padding: 0 20px 60px 30px;
	border-left: 1px solid #aaaaaa;
}

.timeline-list-item .content::before {
	content: "";
	position: absolute;
	top: 0;
	left: -10px;
	width: 20px;
	height: 20px;
	background-color: #ff7f50;/* 00c2bc */
	border-radius: 10px;
}
.timeline-list h3 {
	border-top: 2px solid #ff7f50;
	border-bottom: 2px solid #ff7f50;
	padding: 5px 0;
	margin-bottom: 5px;
	font-weight: bold;
}
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
		<img src="images/sub_image_timeline.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>スター・ウォーズ歴史年表</h2>
			<h3>Star Wars Timeline</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
	<!-- コンテンツ -->
	<section class="timeline">
		
		<ul class="timeline-list">
			<li class="timeline-list-item">
				<div class="year">25,783 BBY</div>
				<div class="content"><h3>ジェダイ・オーダーの設立</h3>
				ヤヴィンの戦いから遡ること25,000年以上前の太古の昔、ディープコア領域の惑星タイソンで、ジェダイ・オーダーは設立されたと言われている。
				当時タイソンでは、ライトサイドとダークサイド (古代ではそれぞれ「アシュラ」、「ボガン」と呼ばれていた) の対立によりフォース戦争が勃発。
				その戦いの中で最初のジェダイが出現し、ジェダイ・オーダーの前身となる組織を発足したとされている。<br>
				その組織に加盟する際の儀式 (ジェダイ・フォージ) がライトセイバーの発明をもたらすこととなったため、
				ライトセイバーの原型が誕生したもこの年代であると言える。
				</div>
			</li>
			<li class="timeline-list-item">
				<div class="year">5,000 BBY</div>
				<div class="content"><h3>ハイパースペース大戦 (Great Hyperspace War)</h3>
				スター・ウォーズの歴史はここから始めるのが適切でしょう。
				</div>
			</li>
			<li class="timeline-list-item">
				<div class="year">2016年02月</div>
				<div class="content">ダミーテキストダミーテキストダミーテキスト</div>
			</li>
    </ul>
    
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