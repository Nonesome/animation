<?php include "common/head.php" ?>
    <link rel="stylesheet" href="static/css/animation.css" />
    <link rel="stylesheet" href="static/css/keyframes.css" />
<?php include "common/header.php" ?>
    <div class="container-fluid">
        <div class="row">
            <?php include "common/sidebar.php" ?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Animation</h1>

                <div class="row placeholders animation-content">
                    <div class="animation" id="J_animation">
                        <canvas id="canvas" width="600" height="300"></canvas>
                        <div class="sprite" id="J_sprite">
                        </div>
                    </div>
                </div>
                <div class="table-responsive" id="J_list">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>property</th>
                            <th>content</th>
                            <th>value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        class prop {
                            var $name = '';
                            var $content = '';
                            var $value = '';
                            function __construct($n, $c, $v) {
                                $this->name = $n;
                                $this->content = $c;
                                $this->value = $v;
                            }
                        }
                        $propArr = [
                            new prop("animation-name", "调用@keyframes的名称", "-"),
                            new prop("animation-duration", "动画执行时间, 默认是0", "6s"),
                            new prop("animation-timing-function", "动画的速度曲线。默认是 \"ease\"", "linear, ease, ease-in, ease-out, ease-in-out, cubic-bezier"),
                            new prop("animation-delay", "动画延迟时间, 默认是0", "1s"),
                            new prop("animation-iteration-count", "动画执行次数, 默认是1", "1, infinite"),
                            new prop("animation-direction", "动画是否在下一周期逆向地播放。默认是 \"normal\"", "normal, alternate"),
                            new prop("animation-play-state", "动画是运行或暂停, 默认是running", "running, paused"),
                            new prop("animation-fill-mode", "动画时间之外的状态，默认是none", "none, forwards, backwards, both")
                        ];
                        for($i = 0; $i < sizeof($propArr); ++$i) {
                            echo '<tr><td><a href="javascript:void(0)" class="show" data-id="' . $i . '">' . $propArr[$i]->name . '</a></td>
                            <td>' . $propArr[$i]->content . '</td>
                            <td>' . $propArr[$i]->value . '</td>
                            </tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include "common/footer.php" ?>
<script src="static/js/animation.js"></script>
<script src="static/js/transform.js"></script>
<script>
    $(function() {
        Animation.init();
        Transform.canvas();
    });
</script>
<?php include "common/foot.php" ?>