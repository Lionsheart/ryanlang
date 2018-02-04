@extends('layouts.master')

@section('content')
    
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Contact</h2>

            @include('flash::message')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open(['route' => 'contact.store', 'class' => 'form']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Your Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail Address') !!}
                {!! Form::text('email', null, ['class' => 'form-control required']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('msg', null, ['class' => 'form-control required']) !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
        
        
    </div>
    
@endsection

@push('scripts')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@endpush