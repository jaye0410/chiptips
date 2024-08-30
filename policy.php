<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - プライバシーポリシー | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - プライバシーポリシー | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_table.css" type="text/css" media="screen">
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
		<img src="images/sub_image_privacy_policy.png" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>ChipTips</h2>
			<h3>プライバシーポリシー・著作権および肖像権・リンク・免責事項</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
<!-- コンテンツ -->
	<section>

			<h3 class="heading" style="text-align:center">お問い合わせフォーム</h3>

			<form action="/swgoh/api/contact.php" method="post" name="contact_form">
				<input name="name" type="text" class="feedback-input" placeholder="Name" />
				<p style="color:#f7f7f7">※ 返信が必要な場合はメールアドレスを入力ください。</p>  
				<input name="email" type="text" class="feedback-input" placeholder="Email" />
				<textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
				<input type="submit" value="SUBMIT"/>
			</form>
    
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
</script>
</body>
</html>