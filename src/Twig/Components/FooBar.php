<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveListener;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('FooBar')]
class FooBar
{
    use DefaultActionTrait;

    #[LiveProp]
    public int $fooCount = 1;

    #[LiveListener('FooEvent')]
    public function onFoo(): void
    {
        $this->fooCount++;
    }

    #[LiveListener('FooBarEvent')]
    public function onFooBar(): void
    {
        $this->fooCount++;
    }
}
