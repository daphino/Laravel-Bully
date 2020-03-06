import Swal from 'sweetalert2'

window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    // window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.Swal = Swal
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';