<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveListener;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('FooParent')]
class FooParent
{
    use DefaultActionTrait;

    #[LiveProp]
    public bool $isToggled = false;

    #[LiveListener('FooEvent')]
    public function onFoo(): void
    {
        $this->isToggled = !$this->isToggled;
    }

    #[LiveListener('FooBarEvent')]
    public function onFooBar(): void
    {
        $this->isToggled = !$this->isToggled;
    }

}
