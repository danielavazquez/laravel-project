@extends('google/layout')

@section('content')

  {!! Form::open([

      'url' => '/app'
      'method' => 'patch' //when updating an existing record a PUT|PATCH method must be added hence we are using forms


      //options you can also use
      //'action' => 'AppController@store'
      //'route'=> 'app.store'
      //'method' => 'post'
    
  ]) !!}

  {!! Form::close() !!}
@endsection