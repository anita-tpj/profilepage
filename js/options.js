jQuery(function($){
  var frame = wp.media({
    title: 'Select or Upload Logo Image',
    button: {
      text: 'Use this media'
    },
    multiple: false
  })
  $("#tap_uploadlogoimgbtn").click(function(e){
    e.preventDefault();

    frame.open();
  });
  frame.on('select', function(){
    var attachment = frame.state().get('selection').first().toJSON();//object with properties about elected Image
    $('input[name="tap_uploadlogoimg"]').val(attachment.url);
  });
});
