<?php $url = $_SERVER['PHP_SELF']?>
<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <?php
        $urlArr = ['index.php', 'transform.php', 'round.php'];
        $nameArr = ['首页', 'transform', 'Round'];
        for($i = 0; $i < 4; ++$i) {
            if($url == '/animation/' . $urlArr[$i]) {
                $class = ' class = "active"';
            } else {
                $class = '';
            }
            echo '<li' . $class . '><a href="/animation/' . $urlArr[$i] . '">' . $nameArr[$i] . '</a></li>';
        }
        ?>
    </ul>
</div>