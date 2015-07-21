/**
 * Created by bridark on 20/06/15.
 */
$(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active')
    });
    $('#noty').html($('#offers').children('a').length);
    //Contact form
    $('#contactForm').submit(function (event) {
        event.preventDefault();
        var form = $(this);
        $.ajax({
            method:'POST',
            url:'mail.php',
            data:form.serialize(),
            success:function(response){
                alert('Message successfully Sent, Thank You!');
            }
        })
    });
    //$('.get-quote').click(function (evt) {
    //    evt.preventDefault();
    //    $('#contactForm').submit();
    //});
});