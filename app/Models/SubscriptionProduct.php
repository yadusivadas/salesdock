<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'upload_speed',
        'download_speed',
        'technology',
        'static_ip',
    ];

    public function scopeFilterBy($query, $filters)
    {
        foreach ($filters as $key => $value) {
            [$class, $methods] = $value;
            if (is_array($methods)) {
                foreach ($methods as $method) {
                    $rule = new $class($query);
                    $splitMethod = explode(':', $method);
                    $methodName = $splitMethod[0] ?? '';
                    $arguments = isset($splitMethod[1]) ? explode(',', $splitMethod[1]) : [];
                    $rule = $rule->$methodName(...$arguments);
                }
            }
        }
        return $rule;
    }
}
