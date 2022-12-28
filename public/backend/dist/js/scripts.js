$(function (){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form[name="login"]').submit(function (event) {
        event.preventDefault();

        const form = $(this);
        const action = form.attr('action');
        const email = form.find('input[name="email"]').val();
        const password = form.find('input[name="password_check"]').val();

        $.post(action, {email: email, password: password}, function (response) {

            if(response.message) {
                console.log(response.message);
                swal('Atenção!', response.message,'warning');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }

            if(response.redirect) {
                window.location.href = response.redirect;
            }
        }, 'json');

    });

    // $(".deleteRecord").click(function(){
    //     var id = $(this).data("id");
    //     var token = $("meta[name='csrf-token']").attr("content");
    //
    //     $.ajax(
    //         {
    //             url: "admin/categories/"+id,
    //             type: 'DELETE',
    //             data: {
    //                 "id": id,
    //                 "_token": token,
    //             },
    //             success: function (response){
    //                 if(response.redirect) {
    //                     window.location.href = response.redirect;
    //                 }
    //             }
    //         });
    //
    // });

});
