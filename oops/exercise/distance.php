<?php
class Distance{
    public $x;
    public $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function calculateDistance(Distance $other){
        echo round(sqrt(pow($this->x - $other->x,2) + pow($this->y - $other->y,2)),3);
    }
}
$dis1 = new Distance(34,43);
$dis2 = new Distance(53,35);

$dis1->calculateDistance($dis2);
?>