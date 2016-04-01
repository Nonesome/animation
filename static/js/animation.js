/**
 * Created by nonesome on 16/3/30.
 */
;(function(win) {
    var Animation = {
        init: function() {
            Animation._bind();
        },
        _bind: function() {
            var $sprite = $("#J_sprite"),
                $list = $("#J_list");

            $list.on('click', '.show', function(e) {
                e.preventDefault();
                var _this = $(this),
                    className = _this.text();
                if(className != 'animation-fill-mode' && ~$sprite[0].className.indexOf('animation-fill-mode')) {
                    $sprite.removeClass('animation-fill-mode');
                } else if(className == 'animation-play-state') {
                    $sprite.removeClass('animation-play-state');
                    return false;
                } else if(/animation-/.test($sprite[0].className)) {
                    return false;
                }
                $sprite.addClass(className);
            });

            $sprite.on('animationend', function() {
                var _this = $(this);
                //_this.removeClass(function(index, old) {
                //    console.log(old + ' test ', old.match(/sprite\d/g).join(' '));
                //    return old.match(/sprite\d/g).join(' ');
                //});
                if(~$sprite[0].className.indexOf('animation-fill-mode')) {
                    return false;
                }
                _this[0].className = 'sprite';
            });
        }
    };
    win.Animation = Animation;
})(window);