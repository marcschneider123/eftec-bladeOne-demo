var imagesLoaded = require('imagesloaded');

$(document).ready(function() {

    imagesLoaded(".twentytwenty-container-examples", function() {
        $(".twentytwenty-examples").twentytwenty({
            before_label: 'Original', // Set a custom before label
            after_label: 'Freigestellt', // Set a custom after label
            orientation: 'vertical', // Orientation of the before and after images ('horizontal' or 'vertical')
            no_overlay:true,
            move_slider_on_hover: true
        });
    });
    imagesLoaded(".twentytwenty-container-header", function() {
        $(".twentytwenty-container-header").twentytwenty({
            default_offset_pct: 0.75,
            no_overlay:true,
            move_slider_on_hover: true
            // before_label: '', // Set a custom before label
            // after_label: '', // Set a custom after label
        });
    });
});