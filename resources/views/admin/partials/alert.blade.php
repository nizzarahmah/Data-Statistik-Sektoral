@if($success = Session::get('success'))

<div class="alert bg-success text-white alert-dismissible fade show" role="alert">{{$success}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if($delete = Session::get('delete'))
<div class="alert bg-danger text-white alert-dismissible fade show" role="alert">{{$delete}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
