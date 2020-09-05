<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Follower;
use App\Models\Calendar;
use Illuminate\Support\Facades\Auth;
use Validator;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_users = DB::table('users')->get();
        return view('users.index', [
            'all_users'  => $all_users, 
        ]);
    }

    public function serch(Request $request)
    {
        $keyword_name = $request->name;

        if(!empty($keyword_name)) {
            $query = User::query();
            $users = $query->where('name','like', '%' .$keyword_name. '%')->get();
            $message = "「". $keyword_name."」を含む名前の検索が完了しました。";
            return view('users.serch',[
                'users' => $users,
                'message' => $message
            ]);
            }
        else {
            $message = "名前を入れて検索してください。";
            return view('users.serch',[
                'message' => $message,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Follower $follower, Calendar $calendar)
    {
        $login_user = Auth::user();
        // 自分のことをフォローしている人
        $is_following = $login_user->isFollowing($user->id);
        // 自分がフォローしている人
        $is_followed = $login_user->isFollowed($user->id);

        $data = $calendar->get_lists($user->id);


        return view('users.show', [
            'user'           => $user,
            'is_following'   => $is_following,
            'is_followed'    => $is_followed,

            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'number' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'belong' => ['required', 'string',],
            'tel' => ['required', 'string',],
            'email' => ['required', 'string', 'email']
        ]);
        $validator->validate();
        $user->updateProfile($data);

        return redirect('calendars/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function follow($user_id)
    {
        $follower = Auth::user();
        $is_following = $follower->isFollowing($user_id);
        if(!$is_following){
            $follower->follow($user_id);
            return back();
        }
    }

    public function unfollow($user_id)
    {
        $follower = Auth::user();
        $is_following = $follower->isFollowing($user_id);
        if($is_following) {
            $follower->unfollow($user_id);
            return back();
        }
    }

    
}
