$('nav nav-link').ready(function () {
    $('nav nav-link').click(function(e) {

        $('nav nav-link').removeClass('active');

        var $parent = $(this).parent();
        $parent.addClass('active');
        e.preventDefault();
    });
});
