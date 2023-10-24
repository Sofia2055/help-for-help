<x-body>
    @section('title', 'Home')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-carousel :images="['img\carr1.jpeg', 'img\carr2.jpeg', 'img\h4h.png']" id="1" />
            </div>
        </div>

        <script>
            var myCarousel = document.querySelector('#1');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 2000
            });
        </script>

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="row g-0">
                        <div class="col-8 offset-2 offset-md-0 col-md-3 text-center">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="verticalCarousel" class="carousel slide" data-ride="carousel"
                                        data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="img/foto 1.jpeg" alt="Image 1"
                                                    style="max-width: 100%; height: auto;">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/foto 2.jpeg" alt="Image 2"
                                                    style="max-width: 100%; height: auto;">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/foto 3.jpeg" alt="Image 3"
                                                    style="max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#verticalCarousel" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#verticalCarousel" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>

                                <div class="col-md-8">
                                    <div class="row h-100">
                                        <div class="col-12 d-flex h-100">
                                            <div class="card-body">
                                                <h5 class="card-title fs-2" style="text-align: left">Who we are:</h5>
                                                <p style="text-align: left">We are a group of students whose goal is to
                                                    help people who were affected by the pandemic so we created "Help
                                                    for Help"
                                                    to lend a helping hand and also for people who like to help people
                                                    who
                                                    are affected by the pandemic.</p>
                                                <h6 class="card-title fs-2" style="text-align: left">Objectives</h6>
                                                <p style="text-align: left">We seek to promote a circular economic
                                                    system between
                                                    Active students and families. That way, unused
                                                    products
                                                    can have a new purpose, and students can reutilize them according to
                                                    their needs.</p>
                                                <h6 class="card-title fs-2" style="text-align: left">Mission</h6>
                                                <p style="text-align: left">We seek to collect any material that is
                                                    considered useful in the academic area. We are motivated to find
                                                    ways to help.We trust that this resources can change the reality of
                                                    many students. Together we can make a difference.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 




    <br>
    <div class="col-12 col-md-10 offset-md-1">
        <div class="row row-cols-1 row-cols-sm-2 2row-cols-md-3 row-cols-lg-3 g-3">
        </div>
    </div>
    </div>
    <br>
    <h1><b>Our Values</b></h1>
    <div class="values-section">
        <div class="value">
            <img src="img/V1.PNG" alt="Valor 1">
            <h6><b>Honesty</b></h6>
            <p>It is to act with sincerity, not to lie, not to deceive, steal, or cheat.</p>
        </div>
        <div class="value">
            <img src="img/V2.png"alt="Valor 2">
            <h6><b>Solidarity</b></h6>
            <p>Solidarity is a value that is characterized by mutual collaboration between all members, which
                allows
                problems to be overcome.</p>
        </div>
        <div class="value">
            <img src="img/V3.png"alt="Valor 3">
            <h6><b>Empathy</b></h6>
            <p>It involves identifying with another person, knowing how to listen to others, understanding their
                problems and emotions.</p>
        </div>
        <div class="value">
            <img src="img/V4.png" alt="Valor 4">
            <h6><b>Resilience</b></h6>
            <p>Resilience is the ability to adapt to adverse situations and strengthen ourselves.</p>
        </div>
        <div class="value">
            <img src="img/V5.PNG" alt="Valor 5">
            <h6><b>Respect</b></h6>
            <p> It is caring about the impact of our actions on others, being inclusive and accepting others for
                who
                they are, even when they are different.</p>
        </div>

        <div class="value">
            <img src="img/V6.PNG" alt="Valor 6">
            <h6><b>Generosity</b></h6>
            <p> The term “generosity” characterizes both the act of giving and the spirit of the gift. </p>
        </div>
    </div>

    <h1><b>Sponsors</b></h1>
    <div class="patrocinadores">
        <div class="logo">
            <a href="https://fundacionpoma.org/">
                <img src="https://fundacionpoma.org/storage/settings/September2021/9rqfem6gBjMxyNIQZ2y4.png"
                    alt="Patrocinador 1">
            </a>
        </div>
        <div class="logo">
            <a href="https://www.campero.com/sv/inicio">
                <img src="https://www.campero.com/images/logotipo-campero-copia.png" alt="Patrocinador 1">
            </a>
        </div>
        <div class="logo">
            <a href="https://www.superselectos.com/">
                <img src="https://www.superselectos.com/img/logoB.png" alt="Patrocinador 1">
            </a>
        </div>

    </div>

</x-body>
