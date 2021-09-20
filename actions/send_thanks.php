<?php

$email=htmlentities($_POST['email']);

// ユーザ宛てサンキュー通知
$to=$email;
$subject='【Diigence】サブスクリプション登録完了';
$body='

【このメールはシステムからの自動送信です。】
$name 様

この度は、Diigenceにお問い合わせいただき誠にありがとうございます。

電話番号： $phone

この度は、Diigenceのサブスクリプションに登録いただき誠にありがとうございます。

今後とも、どうぞ宜しくお願い致します。

Diigenceトップページ
https://diigence.com

【本店】
〒372－0022
群馬県伊勢崎市日乃出町492-5-101号
電話番号　0270-75-5700
info@diigence.com
';
$headers="From: info@diigence.com";
mb_send_mail($to,$subject,$body,$headers);



//事務局宛てサブスク登録者通知
$to='info@webcreat.biz';
$subject='Diigence【事務局】サブスクリプション登録者';
$body=$email;
$headers="From: info@diigence.com";
mb_send_mail($to,$subject,$body,$headers);

//LPへリダイレクト
$message='
サブスクリプションの登録が完了しました。
';
header("Location: ../index.php");