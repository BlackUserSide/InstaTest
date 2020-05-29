$(document).ready(function () {
    $('.btn-remove-link').click(function (e) {
        let id = $(this).attr('id')
        $('.hiddenId').val(id)
        e.preventDefault()
        $('.hidden-form-service').arcticmodal()
        $.ajax({
            type: "post",
            url: "/adminpanel/dataSerf",
            data: {id: id},
            dataType: "json",
            success: function (response) {
                let arr = []
                $.each(response, function (index, val) { 
                    
                    arr['id'] = val['id']
                    arr['name'] = val['name']
                    arr['price'] = val['price']
                    arr['oldPrice'] = val['oldPrice']
                    
                }); 
                let a = arr['name']
                let b = arr['price']
                let c = arr['oldPrice']
                $('.oldnameService').val(a)
                $('.oldpriceServ').val(b)
                $('.oldoldPrice').val(c)
                
            }
        });
    })
    $('.hidden-form-service').submit(function(e) { 
        e.preventDefault()
        let name = ''
        let price = ''
        let oldPrice = ''
        if($('.nameService').val() == ''){
            name = $('.oldnameService').val()
        }else{
            name = $('.nameService').val()
        }
        if($('.priceServ').val() == ''){
            price = $('.oldpriceServ').val()
        } else {
            price = $('.priceServ').val()
        }
        if($('.oldPrice').val() == ''){
            oldPrice = $('.oldnameService').val()
        } else{
            oldPrice = $('.oldPrice').val()
        }
        let id = $('.hiddenId').val()
        $.ajax({
            type: "post",
            url: "/adminpanel/updateService",
            data: {id: id,name: name, price: price, oldPrice: oldPrice},
            dataType: "json",
            success: function (data) {
                
                $('.box-modal_close').trigger('click')
            }
        });
    })
    $('.dell-btn').click(function(e) {
        let id = $('.hiddenId').val()
        e.preventDefault()
        $.ajax({
            type: "post",
            url: "/adminpanel/delProd",
            data: {id: id},
            dataType: "json",
            success: function (data) {
                
            }
        });
    })
    $('.log-out').click(function(e) {
        $.ajax({
            type: "post",
            url: "/adminpanel/logout",
            dataType: "dataType",
            success: function (response) {
                $(location).attr('href', '/');
            }
        });
    })
})