/**
 * FileUpload - a TinyMCE image upload plugin base on jQuery File Upload plugin
 * fileupload/js/dialog.js
 *
 * Author: Marius Gebhardt
 *
 * Version: 0.1
 */
 
 $(function () {
	'use strict';

	$('#fileupload').fileupload({
		url: $('#uploadForm').attr('action')+'?_token='+top.Laravel.csrfToken,
		dataType: 'json',
		done: function (e, data) {
			if(data.result.success){
                top.tinymce.EditorManager.activeEditor.insertContent('<a href="' + data.result.location +'">'+data.result.location+'</a>');
			}

			top.tinymce.EditorManager.activeEditor.windowManager.close(window);
		},
		progressall: function (e, data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress .progress-bar').css(
				'width',
				progress + '%'
			);
		}
	}).prop('disabled', !$.support.fileInput)
	.parent().addClass($.support.fileInput ? undefined : 'disabled');
});
