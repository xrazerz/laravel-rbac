<?php
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'role' => \Dev\Rabc\Http\Middleware\CheckRole::class,
    ];
}