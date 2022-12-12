<?php

declare(strict_types=1);

namespace Kitamurakunihiko\DesignPattern\TemplateMethod;

require_once '../../vendor/autoload.php';

$date = [
    'Design Pattern',
    'Gang of Four',
    'Template Method Sample1',
    'Template Method Sample2',
];

$display1 = new ListDisplay($date);
$display2 = new TableDisplay($date);

$display1->display();
echo '<hr>';
$display2->display();
