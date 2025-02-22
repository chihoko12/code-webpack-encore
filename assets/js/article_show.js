import '../styles/article_show.scss';
import $ from 'jquery';
// import 'bootstrap'; when //  webpack.config.js .disableSingleRuntimeChunk() on is. Modules are not shared across the entry points.

$(document).ready(function() {
    $('js-like-article').tooltip();

    $('.js-like-article').on('click', function(e) {
        e.preventDefault();

        var $link = $(e.currentTarget);
        $link.toggleClass('fa-heart-o').toggleClass('fa-heart');

        $.ajax({
            method: 'POST',
            url: $link.attr('href')
        }).done(function(data) {
            $('.js-like-article-count').html(data.hearts);
        })
    });
});
