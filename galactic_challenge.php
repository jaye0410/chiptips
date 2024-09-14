<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="SWGoH ChipTips - 銀河チャレンジ | スター・ウォーズ／銀河の英雄(SWGoH)のコンテンツ「銀河チャレンジ」についてのページです。">
<!-- <meta name="keywords" content=""> -->
<title>SWGoH ChipTips - 銀河チャレンジ</title>
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
	/* h3.heading {
		margin-bottom: 0 !important;
	} */
	.content h4 {
		font-weight: bold;
		font-size: 16px;
		margin: 5px 0;
	}
	.content h4:before {
		white-space: pre-wrap;
		content: "■ "
	}
	article.gc ul {
		list-style-type: disc;
		margin-left: 25px;
		margin-bottom: 20px;
	}
	.gc-nav li {
		margin-bottom: 5px;
	}

	div.youtube {
		margin-bottom: 20px;
	}
	.youtube iframe{
		/* position: absolute;
		top: 0;
		left: 0; */
		width: 100%;
		height: 350px;
		border: none;
	}
	/* スマートフォン 横(ランドスケープ) */
	@media only screen and (max-width:640px){
		.youtube iframe{
			width: 100%;
			height: 100%;
			border: none;
		}
	}
	/* スマートフォン 縦(ポートレート) */
	@media only screen and (max-width:480px){
		.youtube iframe{
			width: 100%;
			height: 100%;
			border: none;
		}
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
		<section class="content">
			<h3 class="heading">メニュー</h3>
			<article class="gc">
				<p>
					このページでは、SWGoHのコンテンツ「銀河チャレンジ」(GC) について説明しています。
				</p>
				<p>
					開催中のGCの攻略記事は
					<a href="./blog/" class="explicitly">&nbsp;ブログ記事&nbsp;</a>
					で投稿している場合がありますが、毎回ではありません。
				</p>

				<hr>

				<h4>目次</h4>
				<ul class="gc-nav">
					<li><a href="#gc_basic" class="explicitly">銀河チャレンジのイベント画像</a></li>
					<li><a href="#gc_level" class="explicitly">銀河チャレンジのレベル</a></li>
					<li><a href="#gc_reward" class="explicitly">銀河チャレンジの報酬</a></li>
					<li><a href="#gc_bonus" class="explicitly">銀河チャレンジのボーナス値</a></li>
					<li><a href="#gc_bonus_list" class="explicitly">銀河チャレンジのボーナス一覧</a></li>
					<li><a href="#gc_feats" class="explicitly">銀河チャレンジの偉業</a></li>
					<li><a href="#gc_feat_list" class="explicitly">銀河チャレンジの偉業一覧</a></li>
				</ul>
			</article>
		</section>

		<section class="content" id="gc_basic">
			<h3 class="heading">銀河チャレンジのイベント画像</h3>
			<article>
				<img src="images/gc_label.png" width="200" height="300" alt="" class="alignleft frame">
				<p>
					銀河チャレンジの予告期間から開催中にかけて「イベント」メニューを開くと、このようなイベント画像で銀河チャレンジの概要を把握できます。
				</p>
				<h4>惑星名:</h4>
				<p>
					惑星によってボーナス値が変わりますが、イベント内でも改めてボーナス値の確認画面が表示されるため、特に覚えたり意識する必要はありません。
				</p>

				<h4>敵勢力:</h4>
				<p>今回のGCで対峙する敵勢力が分かります。</p>

				<h4>ボーナス付与対象の味方勢力:</h4>
				<p>対象の勢力には強力なボーナス値が付与されますが、
					「フルチーム」の偉業をクリアするためにチームをこの勢力のみで編成する必要があります。
				</p>
				<p>
				前述のとおり、このラベル画像は予告期間中から表示されるので、事前に対象の味方勢力を確認可能です。<br>
				育成不足の場合は開催までの間に装備やモッドなどを整える猶予ができます。
				</p>
			</article>
		</section>

		<section class="content" id="gc_level">
			<h3 class="heading">銀河チャレンジのレベル</h3>
			<article>
				<img src="images/gc_level.png" width="380" height="200" alt="" class="alignleft frame">
				<p>
					GCのバトルには、I～X (1～10) までのレベルが設定されており、どのレベルからでもバトルを開始できます。<br>
					レベルX (10) をクリアすると、I～IXまでのバトル全てが自動的にクリアされます。<br>
					後述の「偉業」についても同様の扱いになります。
				</p>
				<p>
					レベルが高くなるにつれ敵のレベル、バトルの難易度が高くなりますが、
					その分獲得できる報酬もグレードアップしていきます。
				</p>
				<p>
					GCでは、バトルに負けても開催期間中は無制限に再挑戦できます。<br>
					装備やレリックレベルを期間中に上げるのは難しいかもしれませんが、
					モッドを見直すことで勝利できるケースも多々あります。
					<br>
					最大報酬を目指して、諦めず挑戦してみてください。
				</p>
			</article>
		</section>

		<section class="content" id="gc_reward">
			<h3 class="heading">銀河チャレンジの報酬</h3>
			<article>
				<img src="images/gc_reward.png" width="320" height="290" alt="" class="alignleft frame">
				<p>
					GCをクリアすると、他のイベントに勝るとも劣らない豪華な報酬が獲得できます。
				</p>
				<p>
					画像の報酬はレベルXクリア時の最大報酬 (赤箱) ですが、
					最大報酬の1ランク下の金箱でもオミクロン資材2つ、カイロテックの回収品が5つ獲得できます。
				</p>
				<p>
					装備ボックスの中にも貴重な装備が複数入っており、さらにモッドスライス資材も潤沢に獲得できます。
					<br>
					非常に時間と労力がかかるアサルトバトルと比べると、コスパの良いイベントではないかと思います。
				</p>

				<h4>モッド報酬:</h4>
				<p>
					有効性モッドが報酬として表示されていますが、獲得できるモッドの種類は惑星によって変わります。
				</p>

				<h4>ユニットのかけら報酬:</h4>
				<p>
					報酬として獲得できるかけらは、敵勢力のユニットが設定されます。
				</p>
			</article>
		</section>

		<section class="content" id="gc_bonus">
			<h3 class="heading">銀河チャレンジのボーナス値</h3>
			<article>
				<img src="images/gc_bonus.png" width="380" height="200" alt="" class="alignleft frame">
				<p>
					惑星、ボーナス対象の味方勢力、敵勢力によって各ボーナス値が変わります。
				</p>
				<p>
					私のやり方としては、このボーナス値は未確認のまま挑戦する場合が多いです。<br>
					ある程度の種類が繰り返されているので、覚えているものが多いのもひとつの理由ですが、
					一度やってみて勝てない場合は、すべてのボーナス値を確認して攻略のヒントを探します。
				</p>
				<p>
					特に「フルチーム」の偉業クリアに苦労する場合は、「プレイヤー」のボーナス値の確認を強くお勧めします。
				</p>
			</article>
		</section>

		<section class="content" id="gc_bonus_list">
			<h3 class="heading">銀河チャレンジのボーナス一覧</h3>
			<article class="gc">
				<h4>グローバル</h4>
				<ul>
					<li>キャッシーク：「正当な報復」<br>
						ユニットがダメージを受けるたび、クリティカルヒットを決めるまでユニットのクリティカルダメージが20%上昇する (スタック可能)。<br>
						ユニットが弱体効果を受けるたび、ユニットのプロテクションが10%回復する。<br>
						ユニットが戦闘不能になるたび、ランダムな他の味方1体にボーナスターンが発生する。
					</li>
				</ul>

				<h4>プレイヤー</h4>
				<ul>
					<li>帝国軍トルーパー：「帝国軍アーマー」<br>
						帝国軍トルーパーの最大HPと最大プロテクションが15%上昇する。
						リーダースロットにいないドロイド以外の帝国軍トルーパーは、初めて戦闘不能になると、HP100%、プロテクション75%の状態で復活する。
						帝国軍トルーパーが復活するたび、1ターンの間、敵全体によろめきと無防備を発生させる(耐性発揮不可)。
						ターンメーターが100%を下回る帝国軍トルーパーは、ボーナスターンメーターを得るたび、HPとプロテクションが5%回復し、1ターンの間、クリティカルダメージが10%上昇する(スタック可能)。
						帝国軍トルーパーはターン外に攻撃するたび、1ターンの間、2%のボーナスプロテクションを得る(スタック可能)。
					</li>
				</ul>

				<h4>敵</h4>
				<ul>
					<li>クローン・トルーパー：「勇猛」<br>
						バトル終了まで、クローン・トルーパーは強化効果(解除可能)を受けるたび、「勇猛」のスタックを1得る(コピー、解除不可)。
						<br>
						勇猛：攻撃力、クリティカル率、クリティカルダメージが5%、ヘルススティールが1%上昇する。
					</li>
				</ul>
			</article>
		</section>

		<section class="content" id="gc_feats">
			<h3 class="heading">銀河チャレンジの偉業</h3>
			<article>
				<img src="images/gc_feats.png" width="380" height="200" alt="" class="alignleft frame">
				<p>
					各レベルのクリアと「フルチーム」の偉業は毎回固定です。<br>
					他2種類の偉業は開催ごとに変わります。
				</p>
				<p>
					最も重要な偉業は「フルチーム」で、赤箱に到達するためにはレベルXのクリアが必須です。<br>
					フルチームのレベルXをクリアすれば、残りの偉業の内1つはレベルIXでも赤箱に到達できます。
				</p>
				<p>
					どうしてもフルチームがクリアできない場合は金箱を目指すことになりますが、
					その際フルチームはレベルVI、その他偉業をレベルXのクリアで到達できます。
				</p>
			</article>
		</section>

		<section class="content" id="gc_feat_list">
			<h3 class="heading">銀河チャレンジの偉業一覧</h3>
			<article class="gc">
				<ul>
					<li>ラッキーショット：クリティカルヒットを30回決めてバトルをクリアする</li>
					<li>危険予測：フルチームではない編成でバトルをクリアする</li>
					<li>クリティカルストリーク：味方のターン中にクリティカルヒットを3連続決めてバトルをクリアする</li>
					<li>しびれる戦術：30回スタンさせてバトルをクリアする</li>
					<li>自由：リーダースロットにリーダーを使用せずに勝利する</li>
					<li>サーマル・デトネーターを持ってるぞ！：サーマル・デトネーターを40回発生させてバトルをクリアする</li>
				</ul>
			</article>
		</section>

		<!-- <section class="content">
			<h3 class="heading">
				GC 411 <span class="planet">キャッシーク</span>：
					<span class="enemy">クローン</span><br>
					<span class="bonus-alignment">帝国軍トルーパー</span>のボーナス
			</h3>
			<article class="gc">
				<h4>敵情報</h4>
				<ul>
					<li>ARCトルーパー</li>
					<li>キャプテン・レックス</li>
					<li>CT-21-0408 エコー</li>
					<li>CT-7567 レックス</li>
					<li>CT-5555 ファイブス</li>
				</ul>

				<h4>偉業</h4>
				<ul>
					<li>ラッキーショット：クリティカルヒットを30回決めてバトルをクリアする</li>
					<li>危険予測：フルチームではない編成でバトルをクリアする</li>
					<li>フルチーム：帝国軍トルーパーのフルチームでバトルをクリアする</li>
				</ul>
				<p>※ レベルクリアの偉業は記載対象から除外しています。</p>

				<hr>

				<h4>攻略のポイント</h4>
				<ul>
					<li>「フルチーム」「ラッキーショット」同一編成（帝国軍トルーパー）でクリアです。<br>
					プレイヤーボーナス「帝国軍アーマー」の効果で、
					ドロイド以外の帝国軍トルーパーは初めて戦闘不能になった際にHP 100%、プロテクション 75%で復活します。</li>
					<li>敵のキャプテン・レックスが動き始めると、こちらに「めまい」が付与されて一気にやられてしまいます。<br>
					先手を取れるようモフ・ギデオンのスピードを可能な限り上げることをお勧めします。（参考：管理人のモフ・ギデオンのスピードは370です）
					</li>
				</ul>
				
				<h4>クリア編成</h4>
				<ul>
					<li>フルチーム：帝国軍トルーパー / ラッキーショット<br>
					ヴィアーズ将軍 L (R5)、モフ・ギデオン (R5)、スターク大佐 (R5)、レンジ・トルーパー (R5)、ピエット提督 (R8)</li>
					<li>危険予測<br>
					シス・エターナルの皇帝 L (R7)、ダース・ベイン (R8)<br>
					銀河共和国の1人抜きなど
					</li>
				</ul>

				<h4>フルチームのクリア動画</h4>
				<div class="youtube">
					<iframe class="BLOG_video_class" allowfullscreen="" youtube-src-id="MwELxyJ7sxE" src="https://www.youtube.com/embed/MwELxyJ7sxE"></iframe>
				</div>
				
				<h4>最終結果：赤箱</h4>
				<img src="images/gc_result.webp" class="frame" width="90%" alt="GC結果">

			</article>
		</section> -->

		<!-- <section class="content">
			<h3 class="heading">
				【予告】GC 412 <span class="planet">カミーノ</span>：
					<span class="enemy">銀河共和国</span><br>
					<span class="bonus-alignment">反乱軍ファイター</span>のボーナス
			</h3>
			<article class="gc">
				<h4>敵情報</h4>
				<ul>
					<li>パドメ・アミダラ</li>
					<li>ケノービ将軍</li>
					<li>R2-D2</li>
					<li>ジェダイ・ナイト・アナキン</li>
					<li>アソーカ・タノ（お調子者）</li>
				</ul>

				<h4>偉業</h4>
				<ul>
					<li>Lingering Death：時間経過ダメージを30回発生させてバトルをクリアする</li>
					<li>Hindered Movement：ターンメーターを400%減少させてバトルに勝利する</li>
					<li>フルチーム：反乱軍ファイターのフルチームでバトルをクリアする</li>
				</ul>
				<p>※ レベルクリアの偉業は記載対象から除外しています。</p>
			</article>
		</section>

		<section class="content">
			<h3 class="heading">
				【予告】GC 413 <span class="planet">イラム</span>：
					<span class="enemy">レジスタンス</span><br>
					<span class="bonus-alignment">ファースト・オーダー</span>のボーナス
			</h3>
			
			<article class="gc">
				<h4>敵情報</h4>
				<ul>
					<li>フィン</li>
					<li>ゾリ・ブリス</li>
					<li>レジスタンスの英雄フィン</li>
					<li>レジスタンスの英雄ポー</li>
					<li>ポー・ダメロン</li>
				</ul>
				
				<h4>偉業</h4>
				<ul>
					<li>Shadowy Dealings：ステルスを10回得てバトルをクリアする</li>
					<li>無防備：チームにタンクを使用せずにバトルに勝利する</li>
					<li>フルチーム：ファースト・オーダーのフルチームでバトルをクリアする</li>
				</ul>
				<p>※ レベルクリアの偉業は記載対象から除外しています。</p>
			</article>
		</section>

		<section class="content">
			<h3 class="heading">
				【予告】GC 414 <span class="planet">ダソミア</span>：
					<span class="enemy">ドロイド</span><br>
					<span class="bonus-alignment">シス</span>のボーナス
			</h3>
			
			<article class="gc">
				<h4>敵情報</h4>
				<ul>
					<li>グリーヴァス将軍</li>
					<li>IG-100マグナガード</li>
					<li>B2スーパー・バトル・ドロイド</li>
					<li>STAP</li>
					<li>B1バトル・ドロイド</li>
				</ul>

				<h4>偉業</h4>
				<ul>
					<li>シンプルトリック：特殊スキルの使用3回以内でバトルに勝利する</li>
					<li>バランス戦略：チームにライトサイド、ダークサイドユニットを1体ずつ入れ、いずれも生存した状態でバトルに勝利する</li>
					<li>フルチーム：シスのフルチームでバトルをクリアする</li>
				</ul>
				<p>※ レベルクリアの偉業は記載対象から除外しています。</p>
			</article>
		</section> -->
    
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