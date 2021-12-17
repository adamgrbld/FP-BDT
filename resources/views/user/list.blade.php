@extends('layouts.navbar')

@section('style')

@endsection
@section('content')
<div style="text-align: center;">
    <h3>LIST BOOK</h3>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
        <form class="form-horizontal col-sm-12" method="POST" action="{{route('user.index')}}">
            @csrf
            <input type="text" class="form-control" id="review" name="keyword">
            <button type="submit" class="btn btn-warning col-sm-4 col-sm-offset-4">
                Submit
            </button>
        </form>
        </div>
        <div class="card">
            <div class="row">
                @foreach ($list_book as $book)
                <div class="col-md-4">
                    <img src="img/<?php echo $book->path ?>" alt="..." style="height: 250px; width:250px; margin-top:50px">
                    <div class="caption">
                        <h3>{{$book->name}}</h3>
                        <p>Pengarang : {{$book->pengarang}}</p>
                        <p>Penerbit : {{$book->penerbit}}</p>
                        <p><a href="{{url('/book/'.$book->id)}}" class="btn btn-primary" role="button">Open</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection