@extends('layouts.app')

@section('content')

<a href="{{route('Prods.index')}}">List of All Products</a> |
<a href="{{route('About.index')}}">About me</a> |
<a href="/aboutstore">About the Store</a>
@endsection