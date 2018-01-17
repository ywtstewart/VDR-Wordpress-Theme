// Script 1


jQuery(function($) {
    $("[data-toggle=popover]").popover();

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var content = button.data('content');
        var title = button.data('title');
        var imgUrl = button.data('thumbnail');
        // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text(title);
        modal.find('.modal-txt').html(content);
        modal.find('.modal-img').css("background-image", "url(" + imgUrl + ")");
        modal.find('.modal-img').html("<h2>" + title + "</h2>");

    });

    $(document).ready(function(){
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 1500, 'swing', function () {
                window.location.hash = target;
            });
        });
    });
});



