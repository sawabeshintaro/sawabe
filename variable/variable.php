<?php
     $applemoney = 110;
     $applequantity = 15;
     $orangemoney = 80;
     $orangequantity = 12;
     $tax = 1.1;
     $allapplemoney = ($applemoney*$applequantity);
     $allorangemoney = ($orangemoney*$orangequantity);
     $allmoney = ($allapplemoney+$allorangemoney);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>variable</title>
</head>
<body>
    <p>
        <?php echo'果物屋さんで1個110円のりんごを15個、1個80円のオレンジを12個買いました。'; ?>
    </p>
    <p>
        <?php echo'消費税は定数とし消費税率は10%とします。'; ?>
    </p>
    <p>
        <?php echo'問題1  りんごの総額(税抜)は何円ですか?'
        .$allapplemoney.'円です。';?>
    </p>
    <p>
        <?php echo'問題2　オレンジの総額(税抜)は何円ですか?'
        .$allorangemoney.'円です。'; ?>
    </p>
    <p>
        <?php echo'問題3　総額(税抜)は何円ですか?'
        .$allmoney.'円です。'; ?>
    </p>
    <p>
        <?php echo'問題4　総額(税込)は何円ですか?'
        .($allmoney*$tax).'円です。'; ?>
    </p>
    <p>
        <?php echo'問題5　フルーツ1個あたりの金額(税抜)は何円ですか?(小数点以下は四捨五入)'
        .(round($allmoney/($applequantity+$orangequantity))).('円です'); ?>
    </p>

</body>
</html>