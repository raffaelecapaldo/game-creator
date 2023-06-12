@extends('layouts.app')
@section('characterlink')
{{route('characters.index')}}
@endsection
@section('content')

    <div class="homapage h-100">
        <div class="hero d-flex align-items-center">
            <div class="slogan w-25">
                <h1 class="title-hero">WAR PRIME</h1>
                <p>Immerse yourself in a captivating gameplay experience as you collect and deploy a diverse array of cards featuring iconic characters and mystical creatures. Unearth ancient artifacts, unleash devastating spells, and command legendary heroes to conquer your foes and emerge victorious.</p>
                <button>PLAY NOW</button>
            </div>
            <div class="box-image">
                <img src="/img/template/landscape.png" alt="">
            </div>
        </div>
    </div>
@endsection
