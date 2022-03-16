
    // $('#contact').submit(function (e) {
    //     e.preventDefault();
    //     $.get("http://localhost/lab/projet_platz/public/ajax/comments", {content, postID, pseudo})
    //     .done((data) => {
    //         $('#commentsShow').append(data)
    //     })
    // })

    $('#contact').submit(function(e) {
        e.preventDefault();
        $.get("http://localhost/lab/projet_platz/public/ajax/comments", {
          pseudo: "Pascal Lacroix",
          content: $('#commentContent').val(),
          postID: $('#postID').val()
        })
         .done(function (rep) {
            $('#commentsShow').append(rep)
                              .find('li:last-of-type')
                              .hide()
                              .slideDown();
         });
      });
        