@extends('teachers.app')

@section('title', 'LHU 編輯動畫資料')

@section('lhu_contents')

    {!! Form::model($classification, ['method'=>'PATCH','action'=>['TeachersController@update', $classification->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', "動畫分類名稱：") !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
        {!! Form::submit('編輯分類', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')

@stop
