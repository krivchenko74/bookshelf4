$(document).ready(function() {
    $('#form').submit(function () {
        $ajax({
            type: 'POST',
            url: 'action.php',
            data: $(this).serialize()
        }).done(function() {
                alert('успех');
                console.log('успех');
                document.querySelector('.confirm p').innerText = 'Ответы отправлены';
                document.querySelector('.confirm').classList.add('yes')

        })
        return false;
    })
    
})
