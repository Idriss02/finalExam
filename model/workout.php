<?php
class Workout {
    private $date;
    private $type;
    private $duration;

    public function __construct($date, $type, $duration) {
        $this->date = $date;
        $this->type = $type;
        $this->duration = $duration;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }
}
?>
