jQuery(function() {
  // Removed gallery-item class for facebook icon so that
  // zoomOverlay doesn't do anything to it.
  // But add the class back after page load so it gets to keep styling.
  // Also disable the cbox jQuery plugin so clicking will actually send user to facebook.
  jQuery(".gallery-item-facebook")
    .addClass('gallery-item')
    .find('a.cboxElement')
    .removeClass('cboxElement');
});
