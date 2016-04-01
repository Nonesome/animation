<?php include "common/head.php" ?>
    <link rel="stylesheet" href="static/css/keyframes.css" />
    <link rel="stylesheet" href="static/css/round.css" />
<?php include "common/header.php" ?>
    <div class="container-fluid">
        <div class="row">
            <?php include "common/sidebar.php" ?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Round</h1>

                <div class="row placeholders animation-content">
                    <div class="animation" id="J_animation">
                        <canvas id="canvas" width="600" height="300"></canvas>
                        <div class="sprite" id="J_sprite">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="J_btnList">
                <button class="btn btn-primary" data-id="1">直线</button>
                <button class="btn btn-primary" data-id="2">抛物线</button>
                <button class="btn btn-primary" data-id="3">圆</button>
                <button class="btn btn-primary" data-id="4">椭圆</button>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-left: 500px;">
                <button class="btn btn-lg btn-danger" id="J_run">执行</button>
            </div>
        </div>
    </div>
<?php include "common/footer.php" ?>
    <script src="static/js/round.js"></script>
    <script>
        $(function() {
            Round.init();
        });
    </script>
<?php include "common/foot.php" ?>