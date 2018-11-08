<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class InputSecretSantaTest extends TestCase
{
    public function testReadInput()
    {
        $input = new InputSecretSanta();

        $this->assertTrue(
            is_array($input->read())
        );
    }
}
