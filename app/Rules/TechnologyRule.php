<?php

namespace App\Rules;

class TechnologyRule
{
    public $query;

    public function __construct($query)
    {

        $this->query = $query;
    }

    public function fiber()
    {
        $this->query = $this->query
            ->where('technology', 'fiber');

        return $this->query;
    }

    public function dialup()
    {
        $this->query = $this->query
            ->where('technology', 'dialup');

        return $this->query;
    }
}
