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
<meta name="description" content="SWGoH ChipTips - スター・ウォーズ用語ピックアップ | スター・ウォーズの用語をピックアップ解説しています。">
<!-- <meta name="keywords" content=""> -->
<title>SWGoH ChipTips - スター・ウォーズ用語ピックアップ</title>
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
	.content dl {
		display: flex;
		flex-wrap: wrap;
	}
	.content dt {
		background-color: #2b5f2a;
		color: #f7f7f7;
		padding: 5px 10px;
		min-width: 80px;
		text-align: center;
		border-bottom: 1px solid #f7f7f7;
	}
	.content dd {
		min-width: 200px;
		padding: 5px 10px;
		border-bottom: 1px solid #f7f7f7;
	}
	.content dl.image-area {
		margin-top: 10px;
	}
	.image-area dt {
		background-color: inherit;
		color: #f7f7f7;
		padding: 5px;
		min-width: 200px;
		text-align: center;
		border-bottom: none;
	}
	.content dd {
		min-width: 200px;
		padding: 5px 10px;
		border-bottom: none;
	}
	.dict ul {
		display: flex;
		flex-wrap: wrap;
	}
	.dict ul li {
		margin-right: 5px;
	}
	button.ws-word {
		margin-bottom: 5px;
	}
	.pickup-word .more-info a {
		font-weight: bold;
	}
	/* スマートフォン 横(ポートレート) */
	@media only screen and (max-width:640px){
		.content dt {
			width: 100%;
		}
		.content dd {
			width: 350px;
		}
	}

	/* スマートフォン 縦(ポートレート) */
	@media only screen and (max-width:480px){
		.content dt {
			width: 100%;
		}
		.content dd {
			width: 350px;
		}
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
		<img src="images/sub_image_sw_words.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>スター・ウォーズ用語ピックアップ</h2>
			<h3>Pickup Star Wars Words</h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
	<!-- コンテンツ -->
	<section>

		<section class="content">
			<h3 class="heading">
				スター・ウォーズの用語ピックアップ
			</h3>

			<p>このページでは管理人が気になる用語をピックアップし、定期的に更新していきます。<br>
				時が経つにつれ用語の数は増えていき、いずれは巨大な用語データベースに... という構想です。
			</p>
			<p>
				アクセスのたび、ランダムにピックアップしたキャラクター名あるいは用語が表示されます。<br>
				「登録されている用語」には各用語のボタンが用意されており、クリックすることで検索も可能です。
			</p>
		</section>
		
		<section class="content pickup-word">
			<h3 class="heading">
			</h3>
			<dl>
				<dt>読み仮名</dt>
				<dd class="word-kana"></dd>
			</dl>
			<dl>
				<dt>英語表記</dt>
				<dd class="word-en"></dd>
			</dl>
			<dl>
				<dt>カテゴリ</dt>
				<dd class="category"></dd>
			</dl>
			<dl>
				<dt>用語意味</dt>
				<dd class="meanings"></dd>
			</dl>
			<p class="more-info">
				<a href="" target="_blank">&raquo; Wookieepediaでさらに詳しく</a>
				<span class="caution"> (※扱われていない場合もあります。)</span>
			</p>
		</section>

		<section class="content dict">
			<h3 class="heading">
				登録されている用語
			</h3>
			<ul>

			</ul>
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

	getWords();
	async function getWords() {
		let words = [];

		await fetch("api/star_wars_words.php", {
			method: "GET",
			headers: { "Content-Type": "application/json" }
		})
		.then(response =>  response.text())
		.then(result => {
			const data = JSON.parse(result);
			for (i in data) {
				const row = data[i];
				const obj = {
					"wordJp": row["wordJp"],
					"wordKana": row["wordKana"],
					"wordEn": row["wordEn"],
					"meanings": row["meanings"],
					"category": row["category"],
				};
				words.push(obj);
			}
			createDictionary(words);
		})
		.catch(error => {
			console.error("Error: ", error);
		});
	}
	
	async function createDictionary(words) {
		// random
		let random = Math.floor(Math.random() * words.length);
		pickupWord(words[random]);
		
		// 辞書索引
		const ul = document.querySelector("section.dict ul");
		for (let i = 0; i < words.length; i ++) {
			const li = document.createElement("li");
			const button = document.createElement("button");
			button.className = "ws-word";
			button.style.minWidth = "80px";
			button.textContent = words[i]["wordJp"];
			button.addEventListener("click", function(e) {
				const params = { "wordJp": e.target.textContent };
				const query = new URLSearchParams(params);
				fetch("api/star_wars_words.php?" + query, {
					method: "GET",
				})
				.then(response =>  response.text())
				.then(result => {
					const data = JSON.parse(result);
					pickupWord(data[0]);
				})
				.catch(error => {
					console.error("Error: ", error);
				});
			});
			li.appendChild(button);
			ul.appendChild(li);
		}
	}

	async function pickupWord(word) {
		document.querySelector(".pickup-word h3").textContent = word["wordJp"];
		document.querySelector(".pickup-word .word-kana").textContent = word["wordKana"];
		document.querySelector(".pickup-word .word-en").textContent = word["wordEn"];
		document.querySelector(".pickup-word .category").textContent = word["category"];
		document.querySelector(".pickup-word .meanings").textContent = word["meanings"];

		const wordForURL = encodeURIComponent(word["wordJp"]);
		const wikiURL = `https://starwars.fandom.com/ja/wiki/${wordForURL}`;
		// const anchor = document.createElement("a");
		const anchor = document.querySelector(".more-info a");
		anchor.href = wikiURL;
		anchor.classList.add("explicitly");
		// anchor.setAttribute("target", "_blank");
		// anchor.textContent = ` \u00bb Wookieepediaでさらに詳しく `;	// &raquo; をコードでセットする \u00bb
		// document.querySelector(".pickup-word .more-info").appendChild(anchor);
	}
</script>
</body>
</html>