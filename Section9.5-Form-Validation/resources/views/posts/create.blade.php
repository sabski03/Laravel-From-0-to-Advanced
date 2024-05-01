@extends('layouts.master')

@section('content')


    <div class="col-6 offset-sm-3">
        <h2 class="mb-4 text-center" >Create a Post</h2>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{old('title')}}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleFeedback">
                <div id="titleFeedback" class="invalid-feedback">
                    @error('title')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Description</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body"  id="body" rows="5" aria-describedby="bodyFeedback"></textarea>
                <div id="bodyFeedback" class="invalid-feedback">
                    @error('body')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>




@endsection
