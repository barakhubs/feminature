@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.hero_slider', ['sliders' => $sliders])
    @include('partials.features_section')
    @include('partials.about_section')
    @include('partials.services_section', ['thematicAreas' => $thematicAreas])
    @include('partials.donate_section')
    @include('partials.contact_info_section')
    @include('partials.blog_section', ['posts' => $posts])
    @include('partials.cta_section')
@endsection
