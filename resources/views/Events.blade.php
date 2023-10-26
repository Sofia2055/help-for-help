<x-body>
    @section('title', 'Events')
    <div class="container">
        <div class="col-12 text-center">
            <h1><b>Events</b></h1>
        </div>
    </div>
    <div class="container">
        <button class="btn" style="background-color: #6bc72a; border-color: #6bc72a; color: white;"
            onclick="window.location.href='{{ url('/Calendar') }}'">
            <i class="fas fa-calendar"></i> Calendar
        </button>
    </div>
    <div class="container">
        <div class="card" style="max-width: 2000px; margin: 0 auto;">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/xdd.png" class="card-img-top" alt="event">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Expo Tech</h5>
                        <p class="card-text">Presentation of projects by Superate Centers</p>

                        <div class="event-info">
                            <p class="event-date"><strong>Date:</strong> 2023-11-08</p>
                            <p class="event-time"><strong>Time:</strong> 07:30</p>
                        </div>

                        <a href="#" class="btn btn-primary float-right" style="background-color: #6bc72a;border-color: #6bc72a;">See more</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                Last updated 3 minutes ago
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card" style="max-width: 2000px; margin: 0 auto;">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/xdd.png" class="card-img-top" alt="event">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Expo Tech</h5>
                        <p class="card-text">Presentation of projects by Superate Centers</p>

                        <div class="event-info">
                            <p class="event-date"><strong>Date:</strong> 2023-11-08</p>
                            <p class="event-time"><strong>Time:</strong> 07:30</p>
                        </div>
                        <a href="#" class="btn btn-primary float-right" style="background-color: #6bc72a;border-color: #6bc72a;">See more</a>
                </div>
            </div>

            <div class="card-footer text-muted">
                Last updated 3 minutes ago
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card" style="max-width: 2000px; margin: 0 auto;">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/xdd.png" class="card-img-top" alt="event">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Título de la Carta</h5>
                        <p class="card-text">Este es un ejemplo de una carta más pequeña con un contenido más breve.</p>
                        <a href="#" class="btn btn-primary float-right">Botón</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                Última actualización hace 3 minutos
            </div>
        </div>
    </div>



</x-body>
