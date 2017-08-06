<?php

declare(strict_types=1);

namespace PurpleBooth\EncapsulationTraits;

trait ExampleTrait
{
    public function changeNameTrait(): void
    {
        $this->name = 'I broke encapsulation';
    }
}
