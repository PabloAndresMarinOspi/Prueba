<?php
/* 
Template Name: Template procesador 
*/

require_once('CtrCustom.php');

get_header();
$id_post = get_the_ID();
$current_custom_fields = get_post_custom($id_post);
$seccion = $current_custom_fields["nombre_categoria_producto"][0];
$mCrtCustom = new CtrCustom();
$lst_productos=$mCrtCustom->obtener_listado_categoria($seccion);

?>
<div class="container">
    <div class="row">
    <?php
            foreach($lst_productos as $item)
            {
                $temp=' <div class="col-sm-10">'.
                        '<div class="card">																										'.
                        '    <div class="card__title">                                                                                          '.
                        '        <div class="icon icon-procesador">                                                                                             '.
                        '            <a href="#"><i class="fa fa-arrow-left"></i></a>                                                           '.
                        '        </div>                                                                                                         '.
                        '        <h3>Nuevo producto</h3>                                                                                        '.
                        '    </div>                                                                                                             '.
                        '    <div class="card__body">                                                                                           '.
                        '        <div class="half">                                                                                             '.
                        '            <div class="featured_text">                                                                                '.
                        '                <h1>'. $item->post_title .'</h1>                                                                                        '.
                        '            </div>                                                                                                     '.
                        '        </div>                                                                                                         '.
                        '        <div class="half">                                                                                             '.
                        '            <div class="description">                                                                                  '.
                        '                <p>'. $item->post_content .'</p>                                      '.
                        '            </div>                                                                                                     '.
                        '            <span class="stock"><i class="fa fa-pen"></i> In stock</span>                                              '.
                        '        </div>                                                                                                         '.
                        '    </div>                                                                                                             '.
                        '    <div class="card__footer">                                                                                         '.
                        '        <div class="action">                                                                                           '.
                        '            <button type="button" onclick="enviar_correo(' . $item->ID . ');">Enviar a correo</button>                                                                 '.
                        '        </div>                                                                                                         '.
                        '    </div>                                                                                                             '.
                        '</div>'.  
                    '</div>';
                    echo $temp;
            }
        ?>       
    </div>
</div>   





<?php get_footer();