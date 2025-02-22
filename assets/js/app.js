/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
//require('/../styles/app.scss');
//const getNiceMessage = require('./get_nice_message');
import '../styles/app.scss';
import getNiceMessage from "./component/get_nice_message";
import $ from 'jquery';
import 'bootstrap'; // add functions to jQuery
//import 'bootstrap/dist/js/bootstrap.bundle.js';  // or .min.js for minified version

// uncomment to support legacy code
//global.$ = $;

// start the Stimulus application
import '../bootstrap';

console.log(getNiceMessage((5)));

$('.dropdown-toggle').dropdown();
$('.custom-file-input').on('change', function(event) {
    var inputFile = event.currentTarget;
    $(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
});

