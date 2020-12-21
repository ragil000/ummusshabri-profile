// remove all active menu
$('.nav-link').removeClass('active')
$('.nav-link').attr('aria-expanded', false)
$('.collapse').removeClass('show')
// sett active menu
$('#news').addClass('active')

$('.alert').delay(3500).fadeOut()

// simditor
// var editor = new Simditor({
//     textarea: $('#editor')
// });
// $('.toolbar-item.toolbar-item-image').hide()
// end

// ckditor5
ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then((e) => {
            $('.ck-file-dialog-button').hide()
        })
        .catch( error => {
            console.error( error );
        } )
// end

$('#input-image').change(function() {
    let image_name  = this.files[0].name
    $('.custom-file-label').html(image_name)
})