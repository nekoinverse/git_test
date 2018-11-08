<?php

namespace SecretSanta;

require_once('Contracts/Input.php');

use SecretSanta\Contracts\Input;

class InputSecretSanta implements Input
{
    protected $filePath = __DIR__ . '/../players.txt';

    public function read(): array
    {
        $secretSanta = [];

        $file = fopen($this->filePath, "r") or exit("Can't open $this->filePath");
        while (($line = fgets($file)) !== false) {
            $line = trim($line);
            echo strtolower($line) . "\n";
            if (($this->isParticipantRepeated($secretSanta, $line))
                || ($this->lineHasMultipleParticipants(strtolower($line)))) {
                echo 'Malformed file information';
                return [];
            }
            $secretSanta[] = $line;
        }
        return $secretSanta;
    }

    protected function isParticipantRepeated(array $list, $participant): bool
    {
        return in_array($participant, $list);
    }

    protected function lineHasMultipleParticipants($line): bool
    {
        $participants = explode(',', $line);
        return (sizeof($participants) !== 1);
    }
}