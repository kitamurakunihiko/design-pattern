<?php

declare(strict_types=1);

namespace Kitamurakunihiko\DesignPattern\TemplateMethod;

abstract class AbstractDisplay
{
    private array $date;

    public function __construct($date) {
        if (!is_array($date)) {
            $this->date = [$date];
        }
        $this->date = $date;
    }

    public function display(): void
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    public function getData(): array
    {
        return $this->date;
    }

    //Headerを表示させる抽象メソッド
    abstract protected function displayHeader();

    //Bodyを表示させる抽象メソッド
    abstract protected function displayBody();

    //Footerを表示させる抽象メソッド
    abstract protected function displayFooter();
}
