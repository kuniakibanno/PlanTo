@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/calendar.create.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <h1 style="font-size:20px; margin-top:30px" >休日を登録</h1>
                <!-- 休日入力フォーム -->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="dayInput">    
                    <form method="POST" action="/calendars" autocomplete="off"> 
                        {{csrf_field()}}     
                        <input style="width:70%;"  type="text" name="day" id="day" placeholder="お休みを選択してください。">
                        <input type="hidden" name="description"  value="欠席"> 
                        <input style="line-height:1;" type="submit" class="btn btn-primary" value="登録"> 
                    </form> 
                </div>
        </div>
        <!-- 休日一覧表示 -->
        <div class="col-md-6 " style='width:84%;'>
            <div  class="catalog">
                <h1 style="font-size:20px; margin-top:30px">{{ auth()->user()->name }}さんの休日一覧</h1>
                <div class="card">
                    @foreach((array)$data as $val)
                        <table>
                            <tr>
                                <td width="70%">{{$val->day}}</td>
                                <td width="30%" style='text-align:right;'>
                                    <form method="POST" action="{{ url('calendars/' .$val->id) }}" class="mb-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn">削除</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>    
</div>
    <script>
        $( function() {
        $( "#day" ).datepicker({dateFormat: 'yy-mm-dd'});
        } );
    </script>
@endsection