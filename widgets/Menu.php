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
     * @var boolean whether the labels for menu items should be HTML-encoded.
     */
    public $encodeLabels = false;

    /**
     * @var array the HTML attributes for the menu's container tag. The following special options are recognized:
     *
     * - tag: string, defaults to "ul", the tag name of the item container tags. Set to false to disable container tag.
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'sidebar-menu'];

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