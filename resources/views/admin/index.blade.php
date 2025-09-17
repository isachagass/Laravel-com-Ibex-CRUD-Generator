@extends('layouts.app')

@section('content')

    <div class="float-right">
        <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
            {{ __('Create New') }}
        </a>
    </div>
    
@endsection