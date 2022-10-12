<x-body>
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <x-carousel :images="$resource->images" :id="$resource->id" />
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $resource->product_name }}</h5>
                                    <p class="card-text">{{ $resource -> description }} </p>
                                    <p class="card-text"><small class="text-muted">{{ $resource }}</small></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $resource -> available_quantity </li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-body>
