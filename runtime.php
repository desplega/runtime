<?php
class RunTime
{
    private $start;
    private $lap;
    private $stop;

    public function __construct()
    {
        $this->start = microtime(true);
    }

    public function getTotalTime()
    {
        $this->lap = $this->stop;

        $this->stop = microtime(true);
        return ($this->stop - $this->start);
    }

    public function getLapTime()
    {
        $lap = $this->lap ? $this->lap : $this->stop;
        $this->lap = 0;

        $this->stop = microtime(true);
        return ($this->stop - $lap);
    }
}
?>
