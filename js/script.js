/* Author:
 * Simon Kohlmeyer <simon.kohlmeyer@mayflower.de>
 */
$(function(){
  // Initialize screenshot slideshow
  $("#slides").slides({
    generateNextPrev: true,
    generatePagination: false
  });
  // initiate colorbox for the images in the slideshow
  $("a[rel='screenshot']").colorbox();
});






















