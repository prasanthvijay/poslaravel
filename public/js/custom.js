$(document).ready(function(){

    $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


   $('.showroom').click(function(){

      var showroom_id = $(this).attr("data-sh_id");
      $.ajax({
          url:APP_URL+"/showroomForm/add",
          method:"POST",
          data:{'showroom_id' : showroom_id},
          success:function(data){
            $('#showroom_form').html(data);
          }
      });

   });
  
});

/** Form submit  */
$(document).on('click','.showroom_form_submit',function(e) {

  e.preventDefault();
  var sh_id = $(this).attr('data-sh_id');
  var showroom_data = "";
  var url = "";

  if(sh_id){
    showroom_data = $("#showroom_post_form_"+sh_id);
    url = APP_URL+'/showroom/update/'+sh_id;
  }else{
    showroom_data = $("#showroom_post_form")
    url = APP_URL+'/showroom/store';
  }
  
  $.ajax({
      type: "patch",
      url: url,
      data:showroom_data.serialize(),
      success: function(data) {
        if(!data.message){
          showroom_data[0].reset();
        }
      }
  });
});
