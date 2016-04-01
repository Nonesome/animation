/**
 * Created by nonesome on 16/3/30.
 */
;(function(win) {
    var Transform = {
        init: function() {
            Transform._bind();
            Transform.canvas();
        },
        _bind: function() {
            var $sprite = $("#J_sprite"),
                $list = $("#J_list"),
                $matrix = $("#J_matrix");

            $list.on('click', '.show', function(e) {
                e.preventDefault();
                var _this = $(this),
                    className = _this.attr("data-class");
                if(className == 'transform-origin' && ~$sprite[0].className.indexOf('transform-origin')) {
                    $sprite.removeClass('transform-origin');
                    return;
                } else if(className == 'transform-origin' && !~$sprite[0].className.indexOf('transform-origin')) {
                    $sprite.addClass('transform-origin');
                    return;
                } else if(~$sprite[0].className.indexOf('transform-origin')) {
                    $sprite[0].className = 'sprite transform-origin';
                } else {
                    $sprite[0].className = 'sprite';
                }
                $sprite.addClass(className);
            });

            $matrix.on('click', function(e) {
                $("#J_animation").toggle();
                $("#J_pic").toggle();
            });

            $("#J_img").on('click', function() {
                $(this).toggleClass("transform-matrix");
            });
        },
        canvas: function() {
            var canvas=document.getElementById('canvas');
            var ctx=canvas.getContext('2d');
            var x, y;
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


            ctx.stroke();
        }
    };
    win.Transform = Transform;
})(window);