$(function () {
    if ($('#contact-form').length) {

        var parsley = require('parsleyjs')
        require('parsleyjs/dist/i18n/de')

        //spamfilter
        $('input.required').removeAttr('required');
        window.BYTES_PER_MEGABYTE = 1048576;

        parsley
            .setLocale('de')
            .addValidator('maxFileSize', {
                validateString: function(_value, maxSize, parsleyInstance) {
                    if (!window.FormData) {
                        alert('Browser nicht unterstützt. Bitte aktualisieren Sie Ihren Browser!');
                        return true;
                    }
                    var files = parsleyInstance.$element[0].files;
                    return files.length != 1  || files[0].size <= maxSize * BYTES_PER_MEGABYTE;
                },
                requirementType: 'integer',
                messages: {
                    de: 'Dateien dürfen nicht größer als %s MB sein.',
                }
            })
            .addValidator('filemimetypes', {
                requirementType: 'string',
                validateString: function (value, filetypes, parsleyInstance) {

                    if (!window.FormData) {
                        alert('Browser nicht unterstützt. Bitte aktualisieren Sie Ihren Browser!');
                        return true;
                    }

                    var files = parsleyInstance.$element[0].files;

                    if (files.length == 0) {
                        return true;
                    }

                    var allowedMimeTypes = filetypes.replace(/\s/g, "").split(',');
                    //.psd workaround (mimetype is empty, check extension instead)
                    if (files[0].type == ''){
                        var fileext = files[0].name.split('.').pop();
                        return fileext == 'psd';
                    }
                    return allowedMimeTypes.indexOf(files[0].type) !== -1;
                },
                messages: {
                    de: 'Dateiformat nicht erlaubt.'
                }
            });

        $('#contact-form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('form .alert-info').toggleClass('d-none', !ok);
            $('form .alert-danger').toggleClass('d-none', ok);
        })
        .on('form:submit', function () {
            return true;
        });

        $('.custom-file-input').on('change',function(e){
            //get the file name
            var fileName = e.target.files[0].name;
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    }
});
