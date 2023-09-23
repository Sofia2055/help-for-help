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
                            <img src="img/ width="100%" class="p-4">
                        </div>
                        <div class="col-md-9">
                            <div class="row h-100">
                                <div class="col-12 d-flex h-100">
                                    <div class="card-body align-self-center">
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

    <div class="values-section">
        <h2>Our Values</h2>
        <div class="value">
            <img src="img\" alt="Valor 1">
            <p>Descripción del Valor 1</p>
        </div>
        <div class="value">
            <img src="img\" alt="Valor 2">
            <p>Descripción del Valor 2</p>
        </div>
        <div class="value">
            <img src="img\" alt="Valor 3">
            <p>Descripción del Valor 3</p>
        </div>
        <div class="value">
            <img src="img\" alt="Valor 4">
            <p>Descripción del Valor 4</p>
        </div>
        <div class="value">
            <img src="img\" alt="Valor 5">
            <p>Descripción del Valor 5</p>
        </div>
    </div>

    <script>
        window.addEventListener("scroll", function() {
            var valuesSection = document.querySelector(".values-section");
            var valuesSectionPosition = valuesSection.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;

            if (valuesSectionPosition < windowHeight) {
                valuesSection.style.animation = "fadeIn 1s ease";
                valuesSection.style.opacity = "1";
                valuesSection.style.transform = "translateY(0)";
            }
        });
    </script>

</x-body>

    <button id="open-chat" onclick="toggleChat()">Open Chat</button>
    <div id="chat-container" style="display: none;">
        <h6>Frequently Asked Questions (FAQ)</h6>
        <button onclick="sendQuestion(1)">Where can I apply to make a donation?</button>
        <button onclick="sendQuestion(2)">Is it reliable to use Help for Help?</button>
        <button onclick="sendQuestion(3)">Is there a way to do the process online?</button>
        <button onclick="clearChat()">Clear Chat</button>
        <div id="chat-output"></div>
    </div>

  <script>
    // Función borrar o vaciar el coso este del chat
    function clearChat() {
      const chatOutput = document.getElementById("chat-output");
      chatOutput.innerHTML = "";
    }

    // esto para mostrar y ocultat el chat
    function toggleChat() {
      const chatContainer = document.getElementById("chat-container");
      const openChatBtn = document.getElementById("open-chat");

      if (chatContainer.style.display === "none") {
        chatContainer.style.display = "block";
        openChatBtn.innerText = "Cerrar Chat";
      } else {
        chatContainer.style.display = "none";
        openChatBtn.innerText = "Open Chat";
      }
    }

    // esta es la funcion que el coso este al dar click a una pregunta tirara la respuesta :v
    function sendQuestion(questionNumber) {
      const chatOutput = document.getElementById("chat-output");
      let response = "";

      switch (questionNumber) {
        case 1:
          response = "You can make the donation at a Superate center near you by filling out a form with your information and the product. You can also use Giving Back by filling out the form with your information, attaching photos of the product and we will receive your request.";
          break;
        case 2:
          response = "Help for Help is secure, as each donation is anonymous and only the psychologist and director of the Superate Center has access to this information.";
          break;
        case 3:
          response = "Yes, we have a way to make your donation process online through Giving Back. Follow the tutorial to proceed with your donation.";
          break;
      }

      // esto es para que muestre la respuesta aaaa con la cosa de animacion de escritura
      chatOutput.innerHTML += "<p><strong>Pregunta:</strong> Pregunta " + questionNumber + "</p>";
      typeWriterEffect(chatOutput, response);
    }


    function typeWriterEffect(container, text) {
      let i = 0;
      const speed = 50; // esta cosa es para la velocidad de escritura que tendra

      function type() {
        if (i < text.length) {
          container.innerHTML += text.charAt(i);
          i++;
          setTimeout(type, speed);
        }
      }

      type();
    }

    document.addEventListener("click", function(event) {
      const chatContainer = document.getElementById("chat-container");
      const openChatBtn = document.getElementById("open-chat");

      if (!chatContainer.contains(event.target) && event.target !== openChatBtn) {
        chatContainer.style.display = "none";
        openChatBtn.innerText = "Open Chat";
      }

    });
  </script>







