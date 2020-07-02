extends('layouts.PlanTo')

@section('title',timeline)

@foreach($data as $name => $value)
{{$name}} {{$message}}
@endforeach




<!-- タイムライン
・投稿順に並べる
・写真が投稿できる
・投稿者の情報（アイコンと名前）を表示

※　$nameには投稿者の情報（アイコンと名前） -->
