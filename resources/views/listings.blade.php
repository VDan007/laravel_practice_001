
@extends('layout')

@section('content')
    

<h1>Listings</h1>
@foreach($listings as $listing)
    <h1> <a href="listing/{{$listing['id']}}"> {{$listing['title']}} </a> </h1>
    <p> {{$listing['description']}} </p>
@endforeach

@endsection