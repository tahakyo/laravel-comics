@extends('layouts.app')

@section('title')
    Comics | List
@endsection

@section('main_content')
    <div class="comics">
        <div class="container">
            <div class="comics__list">
                @foreach ($comics as $item)
                {{-- Card --}}
                <div class="comics__list__card">
                    <div class="image">
                        <img src="{{ $item['thumb'] }}"
                            alt="">
                    </div>
                    <h5>{{ $item['series'] }}</h5>
                </div>
                {{-- Card --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection