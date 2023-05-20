$(function() {
    $('.allworks_refine_option').on('click', function(){
        $('.selected').removeClass('selected');
        $(this).addClass('selected');
        var selected = "."+$('.selected').attr('id');
        $('.all').css('display','none');
        $(selected).css('display','block');
    });
});