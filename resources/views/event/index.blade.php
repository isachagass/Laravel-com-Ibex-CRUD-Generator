@extends('layouts.app')

@section('template_title')
    Events
@endsection

@section('content')

    <div>
        <form action="{{ route('logout')}}" method="post">
        @csrf
        <input type="submit" value="Logout" class="btn btn-primary">
    
    </form>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Events') }}
                            </span>

                             @if ($is_admin == true)

                                <div class="float-right">
                                    <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                    </a>
                                </div>

                            @endif
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white d-flex">
                      



                                    @foreach ($events as $event)

                    <div class="card m-2" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex w-100 align-space-between">
                            <h5 class="card-title w-auto fs-5 mr-2">{{ $event->name }}</h5>
                            <h5 class="card-title text-body-secondary fs-6   ">{{ $event->date }}</h5>


                        </div>
                        <p class="card-text">{{ $event->description }}</p>
                        
                        <h4 class="card-title">{{ $event->start_time }} - {{ $event->end_time }}</h4>

                        @if ($is_admin == true)

                        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('events.show', $event->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                            <a class="btn btn-sm btn-success" href="{{ route('events.edit', $event->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                        </form>
                            
                        @endif 

                    </div>
                    </div>


{{-- 
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $event->name }}</td>
										<td >{{ $event->description }}</td>
										<td >{{ $event->date }}</td>
										<td >{{ $event->start_time }}</td>
										<td >{{ $event->end_time }}</td>
										<td >{{ $event->type_id }}</td>
										<td >{{ $event->latitude }}</td>
										<td >{{ $event->longitude }}</td>
										<td >{{ $event->district_id }}</td>
										<td >{{ $event->access_link }}</td>
										<td >{{ $event->ticket_quantity }}</td>
										<td >{{ $event->created_by }}</td>
										<td >{{ $event->updated_by }}</td> --}}

                                            {{-- <td>
                                                <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('events.show', $event->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('events.edit', $event->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td> --}}
                                
                                    @endforeach
                             
                        </div>
                    </div>
                </div>
                {!! $events->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
