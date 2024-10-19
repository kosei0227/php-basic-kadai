<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kadai_005</title>
    </head>
    <body>
        <p>
            <?php
                
            $score_01 = 80;
            $score_02= 60;
            $score_03= 55;
            $score_04= 40;
            $score_05= 100;
            $score_06= 25;
            $score_07= 80;
            $score_08= 95;
            $score_09= 30;
            $score_10= 60;

            $score_sum=$score_01+$score_02+$score_03+$score_04+$score_05+$score_06+$score_07+$score_08+$score_09+$score_10;
            $score_ave=$score_sum/10;

            echo '合計点は'.$score_sum.'です';
            echo '<br>';
            echo '平均点は'.$score_ave.'です';

            ?>
        </p>
    </body>
</html>