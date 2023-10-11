<x-body>
    @section('title', 'Tutoria')
    <div class="container mt-3">
        <center>
            <h1>How can you donate?</h1>
        </center>
        <!-- Esto es una image con su texto -->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/home.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-4">
                <h2>Click in the "Giving back" button</h2>
            </div>
        </div>
        <!-- Termina aqui -->

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/Form.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-4">
                <h2>Fill in the form with the correct information</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/elegir estado.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-4">
                <h2> the state of the resource</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/ELEGIR CENTRO SUPERATE.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <center>
            <div class="col-8 text-center my-4">
                <h2> Which ¡Supérate! Center you want to give the resource and then click in the button to send the form</h2>
        </center>
    </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/HECHO.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <center>
            <div class="col-8 text-center my-4">
                <h2>When you send the form you will get an alert on your home page that your request has been received.</h2>
       </center>
            </div>
        </div>



    </div>
</x-body>
