<form action="/quiz/{{ $quiz->id ?? '' }}" method="POST">
    @csrf
    @if(isset($quiz->id))
        @method('PUT')
    @endif

    <input type="text" name="title" value="{{ old('title', $quiz->title) }}" placeholder="Title">
    <textarea name="description" placeholder="Description">{{ old('description', $quiz->description) }}</textarea>
    <button type="submit">Save</button>
</form>