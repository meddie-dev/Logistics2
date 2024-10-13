<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">

        <h6 class=" tw-ml-4  tw-mb-4 tw-text-gray-500">Logistics 2</h6>

        <div class="nav">
            <hr>
            <!-- Heading -->
            <div class="sb-sidenav-menu-heading">Dashboard</div>

            <!-- Dashboard -->
            <a class="nav-link collapsed" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-columns"></i></i></div>
                Dashboard
            </a>

            <!-- Heading -->
            <div class="sb-sidenav-menu-heading">Services</div>

            <!-- Vendor Collapse -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVendor" aria-expanded="false" aria-controls="collapseVendor">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                Vendor
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseVendor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="/dashboard/vendor/registration">Registration</a> <!-- Allows vendors to sign up and register their details -->
                    <a class="nav-link" href="/dashboard/vendor/profile">Profile Management</a> <!-- Enables vendors to manage and update their profiles. -->
                    <a class="nav-link" href="/dashboard/vendor/invoice">Invoice Submission</a> <!-- Vendors can submit invoices for payment. -->
                </nav>
            </div>

            <!-- Audit Collapse -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAudit" aria-expanded="false" aria-controls="collapseAudit">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                Audit Management
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseAudit" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="/dashboard/audit/scheduling">Scheduling</a> <!-- Set up and manage audit schedules. -->
                    <a class="nav-link" href="/dashboard/audit/checklist">Checklist</a> <!-- Predefined checklists for conducting audits. -->
                    <a class="nav-link" href="/dashboard/audit/reporting">Reporting</a> <!-- Generate detailed reports on audit results. -->
                </nav>
            </div>

            <!-- Fleet Collapse -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFleet" aria-expanded="false" aria-controls="collapseFleet">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-gauge-high"></i></div>
                Fleet Management
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseFleet" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link" href="/dashboard/fleet/vehicle-tracking">Vehicle Tracking</a> <!-- Real-time GPS tracking of vehicles. -->
                    <a class="nav-link" href="/dashboard/fleet/fuel">Fuel Management</a> <!-- Monitor fuel usage and expenses. -->
                    <a class="nav-link" href="/dashboard/fleet/maintenance">Maintenance Scheduling</a> <!-- Set up and manage maintenance schedules and reminders. -->
                </nav>
            </div>

            <!-- Vehicle Reservation Collapse -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVehicle" aria-expanded="false" aria-controls="collapseVehicle">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-van-shuttle"></i></i></div>
                Vehicle Reservation
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseVehicle" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="#">Reservation Management</a> <!-- Display available vehicles and book reservations. -->
                    <a class="nav-link" href="#">Driver Assignment</a> <!-- Assign drivers to reserved vehicles. -->
                    <a class="nav-link" href="#">Vehicle Availability Tracking</a> <!-- Track the availability of vehicles for reservation. -->
                </nav>
            </div>

            <!-- Document Tracking Collapse -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDocument" aria-expanded="false" aria-controls="collapseDocument">
                <div class="sb-nav-link-icon"><i class="fa-regular fa-file"></i></div>
                Document Tracking
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDocument" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="#">Document Upload</a> <!-- Upload and store logistics-related documents. -->
                    <a class="nav-link" href="#">Document Search</a> <!-- Search functionality for finding specific documents. -->
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts
            </a>
            <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
</nav>