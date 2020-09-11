<?php


class TrafficLight
{

    public $red;
    public $yellow;
    public $green;
    public $ActualState;

    function setState($state)
    {
        switch ($state) {
            case 0:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
                $this->ActualState = 0;
                break;
            case 1:
                $this->red = true;
                $this->yellow = true;
                $this->green = false;
                $this->ActualState = 1;
                break;
            case 2:
                $this->red = false;
                $this->yellow = false;
                $this->green = true;
                $this->ActualState = 2;
                break;
            case 3:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                $this->ActualState = 3;
                break;
            case 4:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                $this->ActualState = 4;
                break;
            case 5:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                $this->ActualState = 5;
                break;
            default:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
                $this->ActualState = 0;
        }
        $_SESSION['myLight'] = $this;
    }



    public function nextState($requiredState)
    {
        if ($requiredState <= 4) {
            $this->setState(($requiredState) % 4);
        } elseif ($requiredState == 5 && ($this->ActualState == 0 || $this->ActualState == 2)) {

            $this->setState(5);
        } elseif ($this->ActualState == 5 && $requiredState >= 0) {

            $this->setState(0);
        }
    }



    public function isNextRequired()
    {

        $this->nextState($this->ActualState + 1 % 4);
    }

    public function requireHS()
    {
        $this->nextState(5);
    }
}
