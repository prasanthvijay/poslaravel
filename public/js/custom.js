$(document).ready(function(){

    $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


   $('.showroom').click(function(){

      var project_id = $(this).attr("id");
      $.ajax({
          url:APP_URL+"/showroomForm/add",
          method:"POST",
          data:{'project_id' : project_id},
          success:function(data){

            $('#showroom_form').html(data);
          }
      });

   });
  
});
$(document).on('click','.showroom_form_submit',function() {
  var showroom_data = $("#showroom_post_form").serialize();
  $.ajax({
      type: "post",
      url: APP_URL+'/showroom/store',
      data:showroom_data,
      success: function(msg) {
      alert(msg);
      }
  });
});
