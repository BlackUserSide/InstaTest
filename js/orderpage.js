$(document).ready(function () {
    $('input[type="checkbox"]').change(function (e) {
        e.preventDefault();
        let checkbox = $(this)
        let status = ''
        let id = checkbox.attr('iditem')
        if (checkbox.is(':checked')) {
            status = '1'
        } else {
            status = 0
        }
        $.ajax({
            type: "post",
            url: "/order/changeAdminStatus",
            data: { status: status, id: id },
            dataType: "json",
            success: function (result) {
                location.reload()
            }
        });
    })

    function removeCheckbos() {
        let checkbox = $('input[type="checkbox"]')
        checkbox.each(function(){
            let tap = $(this).attr('status-select');
            
            if(tap == '1' ){
                $(this).prop('checked', true)
            }
        })
        
    }
    removeCheckbos()
})