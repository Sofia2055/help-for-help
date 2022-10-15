<x-body>
    @section('title', 'Giving back')
    <div class="container">
        <div class="row my-3">
            <div class="col-12 text-center">
                <h1>Giving Back Form H4H</h1>
            </div>
            <div class="col-12 offset-0 col-md-8 offset-md-2">
                <form action="{{ url('/create/resource') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input type="text" label="Resource name" name="product_name" :required="true" />
                    <x-input type="email" label="Email" name="email" :required="true" />
                    <x-input type="text" label="Description of resource" name="description" :required="true" />
                    <x-input type="number" label="Quantity" name="resources_quantity" :required="true" />

                    <x-select name="state" :required="true" label="State of the resource"
                        placeholder="Select the state"
                        :options="[
                            'New' => 'New',
                            'Used as new' => 'Used as new',
                            'Used' => 'Used'
                        ]"
                    />

                    @php
                        $centersArray = [];
                        foreach($centers as $center){
                            $centersArray[$center->id] = "Centro $center->name";
                        }
                    @endphp

                    <x-select name="center_id" :required="true" label="Center in which will be given"
                        placeholder="Select the center"
                        :options="$centersArray"
                    />

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Image of the resource max 6 images</label>
                        <input name="images[]" class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 color-aqua">Send petition</button>
                </form>
            </div>
        </div>
    </div>

    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
</x-body>
