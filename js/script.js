/* Author:
 * Simon Kohlmeyer <simon.kohlmeyer@mayflower.de>
 * Reno Reckling <reno.reckling@mayflower.de>
 */
$().ready(function() {
  // Initialize screenshot slideshow
  $("#slides").slides({
    generatePagination: false,
    randomize: true,
    play: 4000,
    crossfade: true,
    fadeSpeed: 700,
    effect: 'fade'
  });
  // initiate colorbox for the images in the slideshow
  $("a[rel='screenshot']").colorbox();
    $.localScroll();

    $.getScript("http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js",
        function() {
    $("#download").tooltip({
        effect: 'fade',
        position: 'top center',
        relative: true
        })
    });
});
