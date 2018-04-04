@extends('layouts.app')
@section('content')
    @include('inc.message')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid dolore dolores ducimus earum ex explicabo libero, natus nulla, officiis perferendis quod recusandae rem reprehenderit sunt temporibus veniam voluptates voluptatum.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
