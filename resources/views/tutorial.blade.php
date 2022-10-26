<x-body>
    @section('title', 'Tutorial')
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
            <div class="col-12 text-center">
                Click in the Giving back buttom



            </div>
        </div>
        <!-- Termina aqui -->

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/Form.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                Fill in the form with the correct information
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/elegir estado.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                Choose the state of the resource
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/ELEGIR CENTRO SUPERATE.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                Choose which ¡Supérate! Center you want to give the resource and then click in the buttom to send the form
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/HECHO.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                When you send the form you will get an alert on your home page that your request has been received.
            </div>
        </div>



    </div>
</x-body>
