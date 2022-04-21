<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["email"];//メール送信先の設定
 $subject = "【東京メンタルヘルス・スクエア】お問い合わせのご確認";//メールの件名
 $header = "From: info@tms.jp";//送信元アドレス
 $header .= "\n";//改行
 $header .= "Bcc: tdp@sairafactory.com";//確認メール管理者受信用
 $message = "東京メンタルヘルス・スクエアです。" . "\n" . "\n" .
 "お問い合わせいただき誠にありがとうございます。" . "\n" .
 $_POST["name"] . "様からのお問い合わせを下記内容にて受け付けました。" . "\n" .
 "3営業日以内に担当者より回答させていただきますので、今しばらくお待ちください。" . "\n" . "\n" .
 "--------------------" . "\n" .
 "お問い合わせ内容" . "\n" .
 "--------------------" . "\n" .
 "お名前：" . $_POST["name"] . "\n" .
 "メールアドレス：" . $_POST["email"] . "\n" .
 "お問い合わせ内容：" . "\n" .
 $_POST["content"];
//メール送信
  mb_send_mail($to, $subject, $message, $header);
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
				<section id="complete">
					<p><img src="../images/icon/check-animated.svg" alt="チェックマーク"></p>
					<h3 class="complete_message">お問い合わせが完了しました</h3>
					<p>お問い合わせいただきありがとうございます。</p>
					<p>内容確認メールを送信しました。万が一メールが到着しなかった場合、入力いただいたメールアドレスが間違っている可能性があります。</p>
					<p>お問い合わせ内容につきましては担当者が3営業日以内に回答いたしますので、今しばらくお待ちください。</p>
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