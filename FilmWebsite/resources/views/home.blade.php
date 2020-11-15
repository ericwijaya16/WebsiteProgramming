@extends('template')

@section('title','Beeflix')

@section('text1','Movie List')

@section('content1')



@foreach($genres as $genres)
<h1>{{$genres->name}}</h1>
@endforeach

<div class="row" style="display : flex">


@foreach($movies as $movies)

      <div class="card" style="width: 18rem;">
         <img class="card-img-top" src="{{asset('images/' . $movies->photo)}}" width="500px" height="500px" class="card-img-top" alt="">
             <div class="card-body">
                    <h5 class="card-title">{{$movies->title}}</h5>
                    <p class="text">{{$movies->description}}</p>
                    <a href="#" class="btn btn-primary">Details</a>
             </div>
      </div>

   @endforeach 
</div>
@endsection

