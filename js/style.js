$(document).on('mouseover', '.eye-on-hover', function (event) {
    $(this).addClass('hoverImg');
    $(this).closest('i').show();
});

$(document).on('mouseout', '.eye-on-hover', function (event) {
    $(this).removeClass('hoverImg');
    $(this).closest('i').hide()
});