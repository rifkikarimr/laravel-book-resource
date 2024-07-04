<h1>Books</h1>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}">View</a>
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                    </td>
            </tr>
        @endforeach
    </tbody>
</table>
