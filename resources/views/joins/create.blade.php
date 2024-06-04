@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Create a join Section</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('joins.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Message -->
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea class="form-control textarea" id="msg" name="msg">{{ old('msg') }}</textarea>
            </div>

            <!-- Join Title -->
            <div class="form-group">
                <label for="join_title">Join Title</label>
                <input type="text" class="form-control" id="join_title" name="join_title" value="{{ old('join_title') }}">
                @error('join_title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Team Message -->
            <div class="form-group">
                <label for="team_msg">Team Message</label>
                <textarea class="form-control textarea" id="team_msg" name="team_msg">{{ old('team_msg') }}</textarea>
            </div>

            <!-- Join Image -->
            <div class="form-group">
                <label for="join_image">Join Image</label>
                <input type="file" class="form-control" id="join_image" name="join_image">
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>


@endsection
