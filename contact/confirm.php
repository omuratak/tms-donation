<?php
$name = isset( $_POST[ "name" ] ) ? $_POST[ "name" ] : "";
$email = isset( $_POST[ "email" ] ) ? $_POST[ "email" ] : "";
$content = isset( $_POST[ "content" ] ) ? $_POST[ "content" ] : "";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow">
<meta name="keywords" content="カウンセリング,メンタルヘルス,うつ,不安,悩み,オンラインカウンセリング,スマホ,寄付">
<meta name="description" content="無料SNS・電話相談を拡充するためにサポーターを募集しています | NPO法人東京メンタルヘルス・スクエア">
<title>お問い合わせ | NPO法人東京メンタルヘルス・スクエア</title>

<!--　favicon	-->
<link rel="icon" href="../images/logo/tms-favicon.png">

<!-- css -->
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/contact-style.css">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Zen+Kaku+Gothic+New:wght@300;400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- javascript --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- JQuery	--> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/messages_ja.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/jquery-autosize@1.18.18/jquery.autosize.min.js"></script>

</head>

<body>
<div id="wrapper">
	<div id="contact-main">
		<h2>お問い合わせ</h2>
	</div>
	<main>
		<article>
			<p>お問い合わせ内容をご確認ください。</p>
			<section>
				<form action="complete.php" method="post" id="contact">
					<input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
					<input type="hidden" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?>">
					<input type="hidden" name="content" value="<?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?>">
					<dl>
						<dt>お名前</dt>
						<dd class="confirm_box"><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></dd>
						<dt>メールアドレス</dt>
						<dd class="confirm_box"><?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?></dd>
						<dt>お問い合わせ内容</dt>
						<dd class="confirm_box"><?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?></dd>
					</dl>
					<div id="button_wrapper">
						<input type="button" value="修正" onClick="history.back()">
						<input type="submit" value="送信" class="button">
					</div>
				</form>
			</section>
		</article>
	</main>
	<footer>
		<div class="footer-logo"><a href="https://www.npo-tms.or.jp/"><img src="../images/logo/tms-header-logo.png" alt="東京メンタルヘルス・スクエアロゴ"></a></div>
		<p>NPO法人 東京メンタルヘルス・スクエア<br>
			〒171-0021 東京都豊島区西池袋2-39-8<br>
			ローズベイ池袋ビル3階<br>
			TEL:03-5944-8455（平日10時～17時受付）</p>
		<small>Copyright &copy; 2022 東京メンタルヘルス・スクエア All Rights Reserved.</small> </footer>
</div>
</body>
</html>