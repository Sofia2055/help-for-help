<x-body>
<div class="container my-3">
    <div class="row row-cols-1 row-cols-sm- 2row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($resources as $resource)
            <div class="col">
                <div class="card h-100">
                    <x-carousel :images="$resource->images" :id="$resource->id"/>
                    <div class="card-body">
                        <a href="{{ url("resource/$resource->id") }}" class="card-link">
                            <h5 class="card-title fs-4">{{ $resource->product_name }}</h5>
                            <p class="card-text">{{ $resource->description }}</p>
                        </a>
                    </div>
                    @auth
                    <div class="card-footer">
                        @if ($resource->received == false)
                            <a href="{{ url("resource/$resource->id/received") }}"
                                class="btn btn-primary color-aqua w-100">Mark as received</a>
                        @else
                            <form action="{{ url("resource/$resource->id/given") }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="number" class="form-control"
                                        placeholder="Quantity" name="quantity" value="1"
                                        min="1" max="{{ $resource->available_quantity }}"
                                        aria-describedby="resource{{ $resource->id }}-addon">
                                    <button class="btn btn-primary color-aqua" type="submit"
                                        id="resource{{ $resource->id }}-addon">Give
                                        resource</button>
                                </div>
                            </form>
                        @endif
                    </div>
                @endauth
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-body>
