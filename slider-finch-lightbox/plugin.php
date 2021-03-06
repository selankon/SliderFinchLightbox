<?php
/**
* @package   yoo_finch
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

return array(

    'name' => 'widget/slider-finch-lightbox',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'slider-finch-lightbox', //changed
        'label' => 'Slider Finch Lightbox', //changed
        'core'  => false,
        'icon'  => 'plugins/widgets/slider-finch-lightbox/widget.svg',//changed
        'view'  => 'plugins/widgets/slider-finch-lightbox/views/widget.php',//changed
        'item'  => array('title', 'content', 'media'),
        'settings' => array(
            'slidenav'                 => 'default',
            'slidenav_contrast'        => true,
            'infinite'                 => true,
            'center'                   => false,
            'autoplay'                 => false,
            'interval'                 => '3000',
            'autoplay_pause'           => true,
            'gutter'                   => 'default',
            'columns'                  => '1',
            'columns_small'            => 0,
            'columns_medium'           => 0,
            'columns_large'            => 0,
            'columns_xlarge'           => 0,
            'fullscreen'               => false,
            'min_height'               => '300',

            'media'                    => true,
            'image_width'              => 'auto',
            'image_height'             => 'auto',
            'overlay_hover'            => true,
            'overlay_background'       => 'hover',
            'overlay_animation'        => 'fade',
            'overlay_image'            => 'static',
            'image_animation'          => 'fade',
            'overlay_link'             => false,

            'title'                    => true,
            'content'                  => true,
            'title_size'               => 'h3',
            'content_size'             => '',
            'text_align'               => 'center',
            'link'                     => true,
            'link_style'               => 'button',
            'link_text'                => 'Read more',

            'link_target'              => false,
            'class'                    => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {

        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('slider-finch-lightbox.edit', 'plugins/widgets/slider-finch-lightbox/views/edit.php', true); // changed
        }

    )

);
