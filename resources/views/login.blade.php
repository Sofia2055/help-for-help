<x-body>
    @section('title', 'login')
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card my-3">
                        <div class="row g-0 my-5">
                            <div class="col-md-4 order-3 order-md-2">
                                <div class="col-10 offset-1">
                                    <form action="{{ url('login') }}" method="POST">
                                        @csrf
                                        <x-input type="email" label="Email address" name="email" :required="true"/>
                                        <x-input type="password" label="Password" name="password" :required="true"/>
                                        <button type="submit" class="btn btn-primary w-100 color-aqua">Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 order-2 order-md-2">
                                <div class="col-10 offset-1">
                                    <div class="card-body">
                                        <h1 class="card-title text-center">Help for help<br>Administration</h1>
                                        <p class="card-text text-center">Type the email address you were assigned to log in to administration.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-8 offset-2 offset-md-0 order-1 order-md-2 pe-md-4 d-flex flex-wrap align-items-center">
                                <img src="{{ url('img/HELP FOR HELP.png') }}" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-body>
