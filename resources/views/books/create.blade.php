<h1>Create Book</h1>
<form method="POST" action="{{ route('books.store') }}">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="author_id">Author:</label>
        <select name="author_id" id="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Create</button>
</form>
