/**
 * Created by javier on 29/11/2016.
 */
$(document).ready(function () {
    $('label.tree-toggler').click(function () {
        $(this).parent().children('ul.tree').toggle(300);
    });
});