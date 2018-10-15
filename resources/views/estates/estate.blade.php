
<div class="col-md-4">
    
        <div class="card mb-4 shadow-sm">
            <a href="/estates/{{ $estate->id }}" class="notalink">
                <img class="card-img-top" src={{ $estate->picture_url }} alt="Card image cap">
            </a>
            <div class="card-body">
                <p class="card-text">{{ substr($estate->body, 0, 200) }}...</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/estates/{{ $estate->id }}">View</a></button>
                        @auth
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/edit/{{ $estate->id }}">Edit</a></button>
                        @endauth
                    </div>
                    <small class="text-muted">{{$estate->created_at->toFormattedDateString() }}</small>
                </div>
            </div>
        </div>
</div>