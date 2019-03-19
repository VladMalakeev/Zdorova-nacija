var target = $('#mainLinks');
var targetPos = target.offset().top;
var winHeight = $(window).height();
var scrollToElem = targetPos - winHeight;
$(window).scroll(function(){
    var winScrollTop = $(this).scrollTop();
    if(winScrollTop > scrollToElem){
        var buttons = $('#float_button');
        buttons.style.display = 'none';
    }
});