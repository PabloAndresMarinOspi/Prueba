<?php
//Envia información de producto al correo del cliente
add_action('admin_post_nopriv_ws_enviar_email_producto', 'ws_enviar_email_producto');
add_action('admin_post_ws_enviar_email_producto', 'ws_enviar_email_producto');

function ws_enviar_email_producto(){
    $status = (object) array('status' => 'ERROR', 'message' => 'Ocurrio un error procesando la solicitud, intente mas tarde.');
    if(isset($_POST['id_post']) && isset($_POST['email'])){
        $id_post= $_POST['id_post'];
        $email= $_POST['email'];
        $producto =get_post($id_post);
        if(isset($producto)){
            $headers = 'Content-type: text/html';
            wp_mail( $email, $producto->post_title, $producto->post_content,$headers );
            $status = (object) array('status' => 'OK', 'message' => 'Correo enviado exitosamente');
        }
    }
    wp_send_json($status);
}