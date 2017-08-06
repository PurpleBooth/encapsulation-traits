<?php

declare(strict_types=1);

namespace PurpleBooth\EncapsulationTraits;

class ExampleInvokable
{
    public function __invoke(): void
    {
        $this->name = 'I do nothing';
    }
}
