<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;
use App\Models\User;
use App\Models\Follower;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCalendar;


class CalendarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $cal = new Calendar();
        $tag = $cal->showCalendarTag($request->month,$request->year);
        return view('calendars.index', ['cal_tag' => $tag]);
    }

    public function index_prev_next($year, $month)
    {
        $cal = new Calendar();
        $tag = $cal->showCalendarTag($month, $year);
        return view('calendars.index', ['cal_tag' => $tag]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Calendar $calendar)
    {
        $login_user = Auth::user();
        $user_id = $login_user->id;
        $data = $calendar->get_lists($user_id);
        return view('calendars.create', [

            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCalendar $request)
    {
        // POSTで受信した休日データの登録
        $login_user = Auth::user();
        $user_id = $login_user->id;
        $Calendar = new Calendar(); 
        $Calendar->user_id = $user_id;
        $Calendar->day = $request->day;
        $Calendar->description = $request->description;
        $Calendar->save();
        // 休日データ取得
        $data = $Calendar->get_lists($user_id);

        return view('calendars.create', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  date  $day
     * @param  Illuminate\Http\Request  $request
     * @param  App\Models\Calendar  $$calendar
     * @param  App\Models\Follower  $follower
     * @return \Illuminate\Http\Response
     */
    public function show( $day , Request $request, Follower $follower, Calendar $calendar, User $user)
    {
                 // 休日データ取得
        // $data = Calendar::all();

        $login_user = Auth::user();
        $follow_ids = $follower->followingIds($login_user->id);
        $following_ids = $follow_ids->pluck('followed_id')->toArray();
        $following_data = $calendar->get_following_data($login_user->id, $following_ids);
        $day_lists = $calendar->get_day_data($day, $following_data);
        $following_data_lists = $user->get_following_data($login_user->id, $following_ids);
        return view('calendars.show', ['day_lists' => $day_lists, 'follow_ids' => $follow_ids, 'following_data' => $following_data, 'following_data_lists' => $following_data_lists, 'day' => $day]);

        // $tag = $cal->showCalendarTag($request->month,$request->year);
        // return view('calendars.show', ['cal_tag' => $tag]);
        // return view('calendars.index', [
        //     'user' => $login_user,
        //     'data' => $data
        // ]);

        // $cal = new Calendar($itemList);
        // $tag = $cal->showCalendarTag($request->month,$request->year);
        // return view('calendars.index', ['cal_tag' => $tag]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        $login_user = Auth::user();
        $calendar->calendarDestroy($login_user->id, $calendar->id);
        return redirect()->action('CalendarsController@create');
    }
}
