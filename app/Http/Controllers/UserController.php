<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Select específico de campos
     */
    public function index()
    {
        $users = User::select('name', 'email')->get();
        return response()->json($users);
    }

    /**
     * Carga previa (Eager Loading)
     */
    public function indexWithPosts()
    {
        $users = User::with('posts')->get(); // Suponiendo que los usuarios tienen posts
        return response()->json($users);
    }

    /**
     * Chunking
     */
    public function processUsers()
    {
        $users = [];
        User::chunk(100, function ($chunkedUsers) use (&$users) {
            foreach ($chunkedUsers as $user) {
                $users[] = $user;
            }
        });

        return response()->json($users);
    }

    /**
     * Procedimientos almacenados
     */
    public function getUsers()
    {
        $users = DB::select('CALL GetAllUsers()');
        return response()->json($users);
    }

    /**
     * Cache de consultas
     */
    public function cachedUsers()
    {
        $users = Cache::remember('users', 60, function () {
            return User::all();
        });
        return response()->json($users);
    }
}
