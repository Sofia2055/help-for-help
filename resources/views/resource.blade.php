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
                                        </ul>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-body>
