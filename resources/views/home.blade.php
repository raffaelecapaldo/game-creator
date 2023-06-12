@extends('layouts.app')
@section('characterlink')
{{route('characters.index')}}
@endsection
@section('content')
    <div class="home d-flex justify-content-between">
        <div id="slogan" class="d-flex flex-column justify-content-center h-100 gap-3">
            <h1 class="home-title">WAR PRIME</h1>
            <p class="text-white">Immerse yourself in a captivating gameplay experience as you collect and deploy a diverse array of cards featuring iconic characters and mystical creatures. Unearth ancient artifacts, unleash devastating spells, and command legendary heroes to conquer your foes and emerge victorious.</p>
            <button class="d-flex justify-content-center"><span class="text-center">PLAY NOW</span></button>
        </div>
        <div class="box-image">
            <img src="/img/homepage/landscape.png" alt="" class="landscape">
        </div>
        <div class="box-image-mobile">
            <img src="/img/homepage/landscape-mobile.png" alt="" class="landscape-mobile">
        </div>
    </div>
@endsection
