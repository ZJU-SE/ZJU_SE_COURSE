<!-- 课后习题 -->
<!DOCTYPE html>
<html>
<head>
    <script src="js/question.js" type="text/javascript"></script>
</head>
<body>
    <?php include 'include/header.html.php' ?>
    <div id="container">
        <?php include 'include/nav.html.php' ?>
        <div id="content">
            <?php if(isset($questions)) { ?>
            <h2 class="alignCenter">第<?php echo $_GET['sub']; ?>章试题</h2>
            <?php   $optNum = 0;    foreach ($questions as $question){ ?>
            <br />

            <p><?php echo $question['questionid'].". ".$question['content']; ?></p>
            <?php   for ($i = 0, $ch = 'A'; $i < $question['optioncount']; $i++, $ch++) { ?>
            <input type="radio" name="<?php echo "Question".$question['questionid'] ?>" value=""/><?php echo " ".$ch.". ".$options[$optNum++]['content']; ?>
            <br />
            <?php }?>
            <p class="show">正确答案：<?php $ch='A'; $aid=$answers[$question['questionid']-1]['answerid']-1; while($aid--) $ch++; echo $ch; //echo $options[$optNum-$question['optioncount']-1+$answers[$question['questionid']-1]['answerid']]['content'] ?></p>
            <br />
            <?php }?>
            <br />
            <br />
            <div class="alignCenter">
                <input type="button" value="提交结果" onclick="showAnswer();" />
            </div>
            <?php
                }
                else{


            ?>
            <h3 class="alignCenter">请在左侧选择试题</h3>
            <?php
                }
            ?>
        </div>
    </div>
    <?php include 'include/footer.html.php' ?>

</body>
</html>