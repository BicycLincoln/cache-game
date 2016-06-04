@if(isset($success) || session('success'))
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ isset($success) ? $success : session('success') }}
            </div>
        </div>
    </div>
@endif