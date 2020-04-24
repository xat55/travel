<?php
    function my_pagenavi() {
        global $wp_query;

        $big = 999999999; // уникальное число для замены

        $args = array(
            'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format'  => '',
            'current' => max( 1, get_query_var('paged') ),
            'total'   => $wp_query->max_num_pages,
            'prev_text'   => '&laquo;',
            'next_text'   => '&raquo;',
        );

        $result = paginate_links( $args );

        // удаляем добавку к пагинации для первой страницы
        $result = preg_replace( '~/page/1/?([\'"])~', '\1', $result );

        echo $result;
    }
