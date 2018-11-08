<?php
declare(strict_types=1);

namespace Tests;

require_once(__DIR__ . "/../src/InputSecretSanta.php");
use PHPUnit\Framework\TestCase;
use SecretSanta\InputSecretSanta;

final class InputSecretSantaTest extends TestCase
{
    /**
     * player.txt contents must be:
     * Alpha
     * Charlie
     * Bravo
     * Foxtrot
    **/
    public function testReadInput(): void
    {
        $input = new InputSecretSanta();

        $this->assertTrue(
            is_array($input->read())
        );
    }

    public function testInputDataIsCorrect(): void
    {
        $input = new InputSecretSanta();

        $read = $input->read();

        $expected = [
            'Alpha',
            'Charlie',
            'Bravo',
            'Foxtrot'
        ];

        $this->assertTrue(
            $read === $expected
        );
    }
}