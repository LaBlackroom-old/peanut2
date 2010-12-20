if(!Modernizr.inputtypes.color)
{
  $('input[type=color]').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val('#' + hex);
		$(el).ColorPickerHide();
	}
  })
}