@extends('books.layout')

@section('content')
    <div class="pull-left py-3">
        <h3>
            Book Listing
        </h3>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right py-3">
                <a class="btn btn-outline-success" href="{{ route('books.create') }}">Create New Book</a>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>

        <script>
        // Automatically hide the success alert after 1 second
            $(document).ready(function(){
                setTimeout(function(){
                    $("#successAlert").fadeOut("slow", function(){
                        $(this).remove();
                    });
                }, 1000);
            });
        </script>
    @endif

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Author</th>
            <th>Pages</th>
            <th>Publication Date</th>
            <th>Price</th>
            <th widht="280px">Action</th>

        </tr>
        
        @foreach($books as $books)

        <tr>
            <td>{{ $books->id}}</td>
            <td>{{ $books->Title }}</td>
            <td>{{ $books->Genre }}</td>
            <td>{{ $books->Author }}</td>
            <td>{{ $books->Pages }}</td>

            @if ($books->Publication_Date)
            <td>
                {{ $books->Publication_Date }}
            </td>

            @else
            <td>
                <p>
                    To be announce
                </p>
            </td>
            @endif

            <td>{{ $books->Price }}</td>

            <td>

                <form action="{{ route('books.destroy', $books->id) }}" method="POST">

                    <a class="btn btn-outline-secondary" href="{{ route('books.show', $books->id) }}">Show</a>

                    <a class="btn btn-outline-success" href="{{ route('books.edit', ['book' => $books]) }}">Edit</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

@endsection