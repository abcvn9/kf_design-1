(function() {
    (function() {
        // var $main = $('.main');
        // var $footer = $('.footer');
        function _checkPageHeight() {
            var winHeight = $(window).height();
            var headerHeight =  $('.header').outerHeight(true);
            var mainHeight = $('.main').outerHeight(true);
            var footerHeight = $('.footer').outerHeight(true);
            var documentHeight = $(document).height();
            var totalHeight = (headerHeight+footerHeight+mainHeight);
            var mainContentHeight = 'auto';
            if(totalHeight>winHeight){
                $('.main').removeAttr('style').removeClass('d-flex align-items-center');
            }else{
                mainContentHeight = (winHeight-(headerHeight+footerHeight));
                $('.main').css({'height':mainContentHeight+'px'}).addClass('d-flex align-items-center');
            }

        }
        $(window).on('load resize', function() {
            _checkPageHeight();
        });
    })();
})();