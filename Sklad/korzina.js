$(function() {
    const input = document.querySelector('#sesionid');
    $('.st11').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        $.ajax({
            url: '/Sklad/obrabotka.php',
            type: 'GET',
            data: {cart: 'add', id: id, userid: +input.value},
            dataType: 'json',
            success: function (res) {
                console.log(res);
                alert('Добавленно в корзину')
            },
            error: () => {
                alert('Вы уже добавили этот товар в корзину! Или не вошли в аккаунт!')
            }
        })
    })

    $(function () {
        const input = document.querySelector('#sesionid');
        $('.st12').on('click', function () {
            let id = $(this).data('id');
            console.log(id);
            $.ajax({
                url: '/Sklad/udalenie.php',
                type: 'GET',
                data: {cart: 'clear', id: id, userid: +input.value},
                // data: {cart:'clear', id: id, userid: +input.value},
                success:  (res) => {
                    this.parentElement.remove()
                },
            })
        })
    })
})
