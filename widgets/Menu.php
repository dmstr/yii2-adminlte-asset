<?php
namespace dmstr\widgets;

class Menu extends \yii\widgets\Menu {

    public $encodeLabels = false;
    public $activateParents = true;
    public $options = ['class' => 'sidebar-menu'];
    public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';
    public $countSubmenuTemplate = '<span class="label label-primary pull-right">{count}</span>';
    public $showCountSubmenu = false;
    public $showIcon = false;
    public $defaultIcon = 'fa fa-circle-o';
    public $iconTemplate = '<i class="{icon}"></i><span>{label}</span>';

    protected function renderItem($item) {
        if ($this->showIcon && isset($item['url'])) {
            if (!strpos($item['label'], '</i>'))
                $item['label'] = strtr($this->iconTemplate, ['{icon}' => (isset($item['icon']) ? $item['icon'] : $this->defaultIcon), '{label}' => $item['label']]);
        }
        if (isset($item['items'])) {
            $item['label'] .= ($this->showCountSubmenu ? strtr($this->countSubmenuTemplate, ['{count}' => count($item['items'])]) : '<i class="fa fa-angle-left pull-right"></i>');
        }
        return parent::renderItem($item);
    }

}
