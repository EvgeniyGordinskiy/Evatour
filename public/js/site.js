function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
$(function() {

    $('#phone').inputmask({
        "mask": "+38 (999) 999-9999"
    });
    $('.first').css({height:$(window).height()});

    $(document).on('scroll',function(event){
        if($(window).scrollTop() == 0){
            $('header').removeClass('active');
            $('.btn_top').addClass('btn_top_active');
        }else{
            $('header').addClass('active');
            $('.btn_top').removeClass('btn_top_active');
        }
    });

    $('.submitForm').on('click', function(event){
        event.preventDefault();
        var error = 0;
        var lastError=false;
        var form = $('#formReq');
               form.find('.error').remove();
               $.each(form.serializeArray(),function(){
                   var element = $('[name='+$(this)[0].name+']');
                   element.css({'border-color':'black'});
                   if($(this)[0].name != 'comment') {
                       if ($(this)[0].name == 'mail') {
                           var email = form.find('input[name="mail"]');
                           if (typeof (email) != 'undefined') {
                               if (!isEmail(email.val())) {
                                   error = 1;
                                   lastError = email;
                                   email.css({'border-color': 'red'}).parent().append(
                                       '<p class="error" style="color:red">Ошибка при вводе email</p>');
                               }
                           }
                       } else if ($(this)[0].name == 'phone') {
                           $(this)[0].value = $(this)[0].value.replace(/[^0-9]/g, '');
                           if ($(this)[0].value.length < 12) {
                               error = 1;
                               lastError = element;
                               element.css({'border-color': 'red'}).parent().append(
                                   '<p class="error" style="color:red">Не полный номер</p>');
                           }
                       } else if ($(this)[0].value.length == 0) {
                           error = 1;
                           lastError = element;
                           element.css({'border-color': 'red'}).parent().append(
                               '<p class="error" style="color:red">Поле не может быть пустым</p>');
                       }
                   }
               });

        if(lastError){
            $('html, body').animate({
                scrollTop: lastError.offset().top - 250
            }, 500);
        }
        if(error == 0){
            form.submit();
        }
        console.log('dfs');
    });


});