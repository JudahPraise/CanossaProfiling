<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<div class="col-lg-6 order-lg-6 d-flex flex-lg-row flex-column align-items-center">
    <lottie-player src="{{ asset('animations/notify.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
    <div class="d-flex flex-column">
        <h3>Verification Notice</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
</div>

<div class="col-lg-3 order-lg-3">
    <div class=" mb-4 align-self-start">
        <a href="{{ route('dashboard.index') }}">
            <div class="card shadow" style="border-left: 3px solid blue;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col ">
                            <div class="text-xs font-weight-boldtext-uppercase mb-1" style="color: blue; font-size: 1rem;">Verified Employees</div>
                            <div class="mb-0 font-weight-bold text-gray-800">{{ $verifiedCount }}</div>
                        </div>
                        <div class="col-auto">
                            <lottie-player src="{{ asset('animations/verified.json') }}" background="transparent"  speed="1"  style="width: 80px; height: 80px;" loop autoplay "></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 order-lg-3">
    <div class="mb-4 align-self-start">
        <a href="{{ route('dashboard.teachers') }}">
            <div class="card border-left-warning shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col ">
                            <div class="text-xs font-weight-bold text-warning mb-1" style="font-size: 1rem">Not Verified</div>
                            <div class="mb-0 font-weight-bold text-gray-800">{{ $notVerifiedCount }}</div>
                        </div>
                        <div class="col-auto">
                            <lottie-player src="{{ asset('animations/notVerified.json') }}" background="transparent"  speed="1"  style="width: 80px; height: 80px;" loop autoplay "></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

