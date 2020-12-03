// remove all active menu
$('.nav-link').removeClass('active')
$('.nav-link').attr('aria-expanded', false)
$('.collapse').removeClass('show')
// sett active menu
$('#parent-nav-galery').addClass('active')
$('#parent-nav-galery').attr('aria-expanded', true)
$('#nav-galery').addClass('show')
$('#child-nav-galery-1').addClass('active')

$('.alert').delay(3500).fadeOut()

function detailModal(id) {
    $.get(base_url+'admin/galery/detail/foto-kegiatan/'+id).then((result) => {
        result = JSON.parse(result)
        let image = '<img class="card-img-top" style="width:100%; height:200px; object-fit:cover;" src="'+base_url+'uploads/images/'+result[0].file+'" alt="Gambar">'
        $('#title').html(result[0].title)
        $('#date').html(_dateID(result[0].created_at))
        $('#image').html(image)
        $('#content').html(result[0].content)
        $('#button-detail-modal').click()
    })
}

function beforeDelete(id) {
    Swal.fire({
        title: 'Anda yakin?',
        text: "Anda akan menghapus data ini.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.value) {
          window.location = base_url+'admin/galery/delete/foto-kegiatan/'+id
        }
      })
}