<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class OutputSecretSantaTest extends TestCase
{
    public function classHasReadFunction()
    {

        $this->assertTrue(
            method_exists(OutputSecretSanta::class, 'printLine'),
            "Class doesn't have method printLine"
        );
    }
}