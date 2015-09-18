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
                if(response === 'true'){
                    alert("Form successfully submitted, Thank you!");
                    window.location.href = "index.html";
                }else{
                    alert("There was an error during submission please try again");
                }
            }
        })
    });
    //Quote form
    $('#quoteBtn').click(function (event) {
        event.preventDefault();
        var form = $("#quoteForm");
        $.ajax({
            method:'POST',
            url:'mail.php',
            data:form.serialize(),
            success:function(response){
                if(response === 'true'){
                    alert("Form successfully submitted, Thank you!");
                    window.location.href = "index.html";
                }else{
                    alert("There was an error during submission please try again");
                }
            }
        })
    });
    //$('.get-quote').click(function (evt) {
    //    evt.preventDefault();
    //    $('#contactForm').submit();
    //});
});