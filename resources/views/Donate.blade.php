<x-body>
    @section('title', 'Donate')
    <div class="container">
        <div class="row">

            <style>
                body {
                    font-family: Arial, sans-serif;
                }

                .container {
                    padding: 20px;
                }

                .donate-content {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .donate-text {
                    max-width: 100%; /* Asegura que el texto ocupe el ancho completo en pantallas pequeñas */
                    padding: 20px;
                    border: 2px dashed #ccc;
                    border-radius: 10px;
                    background-color: #f9f9f9;
                }

                .donate-text p {
                    font-size: 16px;
                    line-height: 1.6;
                }

                .logo {
                    max-width: 100%; /* Asegura que el logo ocupe el ancho completo en pantallas pequeñas */
                    padding: 20px;
                }

                h1 {
                    font-size: 36px;
                    text-align: center;
                    margin-bottom: 20px;
                }

                @media (min-width: 768px) {
                    .donate-content {
                        flex-direction: row;
                        justify-content: space-between;
                    }
                    .donate-text {
                        flex: 1;
                    }
                    .logo {
                        max-width: 30%;
                    }
                }
            </style>

            <div class="container">
                <div class="donate-content">
                    <div class="donate-text">
                        <h1>Donate</h1>
                        <p>Your donation is the seed that fuels Help for Help's growth, allowing more hands to reach out
                            to those who need it most. By coming together, we transcend barriers and create a lasting
                            impact and put Giving Back into practice in the lives of those affected. Every contribution,
                            large or small, strengthens our community and fosters a more just and compassionate world.
                            At the heart of every donation, we beat as one heart committed to change. Every word of
                            encouragement, every coin shared, is the fuel that fuels our mission. Let's echo hope and
                            expand Help for Help's reach, together. With your support, together we will build a legacy
                            of empathy and progress. Donate today, and be a part of this extraordinary journey so that
                            Help for Help continues to grow and open pathways to a better world for all.
                        </p>
                    </div>
                    <img src="img/HELP FOR HELP.png" class="logo">
                </div>
            </div>


            <!--esto lo saque del sitio de paypal-->


            <!-- Replace "test" with your own sandbox Business account app client ID -->
            <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
            <!-- Set up a container element for the button -->
            <div id="paypal-button-container"></div>

            <script>
                paypal.Buttons({
                    // Order is created on the client side and the orderID is passed to the onApprove function
                    createOrder(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    currency_code: 'USD',
                                    value: '1.00' // Replace with the actual donation amount
                                }
                            }]
                        });
                    },
                    // Finalize the transaction on the client side after payer approval
                    onApprove(data, actions) {
                        return actions.order.capture().then(function(details) {
                            // Successful capture! Show a success message
                            const element = document.getElementById('paypal-button-container');
                            element.innerHTML =
                                '<div class="alert alert-success" role="alert">Thank you for your donation! <3</div>';
                            // Or you can use a pop-up alert if you prefer:
                            // alert('Thank you for your donation!');
                        });
                    }
                }).render('#paypal-button-container');
            </script>

            <style>
                .alert {
                    padding: 10px;
                    margin-top: 20px;
                    color: #155724;
                    background-color: #d4edda;
                    border-color: #c3e6cb;
                    border-radius: 5px;
                }
            </style>



</x-body>
