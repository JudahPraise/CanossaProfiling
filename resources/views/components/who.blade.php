@if(Auth::guard('web')->check())
    <h1 class="text-success">
        You are Logged In as <strong>USER</strong>
    </h1>
@else
    <h1 class="text-danger">
        You are Logged Out as <strong>USER</strong>
    </h1>
@endif

@if(Auth::guard('admin')->check())
    <h1 class="text-success">
        You are Logged In as <strong>ADMIN</strong>
    </h1>
@else
    <h1 class="text-danger">
        You are Logged Out as <strong>ADMIN</strong>
    </h1>
@endif