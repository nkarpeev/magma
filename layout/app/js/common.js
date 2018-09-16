$(function() {

  $(".catalog__item-button--open, .catalog__item-button--close").on("click", function () {
    $(this).closest(".catalog__item").toggleClass("open");
  });

  $('.certificates__item__link').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
      verticalFit: true
      
		}
  });
  
  function svgProcess() {
    $('.svg').each(function () {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");
        $.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
            // Remove any invalid XML tags
                  $svg = $svg.removeAttr('xmlns:a');
            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function () {
                $svg.attr(this.name, this.value);
            });
            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml').done(function () {
            if (typeof updateCorpus !== "undefined") {
                updateCorpus();
            }
        });
    });
}
svgProcess();
});
