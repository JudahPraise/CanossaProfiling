<div class="row w-100 d-flex px-2">
    <div class="col-xl-3 col-md-6 mb-4 align-self-start">
        <a href="{{ route('dashboard.index') }}">
            <div class="card border-left-success shadow py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Employees</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employeeCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4 align-self-start">
        <a href="{{ route('dashboard.teachers') }}">
            <div class="card shadow h-100 py-2" style="border-left: 4px solid #1265B8">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Teachers</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $teacherCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4 align-self-start">
        <a href="{{ route('dashboard.staffs') }}">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Staff</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $staffCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-card-alt fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4 align-self-start">
        <a href="{{ route('dashboard.maintenance') }}">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Maintenance</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $maintenanceCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-check fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>