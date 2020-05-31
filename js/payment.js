$(document).ready(function (e) {
    $('.testsss').click(function (e) {
        let arr = {}
        arr['request'] = {
            'response_url': 'https://api.fondy.eu/responsepage/',
            "order_id": "test8037875286",
            "order_desc": "Test payment",
            "currency": "RUB",
            "amount": "100",
            "signature": "07bc309047a56275f8d89ae222e2af0ceb94fe79",
            "merchant_id": "1"
        }
        $.ajax({
            type: "POST",
            url: "https://api.fondy.eu/api/checkout/redirect/s",
            data: arr,
            dataType: "json",
            success: function (response) {
                console.log(response)
            }
        });
    
    })
})