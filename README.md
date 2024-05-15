<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Step by step

# tutor with https://www.youtube.com/watch?v=Uz56BOekpLA

# Laravel 11 REST API Using Passport Authentication

1. Laravel Installation
2. Database Connectivity
3. API Controller & Methods Settings
4. Passport Auth Package Installation & Settings
5. Setup API Routes
6. Register API
7. Login API
8. Profile API
9. Logout API

## 1. Laravel Installation

documentation with https://laravel.com/docs/11.x/

run console with terminal

create new project
# composer create-project laravel/laravel example-app

test project
run server
# cd example-app
# php artisan serve
access with browser
# http://127.0.0.1:8000

## 2. Database Connectivity

create new database
# api

configuration file .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=api
# DB_USERNAME=root
# DB_PASSWORD=

## 3. API Controller & Methods Settings

create new file controller
# php artisan make:controller Api/ApiController

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Register Api(POST)
    public function register(Request $request)
    {
        
    }

    // Login Api(POST)
    public function login(Request $request)
    {

    }

    // Profile Api(GET)
    public function profile()
    {
        
    }

    // Logout Api(GET)
    public function logout()
    {
        
    }
}

## 4. Passport Auth Package Installation & Settings

run composer
# composer require laravel/passport

composer.json
after
    "require": {
        "php": "^8.2",
        "laravel/framework": "^11.0",
        "laravel/tinker": "^2.9"
    },

before 
    "require": {
        "php": "^8.2",
        "laravel/framework": "^11.0",
        "laravel/passport": "^12.0",
        "laravel/tinker": "^2.9"
    },

run migrate
# php artisan migrate

generate personal access token oauth tokens
# php artisan passport:install

next - next

open auth.php from directory config

search "guard"
add 
'api' => [
    'driver' => 'passport',
    'provider' => 'users',
],

after
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],
before
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],

## 5. Setup API Routes

php artisan install:api --passport


After running the install:api command, add the Laravel\Passport\HasApiTokens trait to your App\Models\User model. This trait will provide a few helper methods to your model which allow you to inspect the authenticated user's token and scopes:

# use Laravel\Passport\HasApiTokens;
# HasApiTokens

# sintaks
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}


# add sintaks to file api.php

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::post('register', [ApiController::class, 'register']);
Route::post('login', [ApiController::class, 'login']);

Route::group(['middleware' => ['auth:api']], function (){
    Route::get('profile', [ApiController::class, 'profile']);
    Route::get('logout', [ApiController::class, 'logout']);
});

## 6. Register API

use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Register Api(POST)
    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed",
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json([
            "status" => true,
            "message" => "Successfully created a new user"
        ], 200);
    }

# testing with postman

baseurl
# http://127.0.0.1:8000/api

endpoint 
# /register

body
# name
# email
# password
# password_confirmation

payload if status code is 200
{
    "status": true,
    "message": "Successfully created a new user"
}

## 7. Login API

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

    // Login Api(POST)
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ])) {
            $user = Auth::user();
            $token = $user->createToken('myToken')->accessToken;

            return response()->json([
                "status" => true,
                "message" => "Login successfuly",
                "token" => $token
            ], 200);
        } else {
            return response()->json([
                "status" => false,
                "message" => "Invalid login details"
            ], 404);
        }
    }

# testing with postman

baseurl
# http://127.0.0.1:8000/api

endpoint 
# /login

body
# email
# password

payload if status code is 200
{
    "status": true,
    "message": "Login successfuly",
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDNhYTU0ZGEyZjcxODdiMzdkYWEzMWMzMmEzNWIyNDJiNWZjMGJjY2Y3NDFlMzkxYTViNTJhZDkyODhkMzllOWZkNzBiNjYxYmI1Njk3OGYiLCJpYXQiOjE3MTU3NDQ2NzUuNjYwNDIsIm5iZiI6MTcxNTc0NDY3NS42NjA0MjMsImV4cCI6MTc0NzI4MDY3NS4zMDQ2NTIsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.Sn7Jwbm9vI8EloIeqqWuaYu8m8plRnbWaeayECfgTwq0KaQE7F-VkXUn7wvsjS7rBpwDZb36bQe-8MCJ0TtXXORkuLlbOgwb5k941ar8JL39K0cV68dY7P9te2mDKzfxOXoC1GjdKjqU2muCx6M0_AznuAtWB1zM8Ru0aq2YH6J9F6gOtbyVZlE-mr4MR8x5cY8m9Z7nEC1cVawv-oWrybdWDvRRj_cX_766edQ0xK-aE0CtjQq9VcLCP6-_wXxKqE0jD1DtUbab2phA_rdqSYlbB48X73WejdJosQNHbI9tQS2x7nK64iXAqgp6YxEan1SCOWGAzfAFMZYdXVdT7IYa9xTV6cE8jNy6fSg6RdjpklVMaioUP7rNIr20EAJSBcw4u2SSjEthho39DlLC_WQvmttxKtV3B6t_YwLevhnVfMx-tENOMHki147y2oy7TqnuuvJtoJ4c3fweprPnK0EumR7UzrOr4jSK4q8nE2p57wtXpux6ct8DSvNf7cNpQIGwjWPvzGNkPv9ek5C0LdVJT2gMdXtwXzq2CZ1-o2v5doAQPFeZ1QoLzZVoXGS6LLJo3RigtJktMnVNvIs5cJkILrcg49ab5kwrBf5dlirSigVdWh-3HzuGxx2cIlsWamgr0sQjVmDZGz-A38HAK6L-uLUbIKHinESvrHmHDSQ"
}

## 8. Profile API

use App\Models\User;
use Illuminate\Support\Facades\Auth;

    // Profile Api(GET)
    public function profile()
    {
        $user = Auth::user();

        return response()->json([
            "status" => true,
            "message" => "profile Information",
            "data" => $user
        ], 200);
    }

# testing with postman

baseurl
# http://127.0.0.1:8000/api

endpoint 
# /profile

Authorization
#Bearer Token = token

example
token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDNhYTU0ZGEyZjcxODdiMzdkYWEzMWMzMmEzNWIyNDJiNWZjMGJjY2Y3NDFlMzkxYTViNTJhZDkyODhkMzllOWZkNzBiNjYxYmI1Njk3OGYiLCJpYXQiOjE3MTU3NDQ2NzUuNjYwNDIsIm5iZiI6MTcxNTc0NDY3NS42NjA0MjMsImV4cCI6MTc0NzI4MDY3NS4zMDQ2NTIsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.Sn7Jwbm9vI8EloIeqqWuaYu8m8plRnbWaeayECfgTwq0KaQE7F-VkXUn7wvsjS7rBpwDZb36bQe-8MCJ0TtXXORkuLlbOgwb5k941ar8JL39K0cV68dY7P9te2mDKzfxOXoC1GjdKjqU2muCx6M0_AznuAtWB1zM8Ru0aq2YH6J9F6gOtbyVZlE-mr4MR8x5cY8m9Z7nEC1cVawv-oWrybdWDvRRj_cX_766edQ0xK-aE0CtjQq9VcLCP6-_wXxKqE0jD1DtUbab2phA_rdqSYlbB48X73WejdJosQNHbI9tQS2x7nK64iXAqgp6YxEan1SCOWGAzfAFMZYdXVdT7IYa9xTV6cE8jNy6fSg6RdjpklVMaioUP7rNIr20EAJSBcw4u2SSjEthho39DlLC_WQvmttxKtV3B6t_YwLevhnVfMx-tENOMHki147y2oy7TqnuuvJtoJ4c3fweprPnK0EumR7UzrOr4jSK4q8nE2p57wtXpux6ct8DSvNf7cNpQIGwjWPvzGNkPv9ek5C0LdVJT2gMdXtwXzq2CZ1-o2v5doAQPFeZ1QoLzZVoXGS6LLJo3RigtJktMnVNvIs5cJkILrcg49ab5kwrBf5dlirSigVdWh-3HzuGxx2cIlsWamgr0sQjVmDZGz-A38HAK6L-uLUbIKHinESvrHmHDSQ"

payload if status code is 200
{
    "status": true,
    "message": "profile Information",
    "data": {
        "id": 1,
        "name": "sabar",
        "email": "sabarrudin149@gmail.com",
        "email_verified_at": null,
        "created_at": "2024-05-14T14:02:57.000000Z",
        "updated_at": "2024-05-14T14:02:57.000000Z"
    }
}

## 9. Logout API

use App\Models\User;
use Illuminate\Support\Facades\Auth;

// Logout Api(GET)
    public function logout()
    {
        auth()->user()->token()->revoke();

        return response()->json([
            "status" => true,
            "message" => "user logged out"
        ], 200);
    }

# testing with postman

baseurl
# http://127.0.0.1:8000/api

endpoint 
# /logout

payload if status code is 200
{
    "status": true,
    "message": "user logged out"
}

## full code ApiController.php

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    // Register Api(POST)
    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed",
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json([
            "status" => true,
            "message" => "Successfully created a new user"
        ], 200);
    }

    // Login Api(POST)
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ])) {
            $user = Auth::user();
            $token = $user->createToken('myToken')->accessToken;

            return response()->json([
                "status" => true,
                "message" => "Login successfuly",
                "token" => $token
            ], 200);
        } else {
            return response()->json([
                "status" => false,
                "message" => "Invalid login details"
            ], 404);
        }
    }

    // Profile Api(GET)
    public function profile()
    {
        $user = Auth::user();

        return response()->json([
            "status" => true,
            "message" => "profile Information",
            "data" => $user
        ], 200);
    }

    // Logout Api(GET)
    public function logout()
    {
        auth()->user()->token()->revoke();

        return response()->json([
            "status" => true,
            "message" => "user logged out"
        ], 200);
    }
}

# finish and thanks.
