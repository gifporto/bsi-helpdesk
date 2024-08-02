jQuery(document).ready(function() {  
    var $profiler = $('.profiler_menu'); 
    var fieldset = $('#codeigniter_profiler').find('fieldset');
    $profiler.click(function(e){
        that = $(this).attr('href');
        //$(id_profiler).show();
        $.each(fieldset, function(idx, val){
            if($(this).hasClass('show')) {
                $(this).removeClass('show');
            }
            $(this).hide();
        });

        if(that != 'collapse_all') {
            $(that).addClass('show').show();
        }
    });
});
