$(document).ready(function(){
    // variables
    var background_style = 'solid';
    var background_shape = 'square';
    var background_color = '#E8E8E8';
    var icon_style = 'solid';
    var icon_shape = 'heart';
    var icon_color = '#F34336';
    var icon_secondary_color = '#FFEA3B';
    var icon_size = '7';
    var icon_pos_x = '0';
    var icon_pos_y = '2';
    var icon_rotate = '0';
    var text_size = '0.2';
    var text_rotate = '0';
    var text_pos_x = '0';
    var text_pos_y = '0.25';
    // overlay
    $('.overlay').on('click', function() {
        $('.overlay, .submenu').fadeOut(); 
        $('body').toggleClass('fixed');
    });
    // tab-buttons
    $('.tab-buttons button').on('click', function() {
        $tab = $(this).attr('id');
        $tab = $tab.substr(-1);
        $('.tab-pages article').hide();
        $('.tab-buttons button').removeClass('active');
        $('#tab-page-' + $tab).show();
        $('#tab-btn-' + $tab).addClass('active');
    });
    // select
    $('.select').on('click', function() {
        $('.overlay').fadeToggle();
        $('body').toggleClass('fixed');
        $(this).next('.submenu').fadeToggle();
        $(this).toggleClass('active');
        $(this).find('svg').toggleClass('fa-rotate-180');
        if ($(this).parent().find('label').text() != 'color') {
            $(this).next('.submenu').css({left: $(this).offset().left});
            $(this).next('.submenu').width($(this).width());
        }
    });
    // option
    $('.option button').on('click', function() {
        $(this).parent().prev().find('p').text($(this).text());
        var face = $('.tab-buttons .active').find('p').text();
        var effect = $(this).parent().parent().find('label').text();
        if (face == 'Background') {
            if (effect == 'Style') {
                if ($(this).text() == 'gradient') {
                    background_style = 'solid';
                    $('#background-color-2').show();
                    $('#icon-background').addClass('fill-gradient-linear')
                } else {
                    background_style = $(this).text();
                    $('#background-color-2').hide();
                    $('#icon-background').removeClass('fill-gradient-linear')
                }
            } else if (effect == 'Shape') {
                background_shape = $(this).text();
            }
            $('#icon-background').addClass('fa-' + background_style);
            $('#background-shape .option svg').addClass('fa-' + background_style);
            $('#icon-background').addClass('fa-' + background_shape);
        } else if (face == 'Icon') {
            if (effect == 'Style') {
                icon_style = $(this).text();
            } else if (effect == 'Shape') {
                icon_shape = $(this).val();
            }
            $('#icon-icon').addClass('fa-' + icon_style);
            $('#icon-shape .option svg').addClass('fa-' + icon_style);
            $('#icon-icon').addClass('fa-' + icon_shape);
        } else if (face == 'Text') {
            if (effect == 'Style') {
                text_style = $(this).text();
            } else if (effect == 'Shape') {
                text_shape = $(this).val();
            }
            $('#icon-text').addClass('fa-' + icon_style);
            $('#icon-text').addClass('fa-' + icon_shape);
        }
    });
    // color picker
    $('#color-picker button').on('click', function() {
        $(this).parent().parent().prev().find('p').text($(this).val());
        var face = $('.tab-buttons .active').find('p').text();
        if (face == 'Background') {
            var effect = $(this).parent().parent().find('label').text();
            if (effect == 'Secondary color') {
                background_color = $(this).val();
                $('#linear-stop-2').css({'stop-color': $(this).val()});
                $('#icon-background').html = '';
            } else {
                background_color = $(this).val();
                $('#linear-stop-1').css({'stop-color': $(this).val()});
                $('#icon-background').html = '';
            }
        } else if (face == 'Icon') {
            var effect = $(this).parent().parent().find('label').text();
            if (effect == 'Secondary color') {
                icon_secondary_color = $(this).val();
            } else {
                icon_color = $(this).val();
            }
        } else if (face == 'Text') {
            text_color = $(this).val();
        }
        $('#icon-background').css({'color' : background_color});
        $('#icon-icon').css({'color': icon_color, '--fa-secondary-color': icon_secondary_color});
        $('#icon-text').css({'color': text_color});
    });
    // text
    $('#text-text').on('keyup', function(){
        $('#icon-text').html($(this).val());
    });
    // font
    $('.font button').on('click', function() {
        if ($(this).text() == 'bold') {
            if ($(this).hasClass('active')) {
                $('#icon-text').css({'font-weight': 'normal'});
                $(this).removeClass('active');
            } else {
                $('#icon-text').css({'font-weight': 'bold'});
                $(this).addClass('active');
            }
        }
        if ($(this).text() == 'italic') {
            if ($(this).hasClass('active')) {
                $('#icon-text').css({'font-style': 'normal'});
                $(this).removeClass('active');
            } else {
                $('#icon-text').css({'font-style': 'italic'});
                $(this).addClass('active');
            }
        }
        if ($(this).text() == 'underline') {
            if ($(this).hasClass('active')) {
                $('#icon-text').css({'text-decoration': 'none'});
                $(this).removeClass('active');
            } else {
                $('#icon-text').css({'text-decoration': 'underline'});
                $(this).addClass('active');
                $('#font-strikethrough').removeClass('active');
            }
        }
        if ($(this).text() == 'strikethrough') {
            if ($(this).hasClass('active')) {
                $('#icon-text').css({'text-decoration': 'none'});
                $(this).removeClass('active');
            } else {
                $('#icon-text').css({'text-decoration': 'line-through'});
                $(this).addClass('active');
                $('#font-underline').removeClass('active');
            }
        }
    })
    // slider
    $('#icon-size, #icon-rotate, #icon-pos-x, #icon-pos-y, #text-size, #text-rotate, #text-pos-x, #text-pos-y').on('mousemove', function() {
        var id = $(this).attr('id');
        if (id == 'icon-size') {
            icon_size = $(this).val();
        } else if (id == 'icon-rotate') {
            icon_rotate = $(this).val();
        } else if (id == 'icon-pos-x') {
            icon_pos_x = $(this).val();
        } else if (id == 'icon-pos-y') {
            icon_pos_y = $(this).val();
        } else if (id == 'text-size') {
            text_size = $(this).val();
        } else if (id == 'text-rotate') {
            text_rotate = $(this).val();
        } else if (id == 'text-pos-x') {
            text_pos_x = $(this).val();
        } else if (id == 'text-pos-y') {
            text_pos_y = $(this).val();
        }
        $('#icon-icon').attr('data-fa-transform', 'shrink-' + icon_size + ' rotate-' + icon_rotate + ' left-' + icon_pos_x + ' up-' + icon_pos_y);
        $('#icon-text').attr('data-fa-transform', 'shrink-' + text_size + ' rotate-' + text_rotate + ' left-' + text_pos_x + ' up-' + text_pos_y);
        $('#icon-text').css({'-webkit-transform': 'translate(calc(-50% + ' + text_pos_x + 'em), calc(-50% + ' + text_pos_y + 'em)) scale(' + text_size + ') rotate(' + text_rotate + 'deg)'})
    });
});