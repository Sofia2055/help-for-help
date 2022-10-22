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
                Hacer click en el boton de Giving back



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
               Llena el formulario con los datos correctos
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/elegir estado.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                Elige el estado del producto
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/ELEGIR CENTRO SUPERATE.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                Elige el Centro Superate al que entregaras el producto y apretar el boton enviar formulario.
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <img src="{{ asset('tutorial/HECHO.png') }}"width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                Cuando envies el formulario te saldra una alerta en el home y sera que tu solicitud fue recibida.
            </div>
        </div>



    </div>
</x-body>
