<?php

namespace App\Rules;

class UploadSpeedRule
{
    public $query;

    public function __construct($query)
    {

        $this->query = $query;
    }

    public function lessThan($speed)
    {
        $this->query = $this->query
            ->where('upload_speed', '<', $speed);

        return $this->query;
    }

    public function greaterThan($speed)
    {
        $this->query = $this->query
            ->where('upload_speed', '>', $speed);

        return $this->query;
    }
}
