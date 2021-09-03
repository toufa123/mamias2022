@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="d-flex">
                <i class="bx bx-error"></i>
                <span>
                            <ul class="list-unstyled text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                </span>
            </div>
        </div>
    </div>
@endif

