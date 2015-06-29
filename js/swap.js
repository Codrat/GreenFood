 $('.recipesleft img').on("click", function() {
              var $this = $(this),
              $id = $this.attr('id'),
              $class = '.' + $('.rx-' + $id).attr('class').replace('hide', '');
  
              $('.rx-' + $id).removeClass('hide');
              $('segment[class*=rx]').not($class).addClass('hide');
});