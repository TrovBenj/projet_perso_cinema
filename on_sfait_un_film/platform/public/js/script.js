/*ANIMATIONS VHS page SEARCH*/

$('.icons img').click(function() {
    var $icon = $(this).attr('id');
    var $vhs = $(this).next();
    if($icon != 'vhs') {
        if ($("input[type=checkbox][value=" + $icon + "]").is(':checked')) {
            $("input[type=checkbox][value=" + $icon + "]").attr('checked', false);
            $(this).css({
                'filter': 'brightness(1)',
                '-webkit-filter': 'brightness(1)',
                '-moz-filter': 'brightness(1)',
                '-o-filter': 'brightness(1)',
                '-ms-filter': 'brightness(1)'
            });
            $($vhs).animate({left: '-=6%'}, 600);
        }
        else if(document.documentElement.clientWidth < 1000) {
            $("input[type=checkbox][value=" + $icon + "]").attr('checked', true);
            $(this).css({
                'filter': 'invert(20%)',
                '-webkit-filter': 'brightness(0.8)',
                '-moz-filter': 'brightness(0.8)',
                '-o-filter': 'brightness(0.8)',
                '-ms-filter': 'brightness(0.8)'
            });
            $('.vhs').css({
                'filter': 'brightness(1)',
                '-webkit-filter': 'brightness(1)',
                '-moz-filter': 'brightness(1)',
                '-o-filter': 'brightness(1)',
                '-ms-filter': 'brightness(1)'
            });
        }
        else {
            $("input[type=checkbox][value=" + $icon + "]").attr('checked', true);
            $(this).css({
                'filter': 'invert(10%)',
                '-webkit-filter': 'brightness(0.9)',
                '-moz-filter': 'brightness(0.9)',
                '-o-filter': 'brightness(0.9)',
                '-ms-filter': 'brightness(0.9)'
            });
            $('.vhs').css({
                'filter': 'brightness(1)',
                '-webkit-filter': 'brightness(1)',
                '-moz-filter': 'brightness(1)',
                '-o-filter': 'brightness(1)',
                '-ms-filter': 'brightness(1)'
            });
            $($vhs).animate({left: '+=6%'}, 600);
        }
    }
});
/*Bulles d'info page SEARCH*/

var $anim = 0;
if (document.documentElement.clientWidth > 1000) {
    $('.icons img').mouseenter(function() {
        if($(this).attr('id') != 'vhs') {
            var text = $(this).attr('alt');
            if($anim == 0) {
                $('#searchinfo').animate({opacity: 0.85}, 250, function () {
                    $anim = 1;
                });
            };
            $('#searchinfo .panel-body p').html(text);
        }
    });
    $('.icons img').mouseout(function() {
        if($anim == 1) {
            $('#searchinfo').animate({opacity: 0}, 0, function () {
                $anim = 0;
            });
        };
    });
}
else if(document.documentElement.clientWidth < 1000) {
    $('.icons img').click(function() {
        if($(this).attr('id') != 'vhs') {
            var text = $(this).attr('alt');
            if($anim == 0) {
                $('#searchinfo').animate({opacity: 0.9}, 200, function () {
                    $anim = 1;
                    setTimeout(function () {
                        $('#searchinfo').animate({opacity: 0}, 100, function () {
                            $anim = 0;
                        });
                    }, 1500);
                });
            }

            $('#searchinfo .panel-body p').html(text);
        };
    });
}

$('form[class=movieChecked]').submit(function(event) {
    event.preventDefault();
    var $html = $(this).parent('div').parent('section');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        data: $(this).find('input[name=movie]'),
        success: function(html) {
            $html.fadeOut(1000);
        }
    })
});

$('form[class=mymovie]').submit(function(event) {
    event.preventDefault();
    var $button = $(this).find('button');
    var $div = $(this).parent().prev('div');
    var $html = $(this).parent().next('div').find('p');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        data: $(this).find('input[name=mymovie]'),
        success: function(html) {
            $button.fadeOut(1000,function() {
                $button.css('visibility','hidden');
                $button.css('display','block');
            });
            $html.fadeOut(1000);
        }
    })
})
