<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<?php
	if ($str[1] == "") {
		echo '<h1 class="logo"><a href="/"><img src="/images/common/header-logo.png" alt="'. SITE_NAME .'"></a></h1>';
	} else {
		echo '<p class="logo"><a href="/"><img src="/images/common/header-logo.png" alt="'. SITE_NAME .'"></a></p>';
	}
	?>

	<nav class="nav">
		<ul class="nav--list">
			<li class="nav--item"><a class="nav--link" href="/#treatment" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>>サロン紹介</a></li>
			<li class="nav--item"><a class="nav--link" href="/#menu" <?php if ($str[1] == "about") {
												echo ' class="here"';
											} ?>>料金表</a></li>
			<li class="nav--item"><a class="nav--link" href="/#location" <?php if ($str[1] == "about") {
												echo ' class="here"';
											} ?>>アクセス</a></li>				
			<li class="nav--item"><a class="nav--link nav--link--linear-bg" href="https://beauty.hotpepper.jp/kr/slnH000559405/" target="_blank" <?php if ($str[1] == "about") {
												echo ' class="here"';
											} ?>>HOT PEPPERでご予約</a></li>
			<li class="nav--item"><a class="nav--link nav--link--linear-bg" href="https://line.me/R/ti/p/@530yhhgm" target="_blank" <?php if ($str[1] == "about") {
												echo ' class="here"';
											} ?>><img src="/images/common/line-icon.svg" class="sp" alt="">LINEでご予約</a></li>			
			<li class="nav--item pc"><a class="nav--link nav--link--linear-bg" href="/" target="_blank" <?php if ($str[1] == "about") {
												echo ' class="here"';
											} ?>>楽天ビューティーで予約</a></li>		
			<li class="nav--item"><a class="nav--link nav--link--linear-bg" href="https://www.instagram.com/absolute0195/" target="_blank" <?php if ($str[1] == "about") {
												echo ' class="here"';
											} ?>><img src="/images/common/ig-icon.svg" class="sp" alt="">Instagram<span class="sp">でご予約</span></a></li>													
		</ul>
		<div class="tel">
			<p><span>21</span>時<br>まで営業</p>
			<a class="tel-num" href="tel:053-463-5101"><img src="/images/common/tel-icon.svg" alt="">053-463-5101</a>
			<p>【受付時間】<br class="pc">平日・土  9:00〜21:00 ／ 不定休</p>
		</div>
	</nav>

	<nav class="nav2 sp">
		<ul class="nav2--list">
			<li class="nav2--item">
				<a href="tel:053-463-5101" class="nav2--link">
					<img src="/images/common/tel-icon.svg" alt="">
				</a>
			</li>
			<li class="nav2--item">
				<div class="menu sp" id="nav_menu">
					<span class="line line-t"></span>
					<span class="line line-m"></span>
					<span class="line line-b"></span>
					<p></p>
				</div>
			</li>
		</ul>
	</nav>

</div>
