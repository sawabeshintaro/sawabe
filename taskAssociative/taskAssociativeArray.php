    <?php
        $grade = [
            "language" => [
                "a" => 85,
                "b" => 56,
                "c" => 98,
            ],
            "math" => [
                "a" => 64,
                "b" => 89,
                "c" => 87,
            ],
            "social" => [
                "a" => 45,
                "b" => 73,
                "c" => 88,
            ],
            "science" => [
                "a" => 77,
                "b" => 85,
                "c" => 92,
            ],
            "english" => [
                "a" => 80,
                "b" => 78,
                "c" => 96,
            ],
        ];
        ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssoxiativearray</title>
</head>
<body>
    <p>
    <?php
        echo "課題1";
        ?>
    </p>
    <?php
        echo "課題1-1";
        ?>
    </p>
    <?php
        $ascience = $grade["science"]["a"];
        ?>
    <?php
        echo($ascience);
        ?>
    </p>
    <?php
        echo "課題1-2";
        ?>
    </p>
    <?php
        $benglish = $grade["english"]["b"];
        ?>
    <?php
        echo($benglish);
        ?>
    </p>
    <?php
        echo "課題1-3";
        ?>
    </p>
    <?php
        $atotal = $grade["english"]["a"]+$grade["language"]["a"]+$grade["math"]["a"]+$grade["science"]["a"]+$grade["social"]["a"];
        ?>
    <?php
        $aaverage = ($atotal/5);
        ?>
    <?php
        echo($aaverage);
        ?>
    </p>
     <?php
        echo "課題1-4";
        ?>
    </p>
    <?php
        $ctotal = $grade["english"]["c"]+$grade["language"]["c"]+$grade["social"]["c"]+$grade["math"]["c"]+$grade["science"]["c"];
        ?>
    <?php
        $caverage = ($ctotal/5);
        ?>
    <?php
        echo($caverage);
        ?>
    </p>
    <?php
        echo "課題1-5";
        ?>
    </p>
    <?php
        $mathall = $grade["math"]["a"]+$grade["math"]["b"]+$grade["math"]["c"];
        ?>
    <?php
        $mathaverage = ($mathall/5);
        ?>
    <?php
        echo($mathaverage);
        ?>
    
</body>
</html>