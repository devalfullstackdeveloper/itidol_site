jQuery(document).ready(function($){

  $(document).ready(function() {
    var checkbox_checked =document.getElementById("is_tl");  
    if($('#is_tl').prop('checked')== true){
       $("#dynamic_field").show();
    }
    else{
      $("#dynamic_field").hide();
    }
    
  }); 

  $('#is_tl').change(function () {
    if (this.checked){
      $("#dynamic_field").show();
    }
    else{
       $("#dynamic_field").hide();
    }
    });

  // var i=1;

  $('#add').click(function()
  {
    var i = ($('#dynamic_field tr').length)+1;
    // i++;
    $('#dynamic_field').append('<tr id="row'+i+'"><td><label for="hcf_ques">Service Question</label><input id="wp_custom_ques" type="text" name="wp_custom_ques[]"></td><td><label for="hcf_ans">Service Answer</label><textarea id="hcf_ans" name="wp_custom_ans[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });

  $('#choose_add').click(function()
  {
    var i = ($('#dynamic_field_choose tr').length)+1;
    // i++;
    $('#dynamic_field_choose').append('<tr id="rowchoose'+i+'"><td><label for="hcf_ques">Why Choose</label><input id="wp_custom_choose" type="text" name="wp_custom_choose[]"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_choose">X</button></td></tr>');
  });
  
  $(document).on('click', '.btn_remove', function()
  {
    var button_id = $(this).attr("id");
    console.log(button_id); 
    $('#row'+button_id+'').remove();
  });

  $(document).on('click', '.btn_remove_choose', function()
  {
    var button_id = $(this).attr("id");
    console.log(button_id); 
    $('#rowchoose'+button_id+'').remove();
  });
  
  $('.checkbox-list').click(function() {
        $(this).siblings('input:checkbox').prop('checked', false);
    });
  
});