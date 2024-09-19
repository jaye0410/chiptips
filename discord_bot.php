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
<meta name="description" content="SWGoH ChipTips - Discord Bot JJ-8 | ゲームに役立つDiscord Bot「JJ-8」の詳細ページです。">
<!-- <meta name="keywords" content=""> -->
<title>SWGoH ChipTips - Discord Bot JJ-8</title>
<link rel="icon" href="images/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/custom_table.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<style>
	dl {
		background: rgba(255, 255, 255, 0.5) !important;
		border-bottom: 1px solid black;
		padding: 5px;
		margin-bottom: 5px;
	}
	dt {
		font-weight: bold;
	}
	dd {
		margin-left: 10px;
	}
	dd:before {
		/* white-space: pre-wrap; */
		content: "・"
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
		<img src="images/sub_image_discord_bot.webp" width="940" height="300" alt="Sub image">
    <div class="slogan">
			<h2>SWGoH Discord Bot</h2>
			<h3></h3>
		</div>
	</div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
    
<!-- コンテンツ -->
	<section>
	<!-- <section id="main"> -->
		<section class="content">
			<h3 class="heading">オリジナルDiscord Bot</h3>
			<article>

				<h4>■ Botの名前</h4>
				<p>
				<strong style="font-weight: bold";>J</strong>ayeが開発した
				<strong style="font-weight: bold";>J</strong>apaneseで使える
				<strong style="font-weight: bold";>B</strong>ot。<br>
				その頭文字をとった「JJ-8」です。（Botの「B」を「8」に見立てています。）
				</p>

				<h4>■ JJ-8のシステム構成</h4>
				<table class="my-custom">
					<tr>
						<th style="width:100px;">開発OS</th><td>WSL Ubuntu</td>
					</tr>
					<tr>
						<th>IDE/ツール</th><td>VS Code, MongoDBCompass</td>
					</tr>
					<tr>
						<th>使用言語</th><td>Python</td>
					</tr>
					<tr>
						<th>データベース</th><td>MongoDB</td>
					</tr>
				</table>

			</article>
		</section>

		<section class="content">
			<h3 class="heading">JJ-8の導入とサポート</h3>
			<article>
				<a href="https://discord.com/oauth2/authorize?client_id=1273859776631144489" target="_blank">
					<img src="images/jj8_icon_mini.webp" width="180" height="176" alt="JJ-8イメージアイコン" class="alignright frame">
				</a>

				<h4>■ JJ-8の導入</h4>
				<p>こちらのJJ-8画像をクリックすることで導入できます。</p>

				<h4>■ JJ-8のサポート</h4>
				<p>使い方や最新情報を提供する
					<a href="https://discord.gg/2WdWzJFJ68" target="_blank" class="explicitly">JJ-8のDiscordサーバー</a>
					もご用意しています。</p>
				<p>使い方の質問やバグ報告だけでなく、プログラミングに興味のある方、ギルドの垣根を超えた交流の場として等々。</p>
				<p>お待ちしておりますので、ぜひご参加ください。</p>
			</article>
		</section>

		<section class="content">
			<h3 class="heading">JJ-8 のコマンド</h3>
			<article>
				<table class="my-custom">
					<tr>
						<th>コマンド<br>用途</th><th>オプション</th>
					</tr>
					<tr>
						<td rowspan="2">/sts<br>
							バフ・デバフ検索
						</td>
						<td>
							status_name:ステータス名（必須）
						</td>
					</tr>
					<tr>
						<td>
							category: c（キャラクター）、s（シップ）<br>
							省略時はc（キャラクター）
						</td>
					</tr>
					<tr>
						<td>/register<br>
							自身の同盟コード登録
						</td>
						<td>
							ally_code:<strong style="text-decoration:underline">自身の</strong>同盟コード（必須）
						</td>
					</tr>
					<tr>
						<td>/unregister<br>
							同盟コード登録解除
						</td>
						<td>
							ally_code:同盟コード（必須）
						</td>
					</tr>
					<tr>
						<td>/gunit<br>
							指定ユニットのギルド内育成状況確認<br>
							（※ シップは未対応）
						</td>
						<td>
							ユニット名（必須／部分一致検索）<br>
							※事前の同盟コード登録が必要
						</td>
					</tr>
					<tr>
						<td>/tb-rote<br>
							Rote TB シミュレーター
						</td>
						<td>
							phase: 1～6（必須）<br>
							※事前の同盟コード登録が必要
						</td>
					</tr>
					<tr>
						<td>/allys<br>
							全ギルドメンバー同盟コード表示
						</td>
						<td>
							なし<br>
							※事前の同盟コード登録が必要
						</td>
					</tr>
				</table>
			</article>
		</section>
    
		<section class="content">
			<h3 class="heading">バージョン履歴</h3>
			<article>
				<dl>
					<dt>v 1.0.4 (2024/09/19) - サーバー・アップデート</dt>
					<dd>データベースに新ユニット「シン・ハティ」を追加しました。<br>
					このアップデートによりコマンド「gunit」でギルド内のシン・ハティ所持メンバーの検索が可能になり、
					コマンド「sts」で彼女が付与するバフ・デバフを表示できます。
					</dd>
				</dl>
				<dl>
					<dt>v 1.0.4 (2024/09/14) - 仕様変更</dt>
					<dd>コマンド「g-unit」について、ユニット名の候補を前方一致で検索していたのを部分一致に変更しました。
						<br>
						これはユーザーからの要望による仕様変更です。ご要望いただきありがとうございます。
					</dd>
				</dl>
				<dl>
					<dt>v 1.0.3 (2024/09/13) - 仕様変更</dt>
					<dd>コマンド「g-unit」について、スマホで入力する際に英字から数字への切り替えが必要で不便に感じたため、
						コマンド名を「gunit」に変更しました。
					</dd>
					<dd>また、「g-unit」のオプション入力時、スマホでは中丸「・」やダブルクオーテーション「"」の入力が面倒だったため
						ユニット名の候補からそれらの記号を除去し、入力不要に変更しました。
					</dd>
				</dl>
				<dl>
					<dt>v 1.0.2 (2024/09/12) - サーバー・アップデート</dt>
					<dd>データベースに新ユニット「グレート・マザー」を追加しました。<br>
					このアップデートによりコマンド「gunit」でギルド内のグレート・マザー所持メンバーを検索できます。
					</dd>
				</dl>
				<dl>
					<dt>v 1.0.2 (2024/09/08) - バグフィックス</dt>
					<dd>コマンド「g-unit」の使用時に、候補一覧に存在しないユニット名を送信すると
						「考え中」のメッセージが表示されたまま処理が停止するバグを修正しました。</dd>
				</dl>

				<dl>
					<dt>v 1.0.1 (2024/08/25) - 新機能を追加</dt>
					<dd>g-unitコマンド: 全ギルドメンバーの指定ユニットの育成状況を表示（自身の同盟コード登録が必要）</dd>
					<dd>registerコマンド: 自身の同盟コードを登録</dd>
					<dd>unregisterコマンド: 同盟コードの登録を解除</dd>
					<dd>tb-roteコマンド: RotE TB指定フェーズの★3獲得シミュレーション機能（自身の同盟コード登録が必要）</dd>
					<dd>allysコマンド: 全ギルドメンバーの同盟コード表示（自身の同盟コード登録が必要）</dd>
				</dl>

				<dl>
					<dt>v 1.0.0 (2024/08/21) - プロトタイプリリース</dt>
					<dd>常時(24h)運用の環境は整えていないプロトタイプです。</dd>
				</dl>
			</article>
		</section>

		<!--
		<section class="content" id="gallery">
			<h3 class="heading">写真ギャラリー</h3>
				<article class="gridWrapper">
					<figure class="grid"><a href="subpage.html"><img src="images/gallery1.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery2.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery3.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery4.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery5.jpg" width="210" height="210" alt=""></a></figure>
					<figure class="grid"><a href="subpage.html"><img src="images/gallery6.jpg" width="210" height="210" alt=""></a></figure>
				</article>
		</section>
		-->
    
	</section>
	<!-- / コンテンツ -->

	<!-- <aside id="sub">
    <section class="grid">
			<h3>ホームページサンプル</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
		</section>
        
    <section class="grid">
			<h3>革新的な技術</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
    </section>
    
    <section class="grid">
			<h3>ホームページサンプル</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
		</section>
    
    <section class="grid">
			<h3>革新的な技術</h3>
			<ul>
				<li><a href="subpage.html">環境への取り組みについての説明ページです</a></li>
				<li><a href="subpage.html">ecoキャンペーン開催中です</a></li>
				<li><a href="subpage.html">オフィスの移転に関して</a></li>
				<li><a href="subpage.html">最新商品のご紹介</a></li>
				<li><a href="subpage.html">新規サービスを開始しました</a></li>
				<li><a href="subpage.html">環境賞受賞に関してはこちらをご確認ください</a></li>
			</ul>
    </section>
    
	</aside> -->

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