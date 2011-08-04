/* Author:
 * Simon Kohlmeyer <simon.kohlmeyer@mayflower.de>
 */
$(function(){
  // Initialize screenshot slideshow
  $("#slides").slides({
    generatePagination: false,
    randomize: true,
    play: 6000,
    hoverPause: true,
    crossfade: true,
    fadeSpeed: 700,
    effect: 'fade'
  });
  // initiate colorbox for the images in the slideshow
  $("a[rel='screenshot']").colorbox();
});






















