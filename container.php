<?php

class Container {
    private $code;
    private $inhoud;
    private $opslot = true;

    public function __construct($code, $inhoud) {
        $this->code = $code;
        $this->inhoud = $inhoud;
    }

    public function unlock($enteredCode) {
        if ($enteredCode == $this->code) {
            $this->opslot = false;
            return true;
        }
        return false;
    }

    public function getContent() {
        if (!$this->opslot) {
            return $this->inhoud;
        }
        return null;
    }

    public function lock() {
        $this->opslot = true;
    }
}
?>

