/**
 * image-contextmenu.js
 *
 * Released under LGPL License.
 *
 * License: http://takien.com/
 */

tinymce.PluginManager.add('image_contextmenu', function(editor) {
	editor.addMenuItem('image_contextmenu', {
		icon: 'image',
		text: 'Insert image',
		onclick: function() {
			document.getElementById('insert-media-button').click();
		},
		context: 'insert',
		prependToContext: true
	});
});
