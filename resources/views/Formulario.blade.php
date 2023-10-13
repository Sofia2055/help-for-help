<x-body>
    @section('title', 'Formulario')
    <div class="container">
        <div class="row my-3">
            <form action="/ally_form" method="POST" class="col-12" onsubmit="checkIsConfirmed()">
                @csrf
                <h1><b>Form for Partners</b></h1>
                <div class="col-12 offset-0 col-md-8 offset-md-2"></div>
                <x-input type="text" label="Company Name" name="name" :required="true" />

                <x-input type="text" label="Company representative / Leader" name="leader" :required="true" />

                <x-input type="email" label="Email representative " name="email" :required="true" />

                <x-input type="text" label="Number phone" name="phone_number" :required="true" />

                <x-input type="text" label="company's address" name="address" :required="true" />

                <div class="mb-3 text-start">
                    <label for="formFileMultiple" class="form-label">Image of your Company Logo</label>
                    <input name="images[]" class="form-control" type="file" id="formFileMultiple" multiple>
                </div>

                <div class="form-check text-start">
                    <input class="form-check-input" type="checkbox" name="confirm" id="check">
                    <label class="form-check-label" for="flexCheckDefault">
                        You agree to our policy and conditions
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Send form</button>
            </form>
        </div>

        <script>
            let checkbox = document.getElementById('check');

            function checkIsConfirmed() {
                if (!checkbox.checked) {
                    event.preventDefault();
                    alert("Please check the checkbox before submitting the form.");
                }
            }
        </script>
</x-body>
