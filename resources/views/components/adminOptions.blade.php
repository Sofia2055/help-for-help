@props(['resource'])

@auth
    @if ($resource->can_be_modified)
        <div class="card-footer">
            @if ($resource->received == false)
                <a href="{{ url("resource/$resource->id/received") }}" class="btn btn-primary color-aqua w-100">Mark as
                    received</a>
            @else
                <form action="{{ url("resource/$resource->id/given") }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="Quantity" name="quantity" value="1"
                            min="1" max="{{ $resource->available_quantity }}"
                            aria-describedby="resource{{ $resource->id }}-addon">
                        <button class="btn btn-primary color-aqua" type="submit"
                            id="resource{{ $resource->id }}-addon">Give
                            resource</button>
                    </div>
                </form>
            @endif
        </div>
    @endif
@endauth
