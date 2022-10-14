<x-body>
    @section('title', 'Home')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-carousel :images="[
                    'img\H4H group.jfif',
                    'img\1c2021d2-81af-429f-923a-0f86e9b1cabd.jfif',
                    'img\Holaa mundo primera imagen.jpg',
                ]" id="1" />
            </div>
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>
</x-body>
