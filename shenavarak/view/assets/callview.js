 jQuery(document).ready(function($){


      $('.call_button').on('click' , function(){
        $(this).toggleClass('pluser');
        $('.dw-open-caller').toggle(200);
        $('.dw-close-caller').toggle(200);
        $('.call_main').toggleClass('showe');
      });

    });