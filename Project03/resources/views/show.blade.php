@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                    <div class="card-body">
                   
                         <div class="border border-secondary mb-2">                      
                            <div class="card-body ">
                                <img class="h-25 w-25 " src="{{$post->picture}}" alt="">
                                <h2>{{$post->title}}</h2>
                                <p>{{$post->description}}</p>
                                <p>{{$post->user_id}}</p>
                            </div>
                            <div>
                                <h5 class="m-2">Comments</h5>
                                    @foreach($comments as $c)
                                        <p class="m-4">{{$c->comment}}</p>
                                    @endforeach 
                                </div>      

                            <form action="{{URL::to('/home/show')}}/{{$post->id}}" method="POST">
                            @csrf
                                <div class="form-group m-2">
                                     <label for="comment">Comments</label>
                                    <input type="text" class="form-control" id="comment" name="comment">
                                </div>
                                <button type="submit" class="btn btn-info m-2">Submit</button>
                            </form>
                        </div>
                                
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
