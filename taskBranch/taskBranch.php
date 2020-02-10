
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
    <p>
        <?php
            echo '課題1'; 
        ?>
    </p>
        <?php
            echo '課題1-1';
        ?>
    </p>
        <?php
            $num = '100';
            if($num == 100) {
                echo("num100は100です。");
            } else {
                echo("num100は100ではありません。");
            }
        ?>
    </p>
    <?php
            echo '課題1-2';
        ?>
    </p>
        <?php
            $num = '100';
            if($num === 100) {
                echo("num100は数字の100です。");
            } else {
                echo("num100は数字の100ではありません。");
            }
        ?>
    </p>
    <?php
            echo '課題1-3';
        ?>
    </p>
        <?php
            $num = '100';
            if($num > 100) {
                echo("num100は101以上ですです。");
            } else {
                echo("num100は101以上ではありません。");
            }
        ?>
    </p>
    <?php
            echo '課題1-4';
        ?>
    </p>
        <?php
            $num = '100';
            if($num >= 100) {
                echo("num100は100以上です。");
            } else {
                echo("num100は100以上ではありません。");
            }
        ?>
    </p>
        <?php
            echo '課題2'; 
        ?>
        <?php
            $language = rand(1,100);
            $math = rand(1,100);
            $science = rand(1,100);
            $social = rand(1,100);
            $english = rand(1,100);
            $allsubjrct = $language+$math+$science+$social+$english;
            $average = $allsubjrct/5;
        ?>
    </p>
        <?php
            echo '課題2-1';
        ?>
    </p>
        <?php
            echo"Aくんの平均点は".$average."です。";
        ?>
    </p>
        <?php
            echo '課題2-2';
        ?>
    </p>
        <?php
            if($average>=67.3){
                echo("Aくんの平均点は67.3以上です。");
            } else {
                echo("A君の平均点は67.3未満です。");
            }
        ?>
    </p>
        <?php
            echo '課題3-1';
        ?>
    </p>
        <?php
            $case = '1';
            switch($case){
                case true:
                    echo 'bool';
                    break;

                case 1:
                    echo 'int';
                    break;

                case '1':
                    echo 'string';
                    break;

                default:
                    echo 'other';
            }
        ?>
    </p>
        <?php
            echo '課題3-2';
        ?>
    </p>
        <?php
            $case = '1';
            switch ($case) {
                case $case === true:
                    echo 'bool';
                    break;
                
                case $case === 1:
                    echo 'int';
                break;

                case $case === '1':
                    echo 'string';
                break;

                default:
                    echo 'other';
            }
        ?>
</body>
</html>