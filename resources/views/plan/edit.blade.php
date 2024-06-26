@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>update benefits</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('plan.update',$plan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
                @if($plan->image)
                    <img src="{{asset('storage/'.$plan->image)}}" alt="" width="200px">
                @endif
            </div>



            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{$plan->title}}" id="title" required>
            </div>

            <div class="form-group">
                <label for="msg">Massage </label>
                <input type="text" class="form-control" value="{{$plan->msg}}" name="fe_1" id="fe_1">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
