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
<meta name="description" content="SWGoH ChipTips - お問い合わせ | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。">
<meta name="keywords" content="">
<title>SWGoH ChipTips - お問い合わせ | スター・ウォーズ／銀河の英雄(SWGoH)の情報サイトです。ゲームに役立つDiscord Bot「JJ-8」も開発しています。</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_table.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

/*body { background:rgb(30,30,40); }*/
form {
	background:rgb(30,30,40);
	padding: 5px;
	max-width:420px;
	margin:50px auto;
	margin-top: 0px;
}

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 16px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #2b5f2a;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #00ff00; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

button[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#2b5f2a;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:22px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
/* [type="submit"]:hover { background:#CC4949; } */
button[type="submit"]:hover {
	/* background:#CC4949; */
	text-shadow: 0 0 10px #fff,0 0 15px #fff;
}
#error-message, #insert-error {
	color: #ff7f50;
}
#insert-success {
	font-size: 20px;
	color: #00ff7f;
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
		<img src="images/sub_image_contact.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>ChipTips お問い合わせフォーム</h2>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
<!-- コンテンツ -->
	<section>

			<h3 class="heading" style="text-align:center">お問い合わせフォーム</h3>
			<!-- <div style="text-align: center;">
				<p id="insert-error"></p>
				<p id="insert-success"></p>
			</div> -->

			<form action="/swgoh/api/contact.php" method="post" id="contact-form" name="contact-form">
				<p id="insert-error"></p>
				<p id="insert-success"></p>
				<p style="color:#f7f7f7">※任意</p>
				<input id="username" name="username" type="text" class="feedback-input" placeholder="Name" />
				<p style="color:#f7f7f7">※返信が必要な場合メールアドレスor同盟コード</p>  
				<input id="email" name="email" type="text" class="feedback-input" placeholder="Email or Ally code" />
				<p id="error-message">※必須</p>
				<textarea id="inquiry" name="inquiry" class="feedback-input" placeholder="Message"></textarea>
				<!-- <input type="submit" value="SUBMIT"/> -->
				<button id="submit" type="submit">SUBMIT</button>
			</form>
    
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

	document.querySelector("#contact-form").addEventListener("submit", function(e) {
		resetMessages();
		e.preventDefault();

		const username = document.querySelector("#username").value;
		const email = document.querySelector("#email").value;
		const inquiry = document.querySelector("#inquiry").value;

		if (inquiry == "") {
			document.querySelector("#error-message").textContent = "問い合わせ内容が空欄です。";
			return;
		}
		const formData = new FormData();
		formData.append("username", username); 
		formData.append("email", email);
		formData.append("inquiry", inquiry);

		fetchContact(formData);
	});

	function fetchContact(formData) {
		fetch("api/contact.php", {
			method: "POST",
			body: formData,
		})
		.then(response =>  response.text())
		.then(result => {
			const data = JSON.parse(result);
			if (data.hasError) {
				document.querySelector("#insert-error").textContent = "問い合わせ処理でエラーが発生しました。";
				return;
			}
			document.querySelector("#insert-success").textContent = "お問い合わせありがとうございます。";
			resetForm();
		})
		.catch(error => {
			console.error("Error: ", error);
		});
	}

	function resetMessages() {
		document.querySelector("#error-message").textContent = "※必須";
		document.querySelector("#insert-error").textContent = "";
		document.querySelector("#insert-success").textContent = "";
	}

	function resetForm() {
		document.querySelector("#username").value = "";
		document.querySelector("#email").value = "";
		document.querySelector("#inquiry").value = "";
	}
</script>
</body>
</html>