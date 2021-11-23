var Upload = function (file, uploadUrl, inputElement) {
    this.file = file;
    this.uploadUrl = uploadUrl;
    console.log(inputElement);
    this.inputElement = inputElement;
};

Upload.prototype.getType = function() {
    return this.file.type;
};
Upload.prototype.getSize = function() {
    return this.file.size;
};
Upload.prototype.getName = function() {
    return this.file.name;
};
Upload.prototype.doUpload = function () {
    var that = this;
    var formData = new FormData();

    // add assoc key values, this will be posts values
    formData.append("file", this.file, this.getName());
    formData.append("upload_file", true);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: this.uploadUrl,
        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
                myXhr.upload.addEventListener('progress', that.progressHandling, false);
            }
            return myXhr;
        },
        success: function (data) {
            // your callback here
            jQuery(that.inputElement).parents('.input-group').find("input[name='upload_id']").attr('value', data.upload_id);
            jQuery(that.inputElement).parents('.input-group').find("input[name='filename']").attr('value', data.filename);
            let jsonData = {
                'upload_id': data.upload_id,
                'image_id': data.image_id
            };



            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // send request
            $.ajax({
                dataType: 'json',
                type: 'PUT',
                url: jQuery(that.inputElement).parents('.input-group').find("input[name='upload_id']").attr('data-url'),
                data: JSON.stringify({upload_id: data.upload_id}),
                contentType: 'application/json; charset=utf-8',
                success: function(data) { //change spelling here
                    console.log(data);
                    // e.target.setAttribute('contenteditable',false);
                },
                error: function() {
                    console.log("error again!");
                    alert('Пожалуйста, попробуйте другой файл!');
                }

            });

            setTimeout(function(){
                $(".progress-wrp").css({visibility: 'hidden'});
            }, 500);
        },
        error: function (error) {
            // handle error
            console.log(error);
            console.log("Dsad");
        },
        async: true,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        timeout: 60000
    });


};
Upload.prototype.doUploadImage = function () {
    var that = this;
    var formData = new FormData();

    // add assoc key values, this will be posts values
    formData.append("file", this.file, this.getName());
    formData.append("upload_file", true);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    console.log("ddddd");
    $.ajax({
        type: "POST",
        url: this.uploadUrl,
        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
                myXhr.upload.addEventListener('progress', that.progressHandling, false);
            }
            return myXhr;
        },
        success: function (data) {
            // your callback here

            jQuery(that.inputElement).parents('.input-group').find("input[name='image_id']").attr('value', data.upload_id);
            jQuery(that.inputElement).parents('.input-group').find("input[name='filename']").attr('value', data.filename);
            let jsonData = {

                'image_id': data.image_id
            };



            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // send request
            $.ajax({
                dataType: 'json',
                type: 'PUT',
                url: jQuery(that.inputElement).parents('.input-group').find("input[name='image_id']").attr('data-url'),
                data: JSON.stringify({image_id: data.image_id}),
                contentType: 'application/json; charset=utf-8',
                success: function(data) { //change spelling here
                    console.log(data);
                    // e.target.setAttribute('contenteditable',false);
                },
                error: function() {
                    console.log("error again!");
                    alert('Пожалуйста, попробуйте другой файл!');
                }

            });

            setTimeout(function(){
                $(".progress-wrp").css({visibility: 'hidden'});
            }, 500);
        },
        error: function (error) {
            // handle error
            console.log(error);

        },
        async: true,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        timeout: 60000
    });
};
Upload.prototype.progressHandling = function (event) {
    var percent = 0;
    var position = event.loaded || event.position;
    var total = event.total;
    var progress_bar_id = ".progress-wrp";
    if (event.lengthComputable) {
        percent = Math.ceil(position / total * 100);
    }
    // update progressbars classes so it fits your code
    $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
    $(progress_bar_id + " .status").text(percent + "%");
};
