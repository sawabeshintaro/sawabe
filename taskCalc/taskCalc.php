<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
    <p><?php echo'(1+3)×5は、'.((1+3)*5).'です'; ?></p>
    <p><?php echo'22÷3 (小数点第3位を四捨五入する)は、'.(round(22/3,2)).'です'; ?></p>
    <p><?php echo'22÷3 (小数点以下切り上げ)は、'.(ceil(22/3)).'です'; ?></p>
    <p><?php echo'22÷3 (小数点以下切り下げ)は、'.(floor(22/3)).'です'; ?></p>
    <p><?php echo'サイコロを2つ振った時に、総計が8となる確率は??、'
    .(round(100*((6*6)-(1+2+3+4+5+6/*総計が7以下になる場合*/)-(4+3+2+1/*総計が9以上になる場合*/ ))/(6*6),1)).'です'; ?></p>
    
</body>
</html>