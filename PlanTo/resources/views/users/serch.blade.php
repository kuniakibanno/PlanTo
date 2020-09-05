@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11" style="margin-top:30px;">
            <h1>検索結果</h1>
            @if(!empty($message))
                <div class="alert alert-primary" role="alert"  style="margin-bottom:20px;">{{ $message }}</div>
            @endif
            @foreach ($users as $user)
                <div class="card">
                    <div class="card-haeder p-3 w-100 d-flex">
                        <div class="ml-2 d-flex flex-column">
                            <p class="mb-0">{{ $user->belong }}</p>
                            <p class="mb-0">{{ $user->name }}</p>
                        </div>
                        <div class="px-4">
                            <p class="mb-0">{{ $user->tel }}</p>
                            <a href="{{ url('users/' .$user->id) }}" class="text-secondary">この人の休日を確認する</a>
                        </div>
                        <!-- <div class="ml-2 d-flex flex-column">
                            <p class="mb-0">{{ $user->name }}</p>
                            <a href="{{ url('users/' .$user->id) }}" class="text-secondary">この人の休日を確認する</a>
                        </div> -->
                        @if (auth()->user()->isFollowed($user->id))
                            <div class="px-2">
                                <span class="px-1 bg-secondary text-light">フォローされています</span>
                            </div>
                        @endif
                        <div class="d-flex justify-content-end flex-grow-1">
                            @if ($user->id === Auth::user()->id)
                                <a href="{{ url('users/' .$user->id .'/edit') }}" class="btn btn-primary">プロフィールを編集する</a>
                            @else
                                @if (auth()->user()->isFollowing($user->id))
                                    <form action="{{ route('unfollow', ['user_id' => $user->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">フォロー解除</button>
                                    </form>
                                @else
                                    <form action="{{ route('follow', ['user_id' => $user->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">フォローする</button>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection