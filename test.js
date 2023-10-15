$(document).ready(function() {
    $('#form').submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'action.php',
            data: $(this).serialize()
        }).done(function() {
                alert('успех')
                document.querySelector('.confirm p').innerText = 'Ответы отправлены';
                document.querySelector('.confirm').classList.add('yes')
        }).fail(function (){
            alert('Произошла ошибка')
        })
        return false;
    })
    
})
