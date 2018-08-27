@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger">{{ $error }}</div>
        </div>
    </div>
    @endforeach ()
@endif