@extends('books.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left py-3">
                <h2>
                    Book Details
                </h2>
            </div>

            <div class="pull-right my-2">
                <a class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
            </div>
        </div>

    </div>

    <div class="row">

    <table class="table table-bordered">

<tr>

    <th>
        Title
    </th>

    <th>
        Genre
    </th>

    <th>
        Author
    </th>

    <th>
        Publication Date
    </th>

    <th>
        Price
    </th>

    <th>
        Action
    </th>

</tr>

<tr>

    <td>
        {{ $book->Title }}
    </th>

    <td>
        {{ $book->Genre }}
    </td>

    <td>
        {{ $book->Author }}
    </td>

    @if ($book->Publication_Date)
        <td>
            {{ $book->Publication_Date }}
        </td>

    @else
        <td>
            <p>
                To be announce
            </p>
        </td>
    @endif


    @if($book->Price)
        <td>
            {{ $book->Price }}
        </td>

    @else
        <td>
            Not Available
        </td>
    @endif

    <td>

    <form action="{{ route('books.destroy', $book->id) }}" method="POST">

        <a class="btn btn-outline-success" href="{{ route('books.edit', ['book' => $book]) }}">Edit</a>

        @csrf

        @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>

    </form>

    </td>

</tr>

</table>

@endsection