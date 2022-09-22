<div class="container">
    <div class="row justify-contnent-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2>Breakdowns/h2>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <ul class="list-group">
                            @forelse($breakdowns as $breakdown)
                            <li class="list-group-item">
                                <div class="trucks-list">
                                    <div class="content">
                                        <h2><span></span>{{$breakdown->title}}</h2>
                                        <h4><span>status: </span>{{$breakdown->status}}</h4>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <li class="list-group-item">No breakdowns found</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
