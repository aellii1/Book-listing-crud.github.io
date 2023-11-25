@extends('books.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">
    <div class="pull-left py-3">
        <h2>
            Edit Book
        </h2>
    </div>

    <div class="pull-right my-2">
        <a class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
    </div>
</div>
</div>

@if ($errors->any())

<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br /><br />

    <ul>

        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>
</div>

@endif

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif


@foreach ($book as $book)

<form action="{{ route('books.update', $book->id) }}" method="POST">

@csrf
@method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="Title" class="form-control" value="{{ $book->Title }}" placeholder="Title">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Genre</strong>
            <select class="form-select" name="Genre" aria-label="Default select example">
                <option selected disabled>Genre</option>
                <option value="Drama" {{ $book->Genre == 'Drama' ? 'selected' : '' }}>Drama</option>
                <option value="Historical" {{ $book->Genre == 'Historical' ? 'selected' : '' }}>Historical</option>
                <option value="Dystopia" {{ $book->Genre == 'Dystopia' ? 'selected' : '' }}>Dystopia</option>
                <option value="Fantasy" {{ $book->Genre == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                <option value="Fiction" {{ $book->Genre == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                <option value="Horror" {{ $book->Genre == 'Horror' ? 'selected' : '' }}>Horror</option>
                <option value="Mystery" {{ $book->Genre == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                <option value="Poety" {{ $book->Genre == 'Poety' ? 'selected' : '' }}>Poety</option>
                <option value="Magical Realism" {{ $book->Genre == 'Magical_Realism' ? 'selected' : '' }}>Magical Realism</option>
                <option value="Sci-Fi" {{ $book->Genre == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
                <option value="Western" {{ $book->Genre == 'Western' ? 'selected' : '' }}>Western</option>
                <option value="Epic" {{ $book->Genre == 'Epic' ? 'selected' : '' }}>Epic</option>
                <option value="Fable" {{ $book->Genre == 'Fable' ? 'selected' : '' }}>Fable</option>
                <option value="Mythology" {{ $book->Genre == 'Mythology' ? 'selected' : '' }}>Mythology</option>
                <option value="Thriller" {{ $book->Genre == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                <option value="Tragedy" {{ $book->Genre == 'Tragedy' ? 'selected' : '' }}>Tragedy</option>
                <option value="Romance" {{ $book->Genre == 'Romance' ? 'selected' : '' }}>Romance</option>
                <option value="Satire" {{ $book->Genre == 'Satire' ? 'selected' : '' }}>Satire</option>
                <option value="Comedy" {{ $book->Genre == 'Comedy' ? 'selected' : '' }}>Comedy</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author</strong>
            <input type="text" name="Author" class="form-control" value="{{ $book->Author }}" placeholder="Author">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Pages</strong>
            <input type="number" name="Pages" class="form-control" value="{{ $book->Pages }}" placeholder="Pages">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Publication Date</strong>
            <input type="date" name="Publication Date" class="form-control" value="{{ $book->Publication_Date }}" placeholder="Publication Date">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price</strong>
            <input type="number" name="Price" class="form-control" value="{{ $book->Price }}" placeholder="Price" >
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center py-3">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

@endforeach

@endsection