<?php

declare(strict_types=1);

namespace PurpleBooth\EncapsulationTraits;

class ExampleClass
{
    use ExampleTrait;

    private $name = 'Initial';
    private $changeNameInvokable;

    /**
     * ExampleClass constructor.
     */
    public function __construct()
    {
        $this->changeNameInvokable = new ExampleInvokable();
    }

    public function changeNameInvokable(): void
    {
        call_user_func($this->changeNameInvokable);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
