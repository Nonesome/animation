/**
 * Created by nonesome on 16/3/31.
 */
;(function(win) {
    var canvas=document.getElementById('canvas');
    var ctx=canvas.getContext('2d');
    var Round = {
        init: function() {
            Round._bind();
            Round.canvas();
        },
        _bind: function() {
            var $sprite = $("#J_sprite"),
                $list = $("#J_btnList");
            $list.on('click', '.btn', function() {
                var _this = $(this),
                    id = Number(_this.attr("data-id"));
                $sprite.data('id', id);
                draw(id);
            });
            $("#J_run").on('click', function() {
                var _this = $(this),
                    id = Number($sprite.data("id"));
                var classArr = ['','line','parabola','round', 'ellipse'];
                $sprite[0].className = 'sprite';
                setTimeout(function() {
                    $sprite.addClass(classArr[id]);
                }, 0);
            });
            function draw(id) {
                Round.canvas();
                ctx.beginPath();
                var x = 35, y = 35;
                switch (id) {
                    case 1:
                        ctx.moveTo(x, y);
                        ctx.lineTo(x + 500, y + 200);
                        break;
                    case 2:
                        ctx.moveTo(x, y);
                        ctx.quadraticCurveTo(x + 500, y, x + 500, y + 200);
                        break;
                    case 3:
                        ctx.moveTo(x + 100, y);
                        ctx.arc(x + 100, y + 100, 100, -0.5*Math.PI, 1.5*Math.PI, true);
                        break;
                    case 4:
                        x = x + 150;
                        y = y + 100;
                        var a = 150, b = 100;
                        ctx.moveTo(x + a, y); //从椭圆的左端点开始绘制
                        var step = 1/a;
                        for (var i = 0; i < 2 * Math.PI; i += step)
                        {
                            //参数方程为x = a * cos(i), y = b * sin(i)，
                            //参数为i，表示度数（弧度）
                            ctx.lineTo(x + a * Math.cos(i), y + b * Math.sin(i));
                        }
                        break;
                }
                ctx.stroke();
            }
        },
        canvas: function() {
            var x, y;
            ctx.clearRect(0, 0, 600, 600);
            ctx.beginPath();
            ctx.moveTo(10, 10);
            ctx.lineTo(600, 10);
            ctx.lineTo(580, 0);
            ctx.moveTo(600, 10);
            ctx.lineTo(580, 20);

            ctx.moveTo(10, 10);
            ctx.lineTo(10, 300);
            ctx.lineTo(0, 280);
            ctx.moveTo(10, 300);
            ctx.lineTo(20, 280);

            for(var i = 0; i < 12; ++i) {
                x = 10 + i * 50;
                y = 0;
                ctx.moveTo(x, y);
                ctx.lineTo(x, 300);
                if(i < 6) {
                    ctx.moveTo(y, x);
                    ctx.lineTo(600, x);
                }
            }
            ctx.font = "40px Arial";
            ctx.fillText("x", 580, 50);
            ctx.fillText("y", 20, 290);
            ctx.stroke();
        }
    };
    win.Round = Round;
})(window);