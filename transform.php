<?php include "common/head.php" ?>
    <link rel="stylesheet" href="static/css/transform.css" />
<?php include "common/header.php" ?>
    <div class="container-fluid">
        <div class="row">
            <?php include "common/sidebar.php" ?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Transform</h1>

                <div class="row placeholders animation-content">
                    <div class="animation" id="J_animation">
                        <canvas id="canvas" width="600" height="600"></canvas>
                        <div class="sprite" id="J_sprite">
                        </div>
                    </div>
                    <div class="animation" id="J_pic" style="display: none;">
                        <img id="J_img" src="static/images/gaoyuanyuan.jpg">
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
                            var $class = '';
                            function __construct($n, $c, $v, $cc = '') {
                                $this->name = $n;
                                $this->content = $c;
                                $this->value = $v;
                                $this->class = $cc;
                            }
                        }
                        $propArr = [
                            new prop("transform-origin", "定义 2D 转换，使用六个值的矩阵", "-", 'transform-origin'),
                            new prop("matrix(n,n,n,n,n,n)", "定义 2D 转换，使用六个值的矩阵", "-"),
                            new prop("matrix3d(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n)", "定义 3D 转换，使用 16 个值的 4x4 矩阵", "-"),
                            new prop("translate(x,y)", "2D平移", "matrix(1, 0, 0, 1, x, y)", 'transform-translate'),
                            new prop("translate3d(x,y,z)", "3D平移", "-"),
                            new prop("scale(x,y)", "2D缩放", "matrix(x, 0, 0, y, 0, 0)", 'transform-scale'),
                            new prop("scale3d(x,y,z)", "3D缩放", "-"),
                            new prop("rotate(angle)", "2D旋转", "matrix(cosθ,sinθ,-sinθ,cosθ,0,0)", 'transform-rotate'),
                            new prop("rotate3d(x,y,z,angle)", "3D旋转", "-"),
                            new prop("skew(x-angle,y-angle)", "2D倾斜", "matrix(1,tan(θy),tan(θx),1,0,0)", 'transform-skew')
                        ];
                        $hrefArr = [1, 0, 0, 1, 0, 1, 0, 1, 0, 1];
                        $_html = '';
                        for($i = 0; $i < sizeof($propArr); ++$i) {
                            if($hrefArr[$i]) {
                                $_html = '<tr><td><a href="javascript:void(0)" class="show" data-class="' . $propArr[$i]->class . '">' . $propArr[$i]->name . '</a></td>';
                            } else if($i == 1) {
                                $_html = '<tr><td><a href="javascript:void(0)" class="show" id="J_matrix">' . $propArr[$i]->name . '</a></td>';
                            } else {
                                $_html = '<tr><td>' . $propArr[$i]->name . '</td>';
                            }
                            echo $_html . '<td>' . $propArr[$i]->content . '</td>
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
    <script src="static/js/transform.js"></script>
    <script>
        $(function() {
            Transform.init();
        });
    </script>
<?php include "common/foot.php" ?>