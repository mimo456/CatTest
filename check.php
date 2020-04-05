<?php
    $question1=$_GET['question1'];
    $question2=$_GET['question2'];
    $question3=$_GET['question3'];
    $question4=$_GET['question4'];
    $question5=$_GET['question5'];

    $cnt=0;//正解数
    $question5=false;//正解のboolean

    $correct = array_fill(0, 5, 'Ｘ');//初期値に✗を入れておく

    if($question1=="radio3"){
        $cnt++;
        $correct[0]="◯";
    }

    if($question2=="radio4"){
        $cnt++;
        $correct[1]="◯";
    }

    if($question3=="radio9"){
        $cnt++;
        $correct[2]="◯";
    }

    if($question4=="radio10"){
        $cnt++;
        $correct[3]="◯";
    }

    if($question5=="radio14"){
        $cnt++;
        $correct[4]="◯";
    } 
    print_r($correct);
?>

<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css\style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>解答</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <header>
        <h1>猫クイズ解答</h1>
        <img src="img/animal_quiz_neko_maru.png" alt="正解の札を上げている猫">
        <img src="img/animal_quiz_neko_batsu.png" alt="不正解の札を上げている猫">
    </header>
    <body>
        <span class="correctBox">
            <?php if($correct[0]=="◯"){ ?>
                <span class="correct"><?php print $correct[0];?></span>
            <?php }else{ ?>
                <span class="incorrect"><?php print $correct[0];?></span>
            <?php } ?>
        </span>
        <span class="fontSize">第1問</span><br>
        <div class="textBox">
            猫は、よく寝るから語源は『寝る子』といわれるほどなんです。
            猫の睡眠時間は、１日平均１４時間（子猫は２０時間近い）で、<br>
            1日の大半を寝て過ごしているので、一生のうち約2/3は眠って過ごすことになります。
        </div>

        <span class="correctBox">
            <?php if($correct[1]=="◯"){ ?>
                <span class="correct"><?php print $correct[1];?></span>
            <?php }else{ ?>
                <span class="incorrect"><?php print $correct[1];?></span>
            <?php } ?>
        </span>
        <span class="fontSize">第2問</span><br>
        <div class="textBox">
            マタタビに含まれる「マタタビラクトン」と呼ばれる成分が猫を酔っ払ったような状態にします、キウイもマタタビの仲間で枝や葉で酔っぱらい状態になります。
        </div>

        <span class="correctBox">
            <?php if($correct[2]=="◯"){ ?>
                <span class="correct"><?php print $correct[2];?></span>
            <?php }else{ ?>
                <span class="incorrect"><?php print $correct[2];?></span>
            <?php } ?>
        </span>
        <span class="fontSize">第3問</span><br>
        <div class="textBox">
            猫の味覚は「苦み」「酸味」「塩味」の3種類を感じる事ができます。
            しかし猫の味覚は美味しいものかどうかを判断するよりも、食べ物が腐っていないかどうかを感じるそうです。
        </div>

        <span class="correctBox">
            <?php if($correct[3]=="◯"){ ?>
                <span class="correct"><?php print $correct[3];?></span>
            <?php }else{ ?>
                <span class="incorrect"><?php print $correct[3];?></span>
            <?php } ?>
        </span>
        <span class="fontSize">第4問</span><br>
        <div class="textBox">
            猫の鼻の模様（鼻紋）は、人間の指紋と同様に1匹ずつ異なるそうです。
        </div>

        <span class="correctBox">
            <?php if($correct[4]=="◯"){ ?>
                <span class="correct"><?php print $correct[4];?></span>
            <?php }else{ ?>
                <span class="incorrect"><?php print $correct[4];?></span>
            <?php } ?>
        </span>
        <span class="fontSize">第5問</span><br>
        <div class="textBox">
            猫は夜行性と思われがちですが、夕暮れと明け方が猫本来の活動時間だそうです。
        </div>

        <?php print ("正解数".$cnt); ?>
        
    </body>
</html>