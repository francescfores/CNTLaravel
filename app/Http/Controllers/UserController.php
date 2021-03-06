<?php

namespace App\Http\Controllers;

use App\File;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\UserRepository ;
use App\Repositories\FileRepository;


class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $user,FileRepository $file) {

        $this->userRepository = $user;
        $this->fileRepository = $file;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $users = $this->userRepository->all();
        return view('layouts.users', array('users' => $users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255',
//            'body' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
//            'lastname' => 'required',
//            'date' => 'required',
//            'sex' => 'required',
//            'rol' => 'required',
//            'status' => 'required',
        ]);

        if($validator->fails()){
            $users = $this->userRepository->all();
            return view('layouts.users', array('users' => $users))
            ->withErrors($validator);
        }

        $user_input = $request->all();

        if($request->file('img')) {
            $user_input['img'] = URL::to('/') . '/public/user_img' . $user_input['email'] . '_' . $request->file('img')->getClientOriginalName();

            $request->file('img')->move(
                base_path() . '/public/user_img', $user_input['email'] . '_' . $request->file('img')->getClientOriginalName()
            );
        }

        $this->userRepository->create($user_input);
        $request->session()->flash('alert-success', 'User was successful added!');
        return $this->index();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //$user = User::find($id);
        $user = $this->userRepository->find($id);
        //var_dump($user);
        return view('users.show', array('user' => $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
