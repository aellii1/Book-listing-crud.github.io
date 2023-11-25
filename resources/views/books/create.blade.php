@extends('books.layout')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left py-3">
                <h2>
                    New Book
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

    <form action="{{ route('books.store') }}" method="POST">

        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="Title" class="form-control" value="{{ old('Title') }}" placeholder="Title">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Genre</strong>
                    <select class="form-select" name="Genre" aria-label="Default select example">
                        <option selected disabled>Genre</option>
                        <option value="Drama" {{ old('Genre') == 'Drama' ? 'selected' : '' }}>Drama</option>
                        <option value="Historical" {{ old('Genre') == 'Historical' ? 'selected' : '' }}>Historical</option>
                        <option value="Dystopia" {{ old('Genre') == 'Dystopia' ? 'selected' : '' }}>Dystopia</option>
                        <option value="Fantasy" {{ old('Genre') == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                        <option value="Fiction" {{ old('Genre') == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                        <option value="Horror" {{ old('Genre') == 'Horror' ? 'selected' : '' }}>Horror</option>
                        <option value="Mystery" {{ old('Genre') == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                        <option value="Poety" {{ old('Genre') == 'Poety' ? 'selected' : '' }}>Poety</option>
                        <option value="Magical Realism" {{ old('Genre') == 'Magical_Realism' ? 'selected' : '' }}>Magical Realism</option>
                        <option value="Sci-Fi" {{ old('Genre') == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
                        <option value="Western" {{ old('Genre') == 'Western' ? 'selected' : '' }}>Western</option>
                        <option value="Epic" {{ old('Genre') == 'Epic' ? 'selected' : '' }}>Epic</option>
                        <option value="Fable" {{ old('Genre') == 'Fable' ? 'selected' : '' }}>Fable</option>
                        <option value="Mythology" {{ old('Genre') == 'Mythology' ? 'selected' : '' }}>Mythology</option>
                        <option value="Thriller" {{ old('Genre') == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                        <option value="Tragedy" {{ old('Genre') == 'Tragedy' ? 'selected' : '' }}>Tragedy</option>
                        <option value="Romance" {{ old('Genre') == 'Romance' ? 'selected' : '' }}>Romance</option>
                        <option value="Satire" {{ old('Genre') == 'Satire' ? 'selected' : '' }}>Satire</option>
                        <option value="Comedy" {{ old('Genre') == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author</strong>
                    <input type="text" name="Author" class="form-control" placeholder="Author">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pages</strong>
                    <input type="number" name="Pages" class="form-control" placeholder="Pages">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Publication Date</strong>
                    <input type="date" name="Publication Date" class="form-control" placeholder="Publication Date">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="Price" class="form-control" placeholder="Price" value="{{ old('Price') }}">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center py-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@endsection