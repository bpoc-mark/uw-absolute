<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="menu">
				<div class="container">
					<div class="content">
						<div class="p-head">
							<h3 class="p-head--lg">MENU</h3>
							<p class="p-head--sm">施術料金（初回料金）</p>
						</div>
						<div class="row">
							<div class="col">
								<h4>脱 毛</h4>
								<ul class="price-row">
									<li class="price-row--col">
										<span class="name">VIO</span>
										<span class="price">¥3,300</span>
									</li>
									<li class="price-row--col">
										<span class="name">お顔</span>
										<span class="price">¥3,800</span>
									</li>
									<li class="price-row--col">
										<span class="name">全身</span>
										<span class="price">¥6,600</span>
									</li>
								</ul>
							</div>
							<div class="col">
								<h4>痩 身</h4>
								<ul class="price-row">
									<li class="price-row--col">
										<span class="name">2ヶ所</span>
										<span class="price">¥3,300</span>
									</li>
									<li class="price-row--col">
										<span class="name">4ヶ所</span>
										<span class="price">¥6,600</span>
									</li>
									<li class="price-row--col">
										<span class="name">全身</span>
										<span class="price">¥9,900</span>
									</li>
								</ul>
							</div>
							<div class="col">
								<h4>骨盤矯正</h4>
								<ul class="price-row">
									<li class="price-row--col">
										<span class="name">20分</span>
										<span class="price">¥2,000</span>
									</li>
									<li class="price-row--col">
										<span class="name">10分ごと</span>
										<span class="price">+ ¥1,000</span>
									</li>
								</ul>
							</div>
							<div class="col">
								<h4>REVI陶肌トリートメント</h4>
								<ul class="price-row">
									<li class="price-row--col">
										<span class="name">オプション無し</span>
										<span class="price">¥8,800</span>
									</li>
									<li class="price-row--col">
										<span class="name">オプション有り</span>
										<span class="price">¥11,000</span>
									</li>
									<li class="price-row--col">
										<span class="name">ハードタイプ</span>
										<span class="price">¥22,000</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="cta pb-100">
				<div class="container">
					<h3 class="cta--ttl">
						<picture >
							<source srcset="/images/cta/sp/txt_img.png" media="(max-width: 899px)">
							<img src="/images/cta/txt_img.png" alt="まずはお気軽にお問い合わせください！">
						</picture>
					</h3>
					<ul class="cta--list">
						<li class="cta--list__item"><a class="cta--list__link" href="/">HOT PEPPERでご予約</a></li>
						<li class="cta--list__item"><a class="cta--list__link" href="/"><img src="/images/common/line-icon.svg" alt="">LINEでご予約</a></li>			
						<li class="cta--list__item"><a class="cta--list__link" href="/">楽天ビューティーで予約</a></li>		
						<li class="cta--list__item"><a class="cta--list__link" href="/"><img src="/images/common/ig-icon.svg" alt="">Instagram</a></li>													
					</ul>
					<div class="cta--tel">
						<p><span>21</span>時<br>まで営業</p>
						<a class="cta--tel__num" href="tel:053-463-5101"><img src="/images/common/tel-icon.svg" alt="">053-463-5101</a>
						<p>【受付時間】<br class="pc">平日・土  9:00〜21:00 ／ 不定休</p>
					</div>
				</div>
			</section>
			<section class="location">
				<div class="container">
					<div class="content">
						<div class="p-head">
							<h3 class="p-head--lg">ACCESS</h3>
							<p class="p-head--sm">アクセス</p>
						</div>
						<div class="row">
							<div class="col">
								<table>
									<tr>
										<th>サロン名</th>
										<td>absolute（アブソリュート）</td>
									</tr>
									<tr>
										<th>営業時間</th>
										<td>平日･土 9:00～21:00</td>
									</tr>
									<tr>
										<th>定休日</th>
										<td>不定休</td>
									</tr>
									<tr>
										<th>住所</th>
										<td>〒435-0057 静岡県浜松市東区中田町62-2</td>
									</tr>
									<tr>
										<th>駐車場</th>
										<td>4台</td>
									</tr>
									<tr>
										<th>電話番号</th>
										<td><a href="tel:053-463-5101">053-463-5101</a></td>
									</tr>
									<tr>
										<th>スタッフ数</th>
										<td>3人</td>
									</tr>
								</table>
							</div>
							<div class="col">
								<img src="/images/access/img_1.png" alt="アクセス">
							</div>
						</div>
						<div class="row">
							<div class="col">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.86849995382!2d137.75349581559462!3d34.733708888956606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade24ee161a65%3A0x49986758c8fdd63!2zSmFwYW4sIOOAkjQzNS0wMDU3IFNoaXp1b2thLCBIYW1hbWF0c3UsIEhpZ2FzaGkgV2FyZCwgTmFrYWRhY2jFjSwgNjLiiJIy!5e0!3m2!1sen!2sph!4v1646096627027!5m2!1sjp!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							<div class="col">
								<h4>駐車場のご案内</h4>
								<div class="img-wrap">
									<img src="/images/access/img_2.png" alt="駐車場のご案内">
								</div>
							</div>
						</div>
					</div>
					<div class="content">
						<div class="p-head">
							<h3 class="p-head--lg">HEAD OFFICE</h3>
							<p class="p-head--sm">本 店</p>
						</div>
						<div class="row">
							<div class="col">
								<table>
									<tr>
										<th>サロン名</th>
										<td>AKIKO</td>
									</tr>
									<tr>
										<th>営業時間</th>
										<td>不定期</td>
									</tr>
									<tr>
										<th>定休日</th>
										<td>不定休</td>
									</tr>
									<tr>
										<th>住所</th>
										<td>〒435-0057 静岡県浜松市東区中田町</td>
									</tr>
									<tr>
										<th>駐車場</th>
										<td>3台</td>
									</tr>
									<tr>
										<th>電話番号</th>
										<td><a href="tel:090-1724-7741">090-1724-7741</a></td>
									</tr>
								</table>
							</div>
							<div class="col">
								<img src="/images/access/img_3.png" alt="本 店">
							</div>
						</div>
						<ul class="cta-wrap">		
							<li class="cta-wrap__item"><a class="cta-wrap__link" href="/">本店への予約はこちら</a></li>		
							<li class="cta-wrap__item"><a class="cta-wrap__link" href="/">ブログを見る</a></li>		
							<li class="cta-wrap__item"><a class="cta-wrap__link" href="/"><img src="/images/common/ig-icon.svg" alt="">Instagram</a></li>													
						</ul>
					</div>
				</div>
			</section>
			<section class="cta">
				<div class="container">
					<h3 class="cta--ttl">
						<picture >
							<source srcset="/images/cta/sp/txt_img.png" media="(max-width: 899px)">
							<img src="/images/cta/txt_img.png" alt="まずはお気軽にお問い合わせください！">
						</picture>
					</h3>
					<ul class="cta--list">
						<li class="cta--list__item"><a class="cta--list__link" href="/">HOT PEPPERでご予約</a></li>
						<li class="cta--list__item"><a class="cta--list__link" href="/"><img src="/images/common/line-icon.svg" alt="">LINEでご予約</a></li>			
						<li class="cta--list__item"><a class="cta--list__link" href="/">楽天ビューティーで予約</a></li>		
						<li class="cta--list__item"><a class="cta--list__link" href="/"><img src="/images/common/ig-icon.svg" alt="">Instagram</a></li>													
					</ul>
					<div class="cta--tel">
						<p><span>21</span>時<br>まで営業</p>
						<a class="cta--tel__num" href="tel:053-463-5101"><img src="/images/common/tel-icon.svg" alt="">053-463-5101</a>
						<p>【受付時間】<br class="pc">平日・土  9:00〜21:00 ／ 不定休</p>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
