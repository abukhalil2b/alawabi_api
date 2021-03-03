<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *ttp://localhost:8000/api/student/login
     * @var array
     */
    protected $except = [
        // 'http://127.0.0.1:8000/api/student/login',
        // 'http://localhost:8000/api/student/login',
        // 'http://127.0.0.1:8000/api/getquestion',
        // 'http://127.0.0.1:8000/api/sendanswer'
    ];
}
