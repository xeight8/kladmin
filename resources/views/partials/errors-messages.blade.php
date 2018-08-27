@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger">{{ $error }}</div>
        </div>
    </div>
    @endforeach ()
@endif

@if (Session::has('messages'))
    @foreach (Session::get('messages') as $message)
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success">{{ $message }}</div>
        </div>
    </div>
    @endforeach ()
@endif