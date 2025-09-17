@extends('layouts.app')

@section('template_title')
    {{ $event->name ?? __('Show') . " " . __('Event') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Event</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('events.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $event->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $event->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Date:</strong>
                                    {{ $event->date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Start Time:</strong>
                                    {{ $event->start_time }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>End Time:</strong>
                                    {{ $event->end_time }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Type Id:</strong>
                                    {{ $event->type_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Latitude:</strong>
                                    {{ $event->latitude }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Longitude:</strong>
                                    {{ $event->longitude }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>District Id:</strong>
                                    {{ $event->district_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Access Link:</strong>
                                    {{ $event->access_link }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ticket Quantity:</strong>
                                    {{ $event->ticket_quantity }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Created By:</strong>
                                    {{ $event->created_by }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Updated By:</strong>
                                    {{ $event->updated_by }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
