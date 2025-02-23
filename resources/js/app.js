import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import $ from 'jquery';

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

$(document).ready(function() {
    $('.toggle-status').on('click', function() {
        let button = $(this);
        let articleId = button.data('id');

        $.ajax({
            url: `/articles/${articleId}/toggle-status`,
            type: 'PATCH',
            data: {
                _token: csrfToken
            },
            success: function(response) {
                if (response.success) {
                    button.text(response.new_status);
                    if (response.new_status === 'published') {
                        button.removeClass('bg-green-500 hover:bg-green-600').addClass('bg-red-500 hover:bg-red-600');
                    } else {
                        button.removeClass('bg-red-500 hover:bg-red-600').addClass('bg-green-500 hover:bg-green-600');
                    }
                }
            }
        });
    });
});
