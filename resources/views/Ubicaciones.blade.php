<x-body>
    @section('title', 'Ubicaciones')
    <div class="container">

        <div>
        <h2><b> Our locations</b></h2>
        </div>
        <br>
        <div>
            <h1>Find out where our outreaches are located so that you can help, Help for Help continue to grow. </h1>
        </div>
            <br>
        <div class="buttons">
            <button onclick="mostrarSantaTecla()">Santa Tecla</button>
            <button onclick="mostrarSanSalvador()">San Salvador</button>
        </div>
        <br>
        <div>
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984260.6940879985!2d-90.24997501534976!3d13.748140049707384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6327a659640657%3A0x6f9a16eb98854832!2sEl%20Salvador!5e0!3m2!1ses-419!2ssv!4v1696807322893!5m2!1ses-419!2ssv" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <script>
        function mostrarSantaTecla() {
            var mapa = document.getElementById("mapa");
            mapa.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15859.241924501246!2d-89.26959077249005!3d13.677501960175916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63b69e6a9c3a03%3A0x7d80e48f7b0a439b!2sSanta%20Tecla%2C%20El%20Salvador!5e0!3m2!1ses-419!2ssv!4v1696810666664!5m2!1ses-419!2ssv";
            mapa.contentWindow.location.reload(true);
        }

        function mostrarSanSalvador() {
            var mapa = document.getElementById("mapa");
            mapa.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984260.6940879985!2d-89.19124761452262!3d13.692940179954504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63380a9b91c6db%3A0x47b8b5c21b10d106!2sSan%20Salvador%2C%20El%20Salvador!5e0!3m2!1ses-419!2ssv!4v1696823112345!5m2!1ses-419!2ssv&z=15"; // Aquí se agrega "&z=15" para acercar el mapa
            mapa.contentWindow.location.reload(true);
        }
    </script>

</x-body>
