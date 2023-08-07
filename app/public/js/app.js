require('../../resources/js/bootstrap');

ページトップ
var px_change =1;
window.addEventListener('scroll', function(e) {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if ( scrollTop > px_change ) {
        document.getElementById( "page_top" ).classList.add( "show" );
    } else {
        document.getElementById( "page_top" ).classList.remove( "show" );
    }
});
document.getElementById( "page_top" ).addEventListener('click', function(e) {
    anime.remove("html, body");
    anime({
        targets: "html, body",
        scrollTop: 0,
        dulation: 600,
        easing: 'easeOutCubic',
    });
    return false;
});