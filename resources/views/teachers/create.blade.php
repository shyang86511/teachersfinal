@extends('teachers.app')

@section('title', 'LHU 新聘老師')

@section('teachers_contents')
    {!! Form::open(['url' => 'teachers']) !!}
        @include('teachers.form', ['submitButtonText' => '新增一位老師'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
