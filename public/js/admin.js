function confirmDelete(id, url) {
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      if (id === '*') {
        doDeleteAll(url)
      }else{
        doDelete(id, url + id)
      }
    }
  })
}

async function doDeleteAll(url = '') {
  await axios.delete(url)

  window.location.reload(true)
}

async function doDelete(id = null, url = '') {
  if (!id) return;

  await axios.delete(url)

  window.location.reload(true)
}

$(document).ready(function() {

    $('.datatable').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    });

    $('#question-type').on('change', function () {
        if (this.value != 'input' && this.value != '') {
            $('#options').show()
            $('#options input').attr('required', '')
        }else{
            $('#options input').removeAttr('required')
            $('#options').hide()
        }
    })

    $('#delete-item').click(function () {
        let childLength = $('.options .option-item').length -1
        if (childLength > 0){
            $('#el-'+childLength).remove()
            $('#el-'+(childLength -1)+' input').focus()
        }
        if (childLength == 1){
            $(this).hide()
        }
    })

    $('#add-item').click(function () {
        let parent = $('.options')
        let childLength = $('.options .option-item').length + 1
        parent.append(
            '<div class="input-group mb-3 option-item" id="el-'+(childLength-1)+'">' +
                '<div class="input-group-prepend">' +
                    '<span class="input-group-text">Pilihan '+childLength+'</span>' +
                '</div>' +
                '<input type="text" class="form-control" name="options[]" required placeholder="Masukkan pilihan '+childLength+'">' +
            '</div>'
        )
        $('#el-'+(childLength -1)+' input').focus()
        if ((childLength - 1) == 1){
            $('#delete-item').show()
        }
    })

});
