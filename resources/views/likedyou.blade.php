@extends('layouts.app')
@section('title','Liked You')
@section('content')
<x-home-profile-list :profiles="$profile"></x-home-profile-list>
@endsection
