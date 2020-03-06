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

});