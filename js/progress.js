(function($){
    $(document).ready(function(){
    
        $(window).scroll(function(e){
            
            var scrollTop = $(this).scrollTop();
            var paraId = $('#xp-para').offset().top;
            var contactId = $('#contact').offset().top;
            var progressHtml = document.getElementById('progress_bar_html');
            var progressJs = document.getElementById('progress_bar_js');
            var progressPhp = document.getElementById('progress_bar_php');
            var progressJquery = document.getElementById('progress_bar_jQuery');
            var progressPs = document.getElementById('progress_bar_ps');
            if (scrollTop >= paraId)
            {
                progressHtml.classList.add('bar_html');
                progressJs.classList.add('bar_js');
                progressPhp.classList.add('bar_php');
                progressJquery.classList.add('bar_jQuery');
                progressPs.classList.add('bar_ps');
                
            }
            else if (scrollTop < paraId)
            {
                progressHtml.classList.remove('bar_html');
                progressJs.classList.remove('bar_js');
                progressPhp.classList.remove('bar_php');
                progressJquery.classList.remove('bar_jQuery');
                progressPs.classList.remove('bar_ps');
            }
            
            
                        
        });
        
        var n1 = 83;
        var n2 = 58;
        var n3 = 37;
        var n4 = 43;
        var n5 = 22;
        var cpt = 0;
        var duree = 2;
        var delta = Math.ceil(duree * 10);
        var node1 =  document.getElementById("percent1"); 
        var node2 =  document.getElementById("percent2");
        var node3 =  document.getElementById("percent3");
        var node4 =  document.getElementById("percent4");
        var node5 =  document.getElementById("percent5");
        
        function countdown1() {
          node1.innerHTML = ++cpt + "%";
          if( cpt < n1 ) {
             setTimeout(countdown1, delta);
          }
        }
        
        function countdown2() {
          node2.innerHTML = ++cpt + "%";
          if( cpt < n2 ) {
             setTimeout(countdown2, delta);
          }
        }
        
        function countdown3() {            
          node3.innerHTML = ++cpt + "%";
          if( cpt < n3 ) {
             setTimeout(countdown3, delta);
          }
        }
        
        function countdown4() {            
          node4.innerHTML = ++cpt + "%";
          if( cpt < n4 ) {
             setTimeout(countdown4, delta);
          }
        }
        
        function countdown5() {            
          node5.innerHTML = ++cpt + "%";
          if( cpt < n5 ) {
             setTimeout(countdown5, delta);
          }
        }

        window.addEventListener('scroll', () =>
            {
                if (cpt === 0 && window.scrollY > 2200)
                {
                    setTimeout(countdown1, delta);
                    setTimeout(countdown2, delta);
                    setTimeout(countdown3, delta);
                    setTimeout(countdown4, delta);
                    setTimeout(countdown5, delta); 
                }
            });
    });
})(jQuery);