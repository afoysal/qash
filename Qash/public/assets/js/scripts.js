//  Preloader
jQuery(window).on("load", function () {
    $('#preloader').fadeOut(500);
    $('#main-wrapper').addClass('show');
});


(function ($) {

    "use strict"

    //to keep the current page active
    $(function () {
        for (var nk = window.location,
            o = $(".settings-menu a, .menu a").filter(function () {
                return this.href == nk;
            })
                .addClass("active")
                .parent()
                .addClass("active"); ;) {
            // console.log(o)
            if (!o.is("li")) break;
            o = o.parent()
                .addClass("show")
                .parent()
                .addClass("active");
        }

    });

    $('[data-toggle="tooltip"]').tooltip();

})(jQuery);



