        <div class="form-group">
            {!! Form::label('name', "動畫分類名稱：") !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
            {!! Form::label('email', "老師的電子郵件信箱：") !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
            {!! Form::label('professional', "老師的專長：") !!}
            {!! Form::text('professional', null, ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
            {!! Form::label('url', "老師的網站：") !!}
            {!! Form::text('url', 'http://www.cin.lhu.edu.tw/', ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
