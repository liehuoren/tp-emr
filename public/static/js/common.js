<<<<<<< HEAD
function highlight_subnav(url) {
    var that = $('#mainnav-menu').find('a[href="' + url + '"]');
    
    that.closest('li').addClass('active-link');
    that.closest('ul').addClass('in').attr("aria-expanded","true");
    that.closest('ul').closest('li').addClass("active-sub active");
    
    
}

=======
function highlight_subnav(url) {
    var that = $('#mainnav-menu').find('a[href="' + url + '"]');
    
    that.closest('li').addClass('active-link');
    that.closest('ul').addClass('in').attr("aria-expanded","true");
    that.closest('ul').closest('li').addClass("active-sub active");
    
    
}

>>>>>>> 167bbffb22afb6112c63cb1c93c2905c2cdb6cef
