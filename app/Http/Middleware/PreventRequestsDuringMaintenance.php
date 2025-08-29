<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * Les URIs qui doivent être accessibles pendant la maintenance.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
