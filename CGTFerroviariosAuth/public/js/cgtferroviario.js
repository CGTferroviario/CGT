$('.carousel').on('slid.bs.carousel', function () {
    var carouselData = $(this).data('bs.carousel');
    var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));

    $('.result p')
      .removeClass('active-p')
      .eq(currentIndex)
      .addClass('active-p');
    });
