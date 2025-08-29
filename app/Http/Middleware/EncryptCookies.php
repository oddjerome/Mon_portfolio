<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * Les cookies qui ne doivent pas être chiffrés.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
