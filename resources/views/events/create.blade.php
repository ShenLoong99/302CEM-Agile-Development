@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/e" enctype="multipart/form-data" method="post">

        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Event Details</h1>
                </div>

                <div class="form-group row">
                    <label for="ename" class="col-md-4 col-form-label">Event Name</label>

                    <input id="ename" type="text" class="form-control @error('ename') is-invalid @enderror" name="ename" value="{{ old('ename') }}"  autocomplete="ename" autofocus>

                    @error('ename')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label">Category</label>

                    <select id="category" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" autofocus>
                      <option value="1">Entertainment</option>
                      <option value="2">Talk</option>
                      <option value="3">Seminar</option>
                      <option value="4">Fair</option>
                    </select>

                    @error('category')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">Description</label>

                <textarea id="description" rows="4" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus></textarea>

                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="venue" class="col-md-4 col-form-label">Where</label>

                <input id="venue" type="text" class="form-control @error('venue') is-invalid @enderror" name="venue" value="{{ old('venue') }}"  autocomplete="venue" autofocus>

                @error('venue')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

             <div class="form-group row">
                <label for="datetime_start" class="col-md-4 col-form-label">Start Time</label>

                <input id="datetime_start" type="datetime-local" class="form-control @error('datetime_start') is-invalid @enderror"name="datetime_start" value="{{ old('datetime_start') }}" autofocus>

                @error('datetime_start')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="datetime_end" class="col-md-4 col-form-label">End Time</label>

                <input id="datetime_end" type="datetime-local" class="form-control @error('datetime_end') is-invalid @enderror"name="datetime_end" value="{{ old('datetime_end') }}" autofocus>

                @error('datetime_end')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label">Price</label>

                <input id="price" min=0 max=9999 value=0 type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  autocomplete="price" autofocus>

                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="max_ptcp" class="col-md-4 col-form-label">Max Participants</label>

                <input id="max_ptcp" min=0 max=9999 type="number" class="form-control @error('max_ptcp') is-invalid @enderror" name="max_ptcp" value="{{ old('max_ptcp') }}"  autocomplete="max_ptcp" autofocus>

                @error('max_ptcp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


                <!-- <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div> -->

                <div class="row pt-4">
                    <button class="btn btn-primary">Update Event Details</button>
                </div>

            </div>
        </div>
    </form>
    
</div>
@endsection
