/**
 * Created by bridark on 20/06/15.
 */
$(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active')
    });
    $('#noty').html($('#offers').children('li').length);
});