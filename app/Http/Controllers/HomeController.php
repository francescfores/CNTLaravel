<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Repositories\UserRepository ;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $userRepository;
    private $postRepository;


    public function __construct(UserRepository $user, PostRepository $post)
    {
        $this->middleware('auth');
        $this->userRepository = $user;
        $this->postRepository = $post;
    }


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->all();
        $posts = $this->postRepository->all();
        return view('adminlte::home', array('users' => $users, 'posts' => $posts));
    }
}