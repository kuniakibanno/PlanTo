<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Calendar extends Model
{
    private $html;    
    public function showCalendarTag($m, $y)
    {
        $year = $y;
        $month = $m;
        if ($year == null) {
            // システム日付を取得する。 
            $year = date("Y");
            $month = date("m");
        }
        // 前月
        $prev = strtotime('-1 month',mktime(0, 0, 0, $month, 1, $year));
        $prev_year = date("Y",$prev);
        $prev_month = date("m",$prev);
        // 翌月
        $next = strtotime('+1 month',mktime(0, 0, 0, $month, 1, $year));
        $next_year = date("Y",$next);
        $next_month = date("m",$next);
        $firstWeekDay = date("w", mktime(0, 0, 0, $month, 1, $year)); // 1日の曜日(0:日曜日、6:土曜日)
        $lastDay = date("t", mktime(0, 0, 0, $month, 1, $year)); // 指定した月の最終日
        // 日曜日からカレンダーを表示するため前月の余った日付をループの初期値にする
        $day = 1 - $firstWeekDay;
        $this->html = <<< EOS
            <h1 style="text-align:center">
            <a style="font-size:18px;" href="/calendars/$prev_year/$prev_month" role="button">&lt;前月</a>
            {$year}年{$month}月
            <a style="font-size:18px;" href="/calendars/$next_year/$next_month" role="button">翌月&gt;</a>
            </h1>
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h5>担当者の出勤状況を知りたい日をクリック</h5>
                    <table class="table table-bordered">
                    <tr>
                        <th scope="col">日</th>
                        <th scope="col">月</th>
                        <th scope="col">火</th>
                        <th scope="col">水</th>
                        <th scope="col">木</th>
                        <th scope="col">金</th>
                        <th scope="col">土</th>
                    </tr>
                </div>
            </div>
            </div>
            EOS;
        // カレンダーの日付部分を生成する
        while ($day <= $lastDay) {
            $this->html .= "<tr>";
            // 各週を描画するHTMLソースを生成する
            for ($i = 0; $i < 7; $i++) {
                if ($day <= 0 || $day > $lastDay) {
                    // 先月・来月の日付の場合
                    $this->html .= "<td>&nbsp;</td>";
                } else {
                    // $this->html .= "<td><a href='/calendars/$year$month$day'>" . $day . "</a></td>"; 
                    $this->html .= "<td><a href='/calendars/$year-$month-$day'>" . $day . "</a></td>"; 
                }
                $day++;
            }

            $this->html .= "</tr>";
        }

        return $this->html .= '</table>';
    }

    protected $fillable =[
        'text'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function get_following_data(Int $user_id, Array $follow_ids)
    {
        $follow_ids[] = $user_id;
        return $this->whereIn('user_id', $follow_ids)->get()->toArray();
    }

    public function get_day_data(String $day, Array $following_data){
        $day = date('Y-m-d', strtotime($day));
        // return $this-->whereDate('day', '=', $day)->get()->toArray();
            $data = DB::table('Calendars')
                ->whereDate('day', '=', $day)
                ->get()->toArray();
            // $user_belong = user::find(1)->user->belong;
            // $user_name = user::find(1)->user->name;
            // $user_tel= user::find(1)->user->tel;

        return $data;
        
    }

    public function get_lists(Int $user_id){
        $data = DB::table('Calendars')
            ->where('user_id', '=', $user_id)->orderBy('day','ASC')
            ->get()->toArray();
        return $data;
    }

    public function get_data(Int $user_id){
        return $this->whereDate('user_id', '=', $user_id)->get()->toArray();
    }

    public function postStore(Int $user_id, Array $data)
    {
        // $this->user_id = $user_id;
        // $this->save();
        // return;
    }

    public function getEditPost(Int $user_id, Int $post_id)
    {
        return $this->where('user_id', $user_id)->where('id', $post_id)->first();
    }

    public function calendarDestroy(Int $user_id, Int $calendar_id)
    {
        return $this->where('user_id', $user_id)->where('id', $calendar_id)->delete();
    }

    protected $dates = ['day'];
}