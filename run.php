<?php

declare(strict_types=1);

use PurpleBooth\EncapsulationTraits\ExampleClass;

require_once __DIR__.'/vendor/autoload.php';

$instance = new ExampleClass();

echo sprintf("%s:\t%s\n", 'new', $instance->getName());
$instance->changeNameTrait();
echo sprintf("%s:\t%s\n", 'trait', $instance->getName());

$instance = new ExampleClass();
echo sprintf("%s:\t%s\n", 'new', $instance->getName());
$instance->changeNameInvokable();
echo sprintf("%s:\t%s\n", 'anonf', $instance->getName());
