@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="mb-2">
                    <a type="button" class="btn btn-secondary" href="{{URL::to('/home/create')}}">Create New Post</a>
                </div>
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                    @foreach($posts as $post)
                         <div class="border border-secondary mb-2">                      
                            <div class="card-body ">
                                <img class="h-25 w-25 " src="{{$post->picture}}" alt="">
                                <h2>{{$post->title}}</h2>
                                <p>{{$post->description}}</p>
                                <p>{{$post->user_id}}</p>
                                <a type="button" class="btn btn-secondary btn-sm" href="{{URL::to('/post')}}/{{$post->id}}">View Comments</a>
                                <a type="button" class="btn btn-info btn-sm" href="{{URL::to('/post/edit')}}/{{$post->id}}">Edit Post</a>
                                <a type="button" class="btn btn-danger btn-sm" href="{{URL::to('/post/delete')}}/{{$post->id}}">Delete Post</a>
                            </div>
                        </div>
                                
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

