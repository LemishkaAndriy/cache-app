<?php

namespace App\Http\Controllers;

use App\Models\BlackBox;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
    public function index()
    {
        return Cache::get('bar');
    }
}
