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
                break;
            case 1:
                $this->red = true;
                $this->yellow = true;
                $this->green = false;
                break;
            case 2:
                $this->red = false;
                $this->yellow = false;
                $this->green = true;
                break;
            case 3:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                break;
            case 4:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                break;
            default:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
        }
    }

    public function nextState($requiredState)
    {
        if ($requiredState < 3 and $this->ActualState != 4)
        {
            $this->setState(($requiredState) % 4);


        }
        elseif ($requiredState == 4 and ($this->ActualState == 0 or 2))
        {
            $this->setState($requiredState);
        }
        elseif ($this->ActualState == 4 and $requiredState == 0)
        {
            $this->setState($requiredState);
        }

    }

    public function isNextRequired()
    {
        //Checking if button was pressed then redirect to prevent from re-submit form

    }

}