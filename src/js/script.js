// Script 1

jQuery(function($) {
  $("[data-toggle=popover]").popover();

  $('#mainModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var content = button.data('content');
    var title = button.data('title');
    var imgUrl = button.data('thumbnail');
    var permalink = button.data('link');
    // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text(title);
    modal.find('.modal-txt').html(content);
    modal.find('.modal-img').css("background-image", "url(" + imgUrl + ")");
    modal.find('.modal-img .modal-img__text').html(title);
    if (permalink != '') {
      var modalFooter = modal.find('.modal-footer')
      var btn = modalFooter.find('.btn__more');
      btn.attr('href', permalink);
      btn.removeClass('btn--hide');
    };
  });

  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]').not('[href="#0"]').click(function(event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length
        ? target
        : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });





});
