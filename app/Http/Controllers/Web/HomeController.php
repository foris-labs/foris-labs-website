<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Role;
use App\Models\Simulation;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Newsletter;

class HomeController extends Controller
{
    public function Index()
    {
        // $members = User::admins()->get();
        return view('welcome');
    }

    public function Contact()
    {
        return view('contact');
    }
}
