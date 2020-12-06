(function($){
    
    $(document).ready(function(){
        
        $('#header__icon').on('click',function(e){
            
            e.preventDefault();
            //$('header').toggleClass('with--sidebar');
            
            var _this = $(this),
                parent = _this.parent(),
                menus = parent.find('.menu-resp');
            
            if ( _this.hasClass('active') ) {
                
                _this.removeClass('active');
                //menus.hide();
                
                menus.stop().fadeOut();
                
                //menus.css({
                //    'display' : 'none'
                //});
                
            }else{
                
                _this.addClass('active');
                //menus.show();
                
                menus.stop().fadeIn();
                
                //menus.css({
                //    'display' : 'block'
                //});
                
            }
            
            
        });
        
    });
    
    
    
    

})(jQuery);