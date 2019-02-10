Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  error:function(error){
  	alert('error');
  }
};
function show_adv_option(){
  $('#advance_option').slideDown();
  $('#adv_show').hide();
  $('#adv_hide').show();
  $('#start_date').datetimepicker({
      format: 'MM/DD/YYYY',
  });
}
function hide_adv_option(){
  $('#advance_option').slideUp();
  $('#adv_show').show();
  $('#adv_hide').hide();
}
$(document).ready(function () {
  	if($('.chat').length > 0){
  		$('.chat').scrollTop($('.chat')[0].scrollHeight);
  	}
    $('#start_at,#expires_at,#started,#finished').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#active_expires_at').datetimepicker({
        format: 'DD/MM/YYYY',
    });
    $('#active_expires_at').datetimepicker({
        format: 'DD/MM/YYYY',
    });
    $('.jobint').click(function(){
      // $(this).find('.popup-modal').click();
    });
    $(function () {
      $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
      });
      $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
      });
    });
});