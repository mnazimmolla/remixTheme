(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton( 'my_mce_button', {
			text: 'Youtube Video',
			icon: false,
							onclick: function() {
								editor.windowManager.open( {
									title: 'Insert Youtube Video Shortcode',
									body: [
										{
											type: 'textbox',
											name: 'box_padding',
											label: 'Button Padding',
											value: ''
										},
										{
											type: 'textbox',
											name: 'box_margin',
											label: 'Button Margin',
											value: ''
										},
										{
											type: 'textbox',
											name: 'box_border',
											label: 'Button Border Color',
											value: ''
										},
										{
											type: 'textbox',
											name: 'box_background',
											label: 'Button Background Color',
											value: ''
										},
									
										
									],
									onsubmit: function( e ) {
										editor.insertContent( '[button padding="' + e.data.box_padding + '" margin="' + e.data.box_margin + '" border="' + e.data.box_border + '" background="' + e.data.box_background +'"]');
									}
								});
							}
		});
	});
})();