<x-body>
    @section('title', 'resources')
    <div class="container my-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach ($resources as $resource)
                <div class="col">
                    <div class="card h-100">
                        <x-carousel :images="$resource->images" :id="$resource->id" />
                        <div class="card-body">
                            <a href="{{ url("resource/$resource->id") }}" class="card-link">
                                <h5 class="card-title fs-4">{{ $resource->product_name }}</h5>
                                <p class="card-text">{{ $resource->description }}</p>
                            </a>
                        </div>
                        <x-adminOptions :resource="$resource" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-body>
