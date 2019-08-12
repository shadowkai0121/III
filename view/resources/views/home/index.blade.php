@extends('layout.master')

@section('head')
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
@endsection

@section('content')
    <h1>Home Index</h1>
    <p>Hello! {{ $userName }}</p>
    {{-- 輸出含 html 標籤字串 --}}
    <div>{!! $lines !!}</div>
    <ul>
    @foreach ($scoreList as $score)
        <!-- 先在 model 或者 controller 處理 -->
        <li class="{{ ($score < 60) ? 'fail' : '' }}">
            {{$score}}
        </li>
    @endforeach
    </ul>

    <input type="text" id="cityId" value="{{ $cityId }}" hidden disabled>
    <select name="city" id="city">
        <option value="2">台北</option>
        <option value="4">台中</option>
        <option value="6">台南</option>
    </select>
<script>
    city.value = cityId.value;
    document.getElementById("cityId").outerHTML = "";
</script>
<script src="{{ URL::asset('js/test.js') }}"></script>
@endsection
