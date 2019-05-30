<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/17
 * Time: 19:13
 */

$ftp = "ftp://YOUR_HTTP_HOST";
//connect to database
include 'include/db.inc.php';
//get titles of the header
try{
    $sql = 'SELECT id, name FROM se_title';
    $headerTitles = $pdo->prepare($sql);
    $headerTitles->execute();
    $headerTitles = $headerTitles->fetchAll();
}
catch (PDOException $e){
    $error = 'Error getting titles from db.';
    include 'error.html.php';
    exit();
}
//switch function
if(isset($_GET['switch'])){
    //error switchID
    if($_GET['switch']>count($headerTitles) || $_GET['switch']<1){
        $error = 'Error files.'.count($headerTitles);
        include 'include/error.html.php';
        exit();
    }
    //get the subtitles of nav section
    try{
        $sql = 'SELECT se_subtitle.id, se_subtitle.name FROM se_subtitle
                INNER JOIN se_relation_title ON se_subtitle.id=se_relation_title.subtitleid
                WHERE se_relation_title.titleid = :id';
        $subtitles = $pdo->prepare($sql);
        $subtitles->bindValue(':id', $_GET['switch']);
        $subtitles->execute();
        $subtitles = $subtitles->fetchAll();
    }
    catch (PDOException $e){
        $error = 'Error getting titles from db.'.$e->getMessage();
        include 'include/error.html.php';
        exit();
    }
    //get the title of nav section
    $navTitle = $headerTitles[$_GET['switch']-1];
    //direct to exact page according to switchID & subID
    switch ($_GET['switch']) {
        case 1:
            include 'index.html.php';
            exit();
        case 2:
            //get subTitle page
            if(isset($_GET['sub'])){
                if($_GET['sub']<1 || $_GET['sub']>count($subtitles)){
                    $error = "error sub files";
                    include 'include/error.html.php';
                    exit();
                }
                $theSubtitle = $subtitles[$_GET['sub']-1];
                switch ($_GET['sub']){
                    case 1:
                        include 'courseIntro.html.php';
                        exit();
                    case 2:
                        include 'courseContent.html.php';
                        exit();
                    case 3:
                        include 'homeworkExperiment.html.php';
                        exit();
                    case 4:
                        include 'examRequirements.html.php';
                        exit();
                    case 5:
                        include 'textbook.html.php';
                        exit();
                    default:
                        $error = "error sub files";
                        include 'include/error.html.php';
                        exit();
                }

            }else{
                $theSubtitle = $subtitles[0];
                include 'courseIntro.html.php';
            }
            exit();
        case 3:
            $theSubtitle = $navTitle;
            include 'teaching.html.php';
            exit();
        case 4:
            $theSubtitle = $navTitle;
            include 'video.html.php';
            exit();
        case 5:
            //get subTitle page
            if(isset($_GET['sub'])){
                if($_GET['sub']<1 || $_GET['sub']>count($subtitles)){
                    $error = "error sub files";
                    include 'include/error.html.php';
                    exit();
                }
                $theSubtitle = $subtitles[$_GET['sub']-1];
                switch ($_GET['sub']){
                    case 1:
                        include 'largeExp.html.php';
                        exit();
                    case 2:
                        include 'smallExpNE.html.php';
                        exit();
                    case 3:
                        include 'smallExpOO.html.php';
                        exit();
                    case 4:
                        include 'C2C.html.php';
                        exit();
                    case 5:
                        include 'expRequirements.html.php';
                        exit();
                    case 6:
                        include 'grouping.html.php';
                        exit();
                    case 7:
                        include 'expSubmit.html.php';
                        exit();
                    default:
                        $error = "error sub files";
                        include 'include/error.html.php';
                        exit();
                }

            }else{
                $theSubtitle = $subtitles[0];
                include 'largeExp.html.php';
            }
            exit();
        case 6:
            //get subTitle page
            if(isset($_GET['sub'])) {
                if ($_GET['sub'] < 1 || $_GET['sub'] > count($subtitles)) {
                    $error = "error sub files";
                    include 'include/error.html.php';
                    exit();
                }
                $theSubtitle = $subtitles[$_GET['sub']-1];
                switch ($_GET['sub']) {
                    case 1:
                        include 'email.html.php';
                        exit();
                    case 2:
                        include 'cc98.html.php';
                        exit();
                    case 3:
                        include 'bbs.html.php';
                        exit();
                }
            }else{
                $theSubtitle = $subtitles[0];
                include 'email.html.php';
            }
            exit();
        case 7:
            try{
                //get the counts of chapters
                $sql = 'SELECT COUNT(DISTINCT chapterid) AS sum FROM se_question_content';
                $chapterCounts = $pdo->query($sql)->fetchAll()[0]['sum'];
            }
            catch (PDOException $e){
                $error = 'Error getting questions from db.';
                include 'error.html.php';
                exit();
            }
            //push value to subtitles
            for($i=1; $i<=$chapterCounts; $i++){
                $subtitles[] = array('id'=>$i, 'name'=>"第".$i."章试题");
            }
            //get the questions and options according to the subID
            if(isset($_GET['sub'])){
                //error subID
                if($_GET['sub']<1 || $_GET['sub']>$chapterCounts){
                    $error = "error subID";
                    include 'include/error.html.php';
                    exit();
                }
                //get questions
                try{
                    $sql = 'SELECT questionid, content, optioncount FROM se_question_content
                            WHERE chapterid = :id';
                    $questions = $pdo->prepare($sql);
                    $questions->bindValue(':id', $_GET['sub']);
                    $questions->execute();
                    $questions = $questions->fetchAll();
                }
                catch (PDOException $e){
                    $error = 'Error getting questions from db.'.$e->getMessage();
                    include 'include/error.html.php';
                    exit();
                }
                //get options
                try{
                    $sql = 'SELECT content FROM se_question_option
                            WHERE chapterid = :id
                            ORDER  BY questionid, optionid';
                    $options = $pdo->prepare($sql);
                    $options->bindValue(':id', $_GET['sub']);
                    $options->execute();
                    $options = $options->fetchAll();
                }
                catch (PDOException $e){
                    $error = 'Error getting options from db.'.$e->getMessage();
                    include 'include/error.html.php';
                    exit();
                }
                //get answers
                try{
                    $sql = 'SELECT answerid FROM se_question_answer
                            WHERE chapterid = :id';
                    $answers = $pdo->prepare($sql);
                    $answers->bindValue(':id', $_GET['sub']);
                    $answers->execute();
                    $answers = $answers->fetchAll();
                }
                catch (PDOException $e){
                    $error = 'Error getting answers from db.'.$e->getMessage();
                    include 'include/error.html.php';
                    exit();
                }
            }
            include 'question.html.php';
            exit();
        case 8:
            $theSubtitle = $navTitle;
            include 'recommendation.html.php';
            exit();
        default:
            $error = '404 ERROR.';
            include 'include/error.html.php';
            exit();
    }
}

$navTitle = array('id'=>"1", 'name'=>"首页");
$subtitles[] = array('id'=>"1", 'name'=>"课程导航");

include 'index.html.php';


