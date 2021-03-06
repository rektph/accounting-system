<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-receipt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Accounting System</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item{{ Route::currentRouteName() == 'home' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item{{ explode('.', Route::currentRouteName())[0] == 'employee' ? ' active' : '' }}">
        <a class="nav-link collapsed" href="{{route('employee.index')}}">
            <!-- data-toggle="collapse" data-target="#employeeCollapse" aria-expanded="true" aria-controls="employeeCollapse"> -->
            <i class="fas fa-fw fa-user"></i>
            <span>Employee</span>
        </a>
        <!-- <div id="employeeCollapse" class="collapse{{ explode('.', Route::currentRouteName())[0] == 'employee' ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item{{ Route::currentRouteName() == 'employee.create' ? ' active' : '' }}" href="{{ route('employee.create') }}">Add Employee</a>
                <a class="collapse-item{{ Route::currentRouteName() == 'employee.index' ? ' active' : '' }}" href="{{ route('employee.index') }}">Edit Employee</a>
            </div>
        </div> -->
    </li>

    <li class="nav-item{{ explode('.', Route::currentRouteName())[0] == 'payroll' ? ' active' : '' }}">
        <a class="nav-link collapsed" href="{{route('payroll.index')}}">
             <!-- data-toggle="collapse" data-target="#payrollCollapse" aria-expanded="true" aria-controls="payrollCollapse"> -->
            <i class="fas fa-fw fa-receipt"></i>
            <span>Payroll</span>
        </a>
        <!-- <div id="payrollCollapse" class="collapse{{ explode('.', Route::currentRouteName())[0] == 'payroll' ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item{{ (Route::currentRouteName() == 'payroll.index' || Route::currentRouteName() == 'payroll.create') ? ' active' : '' }}" href="{{ route('payroll.index') }}">
                    <span>Generate Payroll</span>
                </a>
            </div>
        </div> -->
    </li>

    <li class="nav-item{{ explode('.', Route::currentRouteName())[0] == 'branch' ? ' active' : '' }}">
        <a class="nav-link collapsed" href="{{route('branch.index')}}">
             <!-- data-toggle="collapse" data-target="#branchCollapse" aria-expanded="true" aria-controls="Collapse"> -->
            <i class="fas fa-fw fa-building"></i>
            <span>Branch</span>
        </a>
        <!-- <div id="branchCollapse" class="collapse{{ explode('.', Route::currentRouteName())[0] == 'branch' ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item{{ Route::currentRouteName() == 'branch.create' ? ' active' : '' }}" href="{{ route('branch.create') }}">Add Branch</a>
                <a class="collapse-item{{ Route::currentRouteName() == 'branch.index' ? ' active' : '' }}" href="{{ route('branch.index') }}">Edit Branch</a>
            </div>
        </div> -->
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>