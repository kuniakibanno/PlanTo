@extends('layouts.app')
@extends('layouts.PlanTo')

@section('title','timeline')

@section('content')
    @foreach($data as $name => $message)
        {{$name}} {{$message}}
    @endforeach
@endsection



<!-- タイムライン
・投稿順に並べる
・写真が投稿できる
・投稿者の情報（アイコンと名前）を表示

※　$nameには投稿者の情報（アイコンと名前） -->