<?php

/**
 * Operación
 *
 * PHP version 7.0
 */
class CtrCustom
{
    public function __construct()
    {
    }

    public function obtener_listado_categoria($slug_categoria)
    {
        $lst_response = array();
        $category=get_category_by_slug($slug_categoria);
        if(isset($category)){
            $args = array(
                'category' => $category->term_id 
            );    
            $lst_response = get_posts( $args );            
        }
        return $lst_response;
    }
    
    
}