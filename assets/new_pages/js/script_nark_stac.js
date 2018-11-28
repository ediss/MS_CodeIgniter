 var page = {
        init: function(){
            $('.close_popup').on('click', function(){
                $(this).parents('.popup').hide();
                $('#fade').hide();
            });
            $('.box-please-call-back, .guaranteed-conclusion .call-box, .box-consultation, .bespl-consult').find('.btn').on('click', function(){
                if ( $(this).parents('.bespl-consult').length ){
                    if ( $('#inputYourName').val() != '' && $('#inputContactPhone').val() != '' ){
                        $('#fade, #to-order-call').show();
                        $('#to-order-call .form-horizontal').hide();
                        $('#to-order-call .text').show();
                    }
                } else {
                    $('#fade, #to-order-call').show();
                    $('#to-order-call .form-horizontal').show();
                    $('#to-order-call .text').hide();
                    $('#name-input').val(''); 
                    $('#telephone-input').val('');
                }
            });
            $('#to-order-call .btn').on('click', function(){
                if ( $('#name-input').val() != '' && $('#telephone-input').val() != '' ){
                    $('#to-order-call .form-horizontal').hide();
                    $('#to-order-call .text').show();
                }
            });
            $('.tabs .btn-group .btn').on('click', function(){
                var index = $(this).parent().find('.btn').index($(this));
                $(this).addClass('selected').siblings('.btn').removeClass('selected');
                $(this).parents('.tabs').find('.tab-content').hide().eq(index).show();
            });
            $('#patients-reviews-slider ul').vulsaiSlider({
                 
                infinite: false, 
                transition: 'fades',
                prev: '#btn-prev-slide', 
                next: '#btn-next-slide'
            });
            $('.our-specialists .link').on('click', function(){
                if ( $(this).parents('.our-specialists').hasClass('active')){
                    $(this).find('span').html('Все специалисты');
                    $(this).parents('.our-specialists').removeClass('active');
                } else {
                    $(this).parents('.our-specialists').addClass('active')
                    $(this).find('span').html('Cвернуть');
                }
            });
        }
    }
    $(document).ready(function() {
        page.init();
        
    });