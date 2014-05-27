jQuery(function() {
  // Removed gallery-item class for facebook icon so that
  // zoomOverlay doesn't do anything to it.
  // But add the class back after page load so it gets to keep styling.
  jQuery(".gallery-item-facebook").addClass('gallery-item');
});
