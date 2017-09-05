function highlight_subnav(url) {
    var that = $('#mainnav-menu').find('a[href="' + url + '"]');
    
    that.closest('li').addClass('active-link');
    that.closest('ul').addClass('in').attr("aria-expanded","true");
    that.closest('ul').closest('li').addClass("active-sub active");
    
    
}

