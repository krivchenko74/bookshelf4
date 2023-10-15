$(document).ready(function() {
    $('#form').submit(function () {
        $ajax({
            type: 'POST',
            url: 'action.php',
            data: $(this).serialize()
        }).done(function() {
            document.querySelector('.confirm').addEventListener('click', 
            function () {
                document.querySelector('.confirm p').innerText = 'Ответы отправлены';
                document.querySelector('.confirm').classList.add('yes')
            })
        })
        return false;
    })
    
})
