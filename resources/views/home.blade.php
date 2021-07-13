@extends('layouts.main')

@section('main-content')

<div id="jumbotron"></div>
<div class="container">
    <div class="items">
        @foreach ($comics as $item)
            <div class="item">
                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                <h4>{{$item['series']}}</h4>
            </div>
        @endforeach
    </div>
</div>
@endsection