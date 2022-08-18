/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

 CKEDITOR.editorConfig = function( config ) {
	config.extraPlugins = 'find,youtube,flash,iframe,mediaembed,colorbutton,panelbutton';
	config.toolbarGroups = [

		{ name: 'document', groups: [ 'mode'] },
		//{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		//{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		//{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		//{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		//'/',
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.pasteFilter = 'plain-text';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';
	config.allowedContent = true;
	// config.extraAllowedContent = 'iframe[*]'
 	// config.allowedContent =
	//  'h1 h2 h3 p blockquote strong em;' +
	//  'a[!href];' +
	//  'img(left,right)[!src,alt,width,height];' +
	//  'script(left,right)[!src,charset,async];';
	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	config.filebrowserBrowseUrl = '/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/ckfinder/ckfinder.html?Type=Images';
	config.filebrowserFlashBrowseUrl = '/ckfinder/ckfinder.html?Type=Flash';
	config.filebrowserUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.removeButtons = 'Subscript,Superscript,Anchor,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,FontSize,Font,Styles,Templates,Save,NewPage,Preview,Print,ShowBlocks';

};