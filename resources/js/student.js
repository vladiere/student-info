$(document).ready(() => {
    $('#btn_submit').click((e) => {
        const formdata = $('#students-info').serialize();
        e.preventDefault();

        $.ajax({
            url: '/students',
            type: 'post',
            data: new FormData(formdata),
            success: function (data) {
                console.log(data)
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown)
            }
        })

    })
})
