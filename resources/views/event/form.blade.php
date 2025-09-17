<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $event?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $event?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Date') }}</label>
            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $event?->date) }}" id="date" placeholder="Date">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start_time" class="form-label">{{ __('Start Time') }}</label>
            <input type="time" step="1" name="start_time" class="form-control @error('start_time') is-invalid @enderror" value="{{ old('start_time', $event?->start_time) }}" id="start_time" placeholder="Start Time">
            {!! $errors->first('start_time', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="end_time" class="form-label">{{ __('End Time') }}</label>
            <input type="time" step="1" name="end_time" class="form-control @error('end_time') is-invalid @enderror" value="{{ old('end_time', $event?->end_time) }}" id="end_time" placeholder="End Time">
            {!! $errors->first('end_time', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type_id" class="form-label">{{ __('Type Id') }}</label>
            <input type="text" name="type_id" class="form-control @error('type_id') is-invalid @enderror" value="{{ old('type_id', $event?->type_id) }}" id="type_id" placeholder="Type Id">
            {!! $errors->first('type_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="latitude" class="form-label">{{ __('Latitude') }}</label>
            <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror" value="{{ old('latitude', $event?->latitude) }}" id="latitude" placeholder="Latitude">
            {!! $errors->first('latitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="longitude" class="form-label">{{ __('Longitude') }}</label>
            <input type="text" name="longitude" class="form-control @error('longitude') is-invalid @enderror" value="{{ old('longitude', $event?->longitude) }}" id="longitude" placeholder="Longitude">
            {!! $errors->first('longitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="district_id" class="form-label">{{ __('District Id') }}</label>
            <input type="text" name="district_id" class="form-control @error('district_id') is-invalid @enderror" value="{{ old('district_id', $event?->district_id) }}" id="district_id" placeholder="District Id">
            {!! $errors->first('district_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="access_link" class="form-label">{{ __('Access Link') }}</label>
            <input type="text" name="access_link" class="form-control @error('access_link') is-invalid @enderror" value="{{ old('access_link', $event?->access_link) }}" id="access_link" placeholder="Access Link">
            {!! $errors->first('access_link', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ticket_quantity" class="form-label">{{ __('Ticket Quantity') }}</label>
            <input type="text" name="ticket_quantity" class="form-control @error('ticket_quantity') is-invalid @enderror" value="{{ old('ticket_quantity', $event?->ticket_quantity) }}" id="ticket_quantity" placeholder="Ticket Quantity">
            {!! $errors->first('ticket_quantity', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>