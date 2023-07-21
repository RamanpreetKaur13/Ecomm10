$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //check current password is correct or not in real time
    $('#current_password').keyup(function(){
        var current_password = $('#current_password').val();
       $.ajax({
        type:'post',
        url:'check-current-password',
        data:{current_password:current_password},
        success:function(resp){
           if (resp=='true') {
            $('#verify_current_password').html('Password is correct');
           } else {
            $('#verify_current_password').html('Password is Incorrect');

           }

        },
        error:function(){
           
        }
       });
    });
});
