/* Author:
 * Simon Kohlmeyer <simon.kohlmeyer@mayflower.de>
 */

$().ready(function() {
    $.localScroll();

    $("#download").tooltip({
        effect: 'fade',
        position: 'bottom center',
        relative: true
    });
});

$(function(){
    // Initialize screenshot slideshow
    $("#slides").slides({
        generateNextPrev: true,
        generatePagination: false
    });
    // initiate colorbox for the images in the slideshow
    $("a[rel='screenshot']").colorbox();
});


