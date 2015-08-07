<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 07.08.15
 * Time: 11:40
 */

namespace dmstr\widgets;

use yii;

class Menu extends yii\widgets\Menu
{
    public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';

    protected function renderItem($item)
    {
        if(isset($item['items'])){
            $item['label'] .= '<i class="fa fa-angle-left pull-right"></i>';
        }

        return parent::renderItem($item);
    }
}