function enviar_correo(id_post) {
    (function($) {
        $.confirm({
            title: 'Enviar información!',
            content: '' +
                '<form action="" class="formName">' +
                '<div class="form-group">' +
                '<label>Ingresa tu correo electronico</label>' +
                '<input type="text" id="email_cliente" placeholder="Tu email" class="name form-control" required />' +
                '</div>' +
                '</form>',
            buttons: {
                formSubmit: {
                    text: 'Enviar',
                    btnClass: 'btn-blue',
                    action: function() {
                        var email = this.$content.find('#email_cliente').val();
                        if (!email) {
                            $.alert('El campo email es requerido');
                            return false;
                        }
                        let params = {
                            "action": "ws_enviar_email_producto",
                            "id_post": id_post,
                            "email": email
                        };
                        $.ajax({
                            type: "post",
                            url: 'http://localhost/Trabajo/wp-admin/admin-post.php',
                            data: params,
                            success: function(result) {
                                if (result.status == 'OK') {
                                    jQuery.alert({
                                        title: 'Notificación!',
                                        content: result.message,
                                    });
                                } else {
                                    jQuery.alert({
                                        title: 'ERROR!',
                                        content: result.message
                                    });
                                }
                                window.location.reload();
                            }
                        });
                    }
                },
                cancel: function() {
                    //close
                },
            },
            onContentReady: function() {
                // bind to events
                var jc = this;
                this.$content.find('form').on('submit', function(e) {
                    // if the user submits the form by pressing enter in the field.
                    e.preventDefault();
                    jc.$$formSubmit.trigger('click'); // reference the button and click it
                });
            }
        });
    })(jQuery);
}