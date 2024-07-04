<h1>Edit Book</h1>
<form method="POST" action="{{ route('books.update', $book->id) }}">
    @csrf
    @method('PUT')
    </form>
