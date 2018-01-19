@extends('app')

@section('title', 'LHU 編輯動畫資料')

@section('lhu_contents')

    {!! Form::model($informations, ['method'=>'PATCH','action'=>['InformationsController@update', $informations->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', "動畫名稱：") !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
            {!! Form::label('Original_author', "動畫作者：") !!}
            {!! Form::text('Original_author', null, ['class' => 'form-control']) !!} <br/>
        </div>
         <div class="form-group">
            {!! Form::label('Manufacturer', "動畫製作商：") !!}
            {!! Form::text('Manufacturer', null, ['class' => 'form-control']) !!} <br/>
        </div>
         <div class="form-group">
            {!! Form::label('url', "url：") !!}
            {!! Form::text('url', null, ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
                {!! Form::label('animation_classification_id', "分類：") !!}
                <select name="animation_classification_id">
                        @foreach($classification as $classificationn)
                                @if (isset($informations->animation_classification))
                                        @if ($informations->animation_classification->id == $classificationn->id)
                                                <option value="{{ $classificationn->id }}" selected>{{ $classificationn->name }}</option>
                                        @else
                                                <option value="{{ $classificationn->id }}">{{ $classificationn->name }}</option>
                                        @endif
                                @else
                                        <option value="{{ $classificationn->id }}">{{ $classificationn->name }}</option>
                                @endif
                        @endforeach
                </select>
        </div>

        <div class="form-group">
        {!! Form::submit('編輯資料', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')

@stop
