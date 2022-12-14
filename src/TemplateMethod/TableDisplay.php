<?php

declare(strict_types=1);

namespace Kitamurakunihiko\DesignPattern\TemplateMethod;

class TableDisplay extends AbstractDisplay
{

    protected function displayHeader()
    {
        echo '<table>';
    }

    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' .$key . '</th>';
            echo '<td>' .$value . '</td>';
            echo '</tr>';
        }
    }

    protected function displayFooter()
    {
        echo '</table>';
    }
}
