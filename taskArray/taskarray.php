
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskarray</title>
</head>
<body>
    <p>
        <?php
            echo "課題1";
         ?>
        <?php
            $japanAverageSalaryArray = [
            2018 => 4410000,
            2017 => 4320000,
            2016 => 4220000,
            2015 => 4200000,
            2014 => 4150000
            ];
            $japanallsalary = $japanAverageSalaryArray[2014]+$japanAverageSalaryArray[2015]+$japanAverageSalaryArray[2016]+$japanAverageSalaryArray[2017]+$japanAverageSalaryArray[2018];
            $japanallAverageSalary = $japanallsalary/5;
         ?>
    </p>
        <?php
            echo "課題1-1";
         ?>
         </p>
        <?php
            echo"<pre>";
            var_dump($japanAverageSalaryArray);
            echo"</pre>";
        ?>
    </p>
        <?php
            echo"課題1-2";
        ?>
        </p>
        <?php
            echo $japanallAverageSalary."円";
        ?>
    </p>
        <?php
            echo"課題2";
        ?>
        <?php
            $member = [
            "A" => 80,
            "B" => 55,
            "C" => 61,
            "D" => 76,
            "E" => 34,
            "F" => 93,
            ];
            $memberall = $member["A"]+$member["B"]+$member["C"]+$member["D"]+$member["E"]+$member["F"];
            $memberallaverage = $memberall/6;
         ?>
    </p>
        <?php
            echo"課題2-1";
        ?>
        <?php
            echo"<pre>";
            var_dump($member);
            echo"</pre>";
        ?>
    </p>
        <?php
            echo"課題2-2";
        ?>
        </p>
        <?php
            echo $memberallaverage."点";
            ?>
</body>
</html>