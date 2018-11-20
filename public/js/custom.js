$(document).ready(function(){

    $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


   $('.customer').click(function(){

    var project_id = $(this).attr("id");
    $.ajax({
        url:APP_URL+"/customerForm/add",
        method:"POST",
        data:{'project_id' : project_id},
        success:function(data){

          $('#customer_form').html(data);
            console.log(data);
        }
    });

   });



});