@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{URL::to('/home/edit')}}/{{$post->id}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" >
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label><br>
                    <input type="text" class="form-control" id="picture" name="picture" value="{{$post->picture}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input class="form-control" rows="3" id="description" name="description" value="{{$post->description}}"></input>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category">
                        <option>Choose</option>
                        @foreach($category as $cat)
                            <option value="{{$cat->id}}">{{$cat->category}}</option>
                        @endforeach
                      
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection