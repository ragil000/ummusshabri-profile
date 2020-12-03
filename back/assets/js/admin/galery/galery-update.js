// remove all active menu
$('.nav-link').removeClass('active')
$('.nav-link').attr('aria-expanded', false)
$('.collapse').removeClass('show')
// sett active menu
$('#galery').addClass('active')

$('.alert').delay(3500).fadeOut()

// var editor = new Simditor({
//     textarea: $('#editor')
// });
$('.toolbar-item.toolbar-item-image').hide()