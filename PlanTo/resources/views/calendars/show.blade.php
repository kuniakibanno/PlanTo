@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/calendar.show.css') }}">
@endsection
@section('content')
<!-- 自分がフォローしている人の一覧を表示 -->
<tbody>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>{{$day}}</h3>
                <h5>フォローした人の連絡先と出勤状況</h5>
                @foreach((array)$following_data_lists as $following_data_list)
                    <div class="card">
                        <div class="card-haeder p-3 w-100 d-flex">
                            <div class="ml-2 d-flex flex-column">
                                <p class="mb-0">{{ $following_data_list['belong'] }}</p>
                                <p class="mb-0">{{ $following_data_list['name'] }}</p>
                            </div>
                                <div class="px-4">
                                    <p class="mb-0">{{ $following_data_list['tel'] }}</p>
                                    <a href="{{ url('users/' .$following_data_list['id']) }}" class="text-secondary">この人の休日を確認する</a>
                                </div>
                            <div class="d-flex justify-content-end flex-grow-1">
                                @if (in_array($following_data_list['id'], array_column( $day_lists ,'user_id')))
                                    <div class="dayOff">休み</div>
                                @else
                                    <div class="work">出勤</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</tbody>
@endsection


