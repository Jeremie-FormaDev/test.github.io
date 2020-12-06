(function($){
    $(document).ready(function(){
        
        var scrollY = function (){
            var supportPageOffset = window.pageXOffset !== undefined;
            var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
            return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
        };
        
        var element = document.querySelector('#navbar');
        var top = element.getBoundingClientRect().top + scrollY() + 70;
        var onScroll = function (){
            if (scrollY() > top){
                element.classList.add('fixed');
            }else{
                element.classList.remove('fixed');                
            }
        };
        window.addEventListener('scroll', onScroll);
    });
})(jQuery);