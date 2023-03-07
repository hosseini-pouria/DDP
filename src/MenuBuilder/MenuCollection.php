<?php

namespace Src\MenuBuilder;

class MenuCollection implements MenuComponentInterface
{
    private array $menuItems = [];

    public function add(MenuComponentInterface $component)
    {
        $this->menuItems[] = $component;
    }

    public function build()
    {
        echo '<div class="menu">';
            foreach ($this->menuItems as $menuItem)
            {
                $menuItem->build();
            }
        echo '</div>';
    }
}
