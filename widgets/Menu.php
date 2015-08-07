<?php

namespace dmstr\widgets;

use yii;

/**
 * Class Menu
 * @package dmstr\widgets *
 * @author Vadim Mazur <mazurva@gmail.com>, Qiang Xue <qiang.xue@gmail.com>
 */
class Menu extends yii\widgets\Menu
{
    /**
     * @var string the template used to render a list of sub-menus.
     * In this template, the token `{items}` will be replaced with the rendered sub-menu items.
     */
    public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';

    /**
     * Renders the content of a menu item.
     * Note that the container and the sub-menus are not rendered here.
     * @param array $item the menu item to be rendered. Please refer to [[items]] to see what data might be in the item.
     * @return string the rendering result
     */
    protected function renderItem($item)
    {
        if(isset($item['items'])){
            $item['label'] .= '<i class="fa fa-angle-left pull-right"></i>';
        }

        return parent::renderItem($item);
    }
}