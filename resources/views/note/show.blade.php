@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-10">
            <h2>{{ $note->title }}</h2>
            <div class="form-group">
                <textarea class="form-control" disabled>{{ $note->content }}</textarea>
            </div>
        </div>
        <div class="col-2">
            <div class="btn-group-vertical">
                <a href="/" class="btn btn-primary">Zurück</a>
                <a href="/note/{{ $note->id }}/edit" class="btn btn-primary">Bearbeiten</a>
                <form action="/note/{{ $note->id }}/delete" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Löschen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
