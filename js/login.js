$(document).ready(function(){
    $('.form-login').submit(function (e) {  
        e.preventDefault();
        let form = $(this)
        $.ajax({
            type: "POST",
            url: "/login/loginUser",
            data: form.serialize(),
            
            success: function (result) {
                let data = JSON.parse(result)
                if(data.status === 'success') {
                    $(location).attr('href','/adminpanel');
                } else {
                    alert('Неправильный логин или пароль. Внимательно!')
                }
            }
        });
    })
})