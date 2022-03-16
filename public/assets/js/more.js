let offSet = 10;

    $('#more').click(function (e) {
        e.preventDefault();
        $.get("http://localhost/lab/projet_platz/public/ajax/more", {offSet})
        .done((data) => {
            $('#main-container-image').append(data)
            offSet+=10
        })
    })