<x-body>
    @section('title', "$resource->product_name resource")
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
                                <div class="row" style="height: 100%;">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <h5 class="card-title fs-2">{{ $resource->product_name }}</h5>
                                            <p class="card-text">{{ $resource->description }} </p>
                                        </div>
                                    </div>
                                    <div class="col-12 align-self-end">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">State: {{ $resource->state }}</li>
                                            <li class="list-group-item">Available quantity: {{ $resource->available_quantity }}</li>
                                            <li class="list-group-item">Centro {{ $resource->center->name }}</li>
                                            <li class="list-group-item">Phone: {{ $resource->center->phone }} | Email: {{ $resource->center->email }}</li>
                                            <li class="list-group-item">Address: {{ $resource->center->address }}</li>
                                        </ul>
                                        <x-adminOptions :resource="$resource"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-body>
