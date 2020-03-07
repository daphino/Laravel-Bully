import Swal from 'sweetalert2'

window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    // window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.Toast = Toast
window.Swal = Swal
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
