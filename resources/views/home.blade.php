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
                        <div class="col-8 offset-2 offset-md-0 col-md-3 text-center">
                            <img src="img/HELP FOR HELP.png" width="80%" class="p-3">
                        </div>
                        <div class="col-md-9" style="text-align: left">
                            <div class="row h-100">
                                <div class="col-12 d-flex h-100">
                                    <div class="card-body">
                                        <h5 class="card-title fs-2">Who we are:</h5>
                                        <p class="card-text">We are a group of students whose goal is to
                                            help people who
                                            were affected by the pandemic so we created "Help for Help"
                                            to lend a
                                            helping hand and also for people who like to help people who
                                            are affected by
                                            the pandemic.</p>
                                        <h6 class="card-title fs-2">Objectives</h6>
                                        <p>We seek to promote a circular economic system between
                                            ¡Supérate! Active
                                            students, alumni, and families. That way, unused products
                                            can have a new
                                            purpose, and students can reutilize them according to their
                                            needs.</p>
                                        <h6 class="card-title fs-2">Mission</h6>
                                        <p>Our mission is to "back to reality" and help people who had
                                            difficulties in the pandemic and encourage others to help.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
            <p>Solidarity is a value that is characterized by mutual collaboration between all members, which allows problems to be overcome.</p>
        </div>
        <div class="value">
            <img src="img/V3.png"alt="Valor 3">
            <h6><b>Empathy</b></h6>
            <p>It involves identifying with another person, knowing how to listen to others, understanding their problems and emotions.</p>
        </div>
        <div class="value">
            <img src="img/V4.png" alt="Valor 4">
            <h6><b>Resilience</b></h6>
            <p>Resilience is the ability to adapt to adverse situations and strengthen ourselves.</p>
        </div>
        <div class="value">
            <img src="img/V5.PNG" alt="Valor 5">
            <h6><b>Respect</b></h6>
            <p> It is caring about the impact of our actions on others, being inclusive and accepting others for who they are, even when they are different.</p>
        </div>
    </div>

    <h1><b>Sponsors</b></h1>
    <div class="patrocinadores">
        <div class="logo">
            <a href="https://fundacionpoma.org/">
                <img src="https://fundacionpoma.org/storage/settings/September2021/9rqfem6gBjMxyNIQZ2y4.png" alt="Patrocinador 1">
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







