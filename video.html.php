<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/27
 * Time: 9:52
 */
?>
<?php include 'include/header.html.php' ?>
    <div id="container">
        <?php include 'include/nav.html.php' ?>
        <div id="content">
            <h2 class="alignCenter"><?php echo $theSubtitle['name']; ?></h2>
            <p class="paraIndent">提供了3位主讲教师陈越教授、杨小虎副教授、林怀忠副教授的授课录像，内容见下表： </p>
            <table class="posCenter">
                <tr>
                    <th scope="col">录像编号</th>
                    <th scope="col">授课教师</th>
                    <th scope="col">授课内容</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>陈越</td>
                    <td><a href="<?php echo $ftp; ?>" target="_blank">User Interface Design</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>杨小虎</td>
                    <td><a href="<?php echo $ftp; ?>" target="_blank">Architecture Design Presentations – 学生演讲与教师点评</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>林怀忠</td>
                    <td><a href="<?php echo $ftp; ?>" target="_blank">Project Management Concepts</a></td>
                </tr>
            </table>
            <p class="paraIndent">从课程录像中可以看到教师们备课认真、充分、规范，能够做到备教材、备大纲、备学生、备课件；教学语言清晰，概念讲授准确，授课条理分明；与学生有充分互动，理论与实践相结合，能吸引学生的注意力，教学效果良好。 </p>
        </div>
    </div>
<?php include 'include/footer.html.php' ?>