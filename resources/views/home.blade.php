@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-10">
            @if(isset($notes))
                <ul class="list-group">
                    @foreach($notes as $note)
                        <li class="list-group-item">
                            <a href="/note/{{ $note->id }}">{{ $note->title }}</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>keine Notizen vorhanden</p>
            @endif
        </div>
        <div class="col-2">
            <div class="btn-group-vertical">
                <a href="/note" class="btn btn-primary">Neue Notiz</a>
            </div>
        </div>
    </div>
@endsection
