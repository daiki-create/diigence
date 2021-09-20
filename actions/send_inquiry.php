<?php

$name=htmlentities($_POST['name']);
$email=htmlentities($_POST['email']);
$phone=htmlentities($_POST['phone']);
$content=htmlentities($_POST['content']);

// ユーザ宛て問い合わせ完了通知
$to=$email;
$subject='【Diigence】お問い合わせ完了';
$body="
【このメールはシステムからの自動送信です。】

$name 様

この度は、Diigenceにお問い合わせいただき誠にありがとうございます。

電話番号： $phone

/*------ お問い合わせ内容 ------*/

$content

/*----------------------------*/

今後とも、どうぞ宜しくお願い致します。

Diigenceトップページ
https://diigence.com

【本店】
〒372－0022
群馬県伊勢崎市日乃出町492-5-101号
電話番号　0270-75-5700
info@diigence.com
";
$headers="From: info@diigence.com";
mb_send_mail($to,$subject,$body,$headers);



//事務局宛て問い合わせ受付通知
$to='info@diigence.com,info@webcreat.biz';
$subject='Diigence【事務局】お問い合わせ受付完了';
$body="
お名前　　　　： $name
メールアドレス： $email
電話番号　　　： $phone

/*------ お問い合わせ内容 ------*/

$content

/*----------------------------*/

";
$headers="From: info@diigence.com";
mb_send_mail($to,$subject,$body,$headers);

//LPへリダイレクト
$message='
サブスクリプションの登録が完了しました。
';
header("Location: ../index.php");