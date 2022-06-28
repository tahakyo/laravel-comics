@extends('layouts.app')

@section('title')
    Single-comic
@endsection

@section('main_content')
    <div class="single_comic">
        <div class="blue_bar"></div>
        <div class="container">
            <div class="comic__infos">
                <div class="comic__infos__left">
                    <div class="title">
                        Action Comics #1000: The Deluxe Edition
                    </div>
                    <div class="price_availability">
                        <div class="price">
                            <p>U.S. Price:</p>
                            <p>Available</p>
                        </div>
                        <div class="availability">
                            <p>Check Availablity</p>
                        </div>
                    </div>
                    <div class="description">
                        <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the
                            amazing comic that won raves when it hit comics shops in April! This hardcover includes all the
                            stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared
                            in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design
                            sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the
                            lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that
                            started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
                    </div>
                </div>
                <div class="adv">
                    <div class="text">Advertisement</div>
                    <img src="{{ asset('images/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
