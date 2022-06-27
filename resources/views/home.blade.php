@extends('layouts.app')

@section('title')
    Dc-Comics | Homepage
@endsection

@section('main_content')
    <div class="comics">
        <div class="container">
            <div class="comics__list">
                @foreach ($data as $item)
                {{-- Card --}}
                <div class="comics__list__card">
                    <div class="image">
                        <img src="{{ $item['thumb'] }}"
                            alt="{{ $item['title'] }}">
                    </div>
                    <h5>{{ $item['series'] }}</h5>
                </div>
                {{-- Card --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
