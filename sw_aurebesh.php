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
<meta name="description" content="SWGoH ChipTips - オーラベッシュの紹介 | スター・ウォーズ銀河で使用される標準文字「オーラベッシュ」の対応表です。">
<!-- <meta name="keywords" content=""> -->
<title>SWGoH ChipTips - オーラベッシュの紹介 | スター・ウォーズ銀河で使用される標準文字「オーラベッシュ」の対応表です。</title>
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
	.content h4 {
		font-weight: bold;
		font-size: 16px;
		margin: 10px 0;
		padding: 5px;
		border-top: 1px solid #f7f7f7;
		border-bottom: 1px solid #f7f7f7;
	}
	.my-custom td, .my-custom th {
		text-align: center;
	}
	@font-face {
		font-family: "aurebesh"; /*任意のフォントファミリー名でOK*/
		src: url("./fonts/Aurebesh Bold.ttf") format("truetype"); /*fontがあるパスを書いて、formatを指定*/
		font-display: swap;
	}
	.aurebesh {
		font-family: "aurebesh";
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
		<img src="images/sub_image_aurebesh.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>銀河標準文字「オーラベッシュ」</h2>
			<h3>
				Aurebesh</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
<!-- コンテンツ -->
<section>
	<section class="content">
		<h3 class="heading">
		オーラベッシュの紹介
		</h3>
		<h4>■ オーラベッシュとは</h4>
		<p>私たちの銀河（地球）と同様に、スター・ウォーズ銀河にも様々な言語と文字が存在します。</p>
		<p>オーラベッシュ (Aurabesh) とは、銀河標準言語 (Galactic Basic Standard) で使用される文字のことです。</p>
		<p>他にも多種多様な言語と文字がありますが、このページでは銀河標準言語の文字であるオーラベッシュとアルファベットの対応を表形式で紹介しています。</p>
		<p>ちなみに、表示しているオーラベッシュは、フォントをダウンロードして使用しています。<br>
		オーラベッシュのフォントを自分でも使ってみたい！という方は
		<a href="https://fontmeme.com/jfont/aurebesh-font/#google_vignette" target="_blank" class="explicitly">こちらのサイト</a>
		からダウンロード可能です。</p>
	</section>

	<section class="content">
		<h3 class="heading">
		オーラベッシュ／アルファベット対応表
		</h3>
    
		<table class="my-custom">
			<thead>
				<tr>
					<th>Aurebesh</th><th>Alphabet</th><th>Spelling</th><th>Reading</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
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

	const AUREBESH = [
		{letter: "a", spelling: "Aurek", read: "オーレック"},
		{letter: "b", spelling: "Besh", read: "ベッシュ"},
		{letter: "c", spelling: "Cresh", read: "クレシュ"},
		{letter: "d", spelling: "Dorn", read: "ドーン"},
		{letter: "e", spelling: "Esk", read: "エスク"},
		{letter: "f", spelling: "Forn", read: "フォーン"},
		{letter: "g", spelling: "Grek", read: "グレク"},
		{letter: "h", spelling: "Herf", read: "ハーフ(ヘルフ)"},
		{letter: "i", spelling: "Isk", read: "イスク"},
		{letter: "j", spelling: "Jenth", read: "ジェンス"},
		{letter: "k", spelling: "Krill", read: "クリル"},
		{letter: "l", spelling: "Leth", read: "レス"},
		{letter: "m", spelling: "Mern", read: "マーン(メルン)"},
		{letter: "n", spelling: "Nern", read: "ナーン(ネルン)"},
		{letter: "o", spelling: "Osk", read: "オスク"},
		{letter: "p", spelling: "Peth", read: "ぺス"},
		{letter: "q", spelling: "Qek", read: "ケク"},
		{letter: "r", spelling: "Resh", read: "レッシュ"},
		{letter: "s", spelling: "Senth", read: "センス"},
		{letter: "t", spelling: "Trill", read: "トゥリル"},
		{letter: "u", spelling: "Usk", read: "ウスク"},
		{letter: "v", spelling: "Vev", read: "ヴェヴ"},
		{letter: "w", spelling: "Wesk", read: "ウェスク"},
		{letter: "x", spelling: "Xesh", read: "ゼシュ"},
		{letter: "y", spelling: "Yirt", read: "ヤート"},
		{letter: "z", spelling: "Zerek", read: "ゼレク"},
		{letter: "ch", spelling: "Cherek", read: "チェレク"},
		{letter: "ae", spelling: "Enth", read: "エンス"},
		{letter: "eo", spelling: "Onith", read: "オニス"},
		{letter: "kh", spelling: "Krenth", read: "クレンス"},
		{letter: "ng", spelling: "Nen", read: "ネン"},
		{letter: "oo", spelling: "Orenth", read: "オレンス"},
		{letter: "sh", spelling: "Shen", read: "シェン"},
		{letter: "th", spelling: "Tresh", read: "トゥレシュ"},
	];

	const tbody = document.querySelector("table.my-custom tbody");
	for (item of AUREBESH) {
		const tr = document.createElement("tr");
		tbody.appendChild(tr);
		
		let td = document.createElement("td");
		td.setAttribute("class", "aurebesh");
		td.textContent = item.letter;
		tr.appendChild(td);

		td = document.createElement("td");
		td.textContent = item.letter;
		tr.appendChild(td);

		td = document.createElement("td");
		td.textContent = item.spelling;
		tr.appendChild(td);

		td = document.createElement("td");
		td.textContent = item.read;
		tr.appendChild(td);
	}
</script>
</body>
</html>