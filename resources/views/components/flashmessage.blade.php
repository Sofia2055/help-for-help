@if (session()->has('success'))
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>

    <div class="alert alert-success d-flex alert-dismissible align-items-center fade show position-fixed bottom-0 end-0 me-3" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            {{ session('success') }}
        </div>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('error'))
    <svg display="none" xmlns="http://www.w3.org/2000/svg">
        <symbol id="error-circle-fill" viewBox="0 0 256 256" id=".8683188907199826" xmlns="http://www.w3.org/2000/svg">
            <g stroke-width="0" stroke-miterlimit="10" fill="none">
            <path d="M127.857 254.307c-69.725 0-126.45-56.726-126.45-126.45 0-69.725 56.725-126.45 126.45-126.45 69.724 0 126.45 56.725 126.45 126.45 0 69.724-56.726 126.45-126.45 126.45z" fill="#ec0000"/>
            <path d="M82.621 187.142c-3.597 0-7.19-1.371-9.936-4.117-5.488-5.485-5.488-14.381 0-19.866l90.47-90.471c5.483-5.485 14.385-5.485 19.868 0 5.487 5.488 5.487 14.384 0 19.87l-90.466 90.467a14.016 14.016 0 0 1-9.936 4.117z" fill="#fff"/>
            <path d="M173.092 187.142a13.993 13.993 0 0 1-9.933-4.117L72.688 92.557c-5.488-5.488-5.488-14.384 0-19.87 5.488-5.484 14.381-5.484 19.87 0l90.467 90.472c5.488 5.485 5.488 14.381 0 19.866a14.01 14.01 0 0 1-9.933 4.117z" fill="#fff"/>
            </g>
        </symbol>
   </svg>

    <div class="alert alert-danger d-flex alert-dismissible align-items-center fade show position-fixed bottom-0 end-0 me-3" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#error-circle-fill"/></svg>
        <div>
            {{ session('error') }}
        </div>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<script>
    window.setTimeout(function () {
    document.getElementsByClassName("alert-dismissible")[0].remove();
}, 4000);
</script>
