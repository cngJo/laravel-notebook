@extends("layout.app")

@section("content")
    <div class="row">
        <div class="col-12">
            <form action="/note" method="post">
                @csrf
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Inhalt</label>
                            <textarea name="content" id="content" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="btn-group-vertical">
                            <button type="submit" class="btn btn-success">Speichern</button>
                            <a href="/" class="btn btn-danger">Verwerfen</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
