<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/16
 * Time: 21:49
 */
?>
<div id="nav">
    <p class="alignCenter"><?php echo $navTitle['name'] ?></p>
    <ul>
        <?php $i=0;
            foreach ($subtitles as $subtitle): ?>
            <li class="paraIndent">
                <a href="?switch=<?php echo $navTitle['id'] ?>&amp;sub=<?php echo ++$i;//$subtitle['id'] ?>">
                    <?php echo $subtitle['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
