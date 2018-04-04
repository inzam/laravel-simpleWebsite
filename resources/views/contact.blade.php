@extends('layouts.app')

@section('content')
    @include('inc.message')
    <h1>Contact</h1>
    {{--lara-form--}}
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class'=>'form-control','placeholer'=>'Enter Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('email','E-mail')}}
        {{Form::email('email','',['class'=>'form-control','placeholer'=>'Enter E-mail'])}}
    </div>

    <div class="form-group">
        {{Form::label('message','Message')}}
        {{Form::textarea('message','',['class'=>'form-control','placeholer'=>'Message'])}}
    </div>

    <div class="form-group">
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection