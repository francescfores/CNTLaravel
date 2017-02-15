<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\NewsRepository;
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
    private $newsRepository;


    public function __construct(UserRepository $user, NewsRepository $news)
    {
        $this->middleware('auth');
        $this->userRepository = $user;
        $this->newsRepository = $news;
    }


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->all();
        $news = $this->newsRepository->all();
        return view('adminlte::home', array('users' => $users, 'news' => $news));
    }
}