@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/user.show.css') }}">
@endsection
@section('content')
<div class="container">
    <div style='margin-top:20px; padding:20px 0;'>
        <div class="row">
            <div class="col-md-8" >
                <h3>（{{ $user->belong }}）{{ $user->name }}さんの休日一覧</h3>
            </div>
            <div class="col-md-4" style="text-align: right;">
                @if ($user->id === Auth::user()->id)
                    <a href="{{ url('users/' .$user->id .'/edit') }}" class="btn btn-primary">プロフィールを編集する</a>
                @else
                    @if ($is_following)
                        <form action="{{ route('unfollow', ['user_id' => $user->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="unfollow">この人のフォロー解除</button>
                        </form>
                    @else
                        <form action="{{ route('follow', ['user_id' => $user->id]) }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="follow">この人をフォローする</button>
                        </form>
                    @endif
                @endif
            </div>
        </div>
        <div class='card' style="margin-top:30px;">
            @foreach((array)$data as $val)
            <table>
                <tr>
                    <td style="font-size:20px;">・{{$val->day}}</td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</div>
@endsection