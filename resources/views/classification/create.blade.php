@extends('app')

@section('title', 'LHU 新增動畫分類')

@section('lhu_contents')
    {!! Form::open(['url' => 'classification']) !!}
        <div class="form-group">
            {!! Form::label('name', "動畫分類名稱：") !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
        {!! Form::submit('新增分類', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')

@stop
