@extends('layouts.app')
@section('title','Home Page')

@section('content')



    <x-home-profile-list :profiles="$profile"></x-home-profile-list>

@endsection
