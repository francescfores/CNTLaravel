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
use App\Repositories\FileRepository;
use Illuminate\Support\Facades\Auth;

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


    public function __construct(UserRepository $user, NewsRepository $news,FileRepository $file)
    {
        $this->middleware('auth');
        $this->userRepository = $user;
        $this->newsRepository = $news;
        $this->fileRepository = $file;
    }


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $users = $this->userRepository->all();
        $news = $this->newsRepository->all();
//        $user_img = $this->fileRepository->find($user->id);
        return view('adminlte::home', array('users' => $users, 'news' => $news));
    }
}