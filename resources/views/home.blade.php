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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="row g-0">
                        <div class="col-8 offset-2 offset-md-0 col-md-3">
                            <img src="img/logo-k.png" width="100%" class="p-4">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body">
                                        <h5 class="card-title fs-2">Who we are:</h5>
                                        <p class="card-text">We are a group of students whose goal is to help people who
                                            were affected by the pandemic so we created "Help for Help" to lend a
                                            helping hand and also for people who like to help people who are affected by
                                            the pandemic.</p>
                                        <h6 class="card-title fs-2">Objectives</h6>
                                        <p>We seek to promote a circular economic system between ¡Supérate! Active
                                            students, alumni, and families. That way, unused products can have a new
                                            purpose, and students can reutilize them according to their needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 offset-1">
            <div class="row row-cols-1 row-cols-sm- 2row-cols-md-3 row-cols-lg-3 g-3">
                @foreach ($centers as $center)
                    <div class="col">
                        <div class="card h-100">
                            <img src="centers-img/{{ $center->id }}.png">
                            <div class="card-body">
                                <h5 class="card-title fs-4">Centro {{ $center->name }}</h5>
                                <p class="card-text"> {{ $center->description }}</p>
                            </div>
                            <div class="col-12 align-self-end">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Phone: {{ $center->phone }}</li>
                                    <li class="list-group-item">Email: {{ $center->email }}</li>
                                    <li class="list-group-item">Address: {{ $center->address }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-body>
