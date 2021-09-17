<div class="scroll-sidebar">
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="nav-devider"></li>
            <li class="nav-small-cap">PERSONAL</li>
            {{-- <li> 
                <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                    <i class="mdi mdi-gauge"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li> --}}
            <li> 
                <a class="has-arrow waves-effect waves-dark" href="{{ route('userarea.users.index') }}" aria-expanded="false">
                    <i class="mdi mdi-account-multiple"></i>
                    <span class="hide-menu">Application Users</span>
                </a>
            </li>
            <li> 
                <a class="has-arrow waves-effect waves-dark" href="{{ route('userarea.appointments.index') }}" aria-expanded="false">
                    <i class="mdi mdi-calendar-multiple-check"></i>
                    <span class="hide-menu">All Appointments</span>
                </a>
            </li>
            <li> 
                <a class="has-arrow waves-effect waves-dark" href="{{ route('userarea.appointments.create') }}" aria-expanded="false">
                    <i class="mdi mdi-library-plus"></i>
                    <span class="hide-menu">Create New Appointment</span>
                </a>
            </li>
        </li>
    </ul>
</nav>
</div>