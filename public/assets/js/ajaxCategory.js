$('.categories-filter a').click(function (e) {
    e.preventDefault();
    const id = this.dataset.id
    $.get(`http://localhost/lab/projet_platz/public/ajax/categories/${id}`)
    .done((data) => {
        $('#main-container-image').html(data)
        $('#more').remove()
    })
})