<nav class="sidebar sidebar-offcanvas" id="jstree">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="hreff('{{ route('home') }}')">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="jstree-open" class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-database menu-icon"></i>
                <span class="menu-title">Master</span>
                <i class="menu-arrow"></i>
            </a>

            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#" onclick="hreff('{{ route('user') }}')">User</a></li>
                <li class="nav-item"> <a class="nav-link" href="#" onclick="hreff('{{ route('group') }}')">Group</a></li>
                <li class="nav-item"> <a class="nav-link" href="#" onclick="hreff('{{ route('project') }}')">Project</a></li>
                <li class="nav-item"> <a class="nav-link" href="#" onclick="hreff('{{ route('material') }}')">Material</a></li>
            </ul>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="mdi mdi-clock-fast menu-icon"></i>
                <span class="menu-title">Production</span>
                <i class="menu-arrow"></i>
            </a>

            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#" onclick="hreff('{{ route('joblist') }}')">Job Ticket</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="hreff('{{ route('approval') }}')">Approval</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="hreff('{{ route('printing') }}')">Printing</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="hreff('{{ route('qcbalancing') }}')">QC & Balancing</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="hreff('{{ route('distribusi') }}')">Distribution</a></li>
            </ul>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-bar menu-icon"></i>
                <span class="menu-title">Report</span>
                <i class="menu-arrow"></i>
            </a>

            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#" onclick="hreff('{{ route('summary') }}')">Summary</a></li>
                <li class="nav-item"> <a class="nav-link" href="#" onclick="hreff('{{ route('detail') }}')">Detail</a></li>
            </ul>

        </li>
    </ul>
</nav>