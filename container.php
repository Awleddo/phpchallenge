<?php

class Container
{
    private string $code;
    private string $inhoud;
    private bool $opslot = true;

    public function __construct(string $code, string $inhoud)
    {
        $this->code = $code;
        $this->inhoud = $inhoud;
    }

    public function unlock(string $enteredCode): bool
    {
        if ($enteredCode === $this->code) {
            $this->opslot = false;
            return true;
        }
        return false;
    }

    public function getContent(): ?string
    {
        if (!$this->opslot) {
            return $this->inhoud;
        }
        return null;
    }

    public function lock(): void
    {
        $this->opslot = true;
    }
}
?>

