<?php

declare(strict_types=1);

namespace Kitamurakunihiko\DesignPattern\TemplateMethod;

class ListDisplay extends AbstractDisplay
{

    protected function displayHeader()
    {
        echo '<dl>';
    }

    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        };
    }

    protected function displayFooter()
    {
        echo '</dl>';
    }
}
