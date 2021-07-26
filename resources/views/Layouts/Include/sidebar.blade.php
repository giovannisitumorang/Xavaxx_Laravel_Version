<nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">            
          @yield('image')
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/">
              <i class="menu-icon icon-grid"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#hr_management" aria-expanded="false" aria-controls="hr_management">
              <i class="menu-icon icon-people"></i>
              <span class="menu-title">HR Management</span>
            </a>
            <div class="collapse " id="hr_management">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="/hrm/hrm-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/hrm/departments">Departments</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/hrm/designations">Designations</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/hrm/employees">Employees</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/hrm/announcement">Announcement</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/hrm/hrm-report">Reports</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#clients" aria-expanded="false" aria-controls="clients">
              <i class="menu-icon icon-briefcase"></i>
              <span class="menu-title">Clients</span>
            </a>
            <div class="collapse" id="clients">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item active">
                  <a class="nav-link" href="/clients/client-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/clients/contacts">Contacts</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/clients/companies">Companies</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/clients/activities">Activities</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#leave" aria-expanded="false" aria-controls="leave">
              <i class="menu-icon icon-directions"></i>
              <span class="menu-title">Leave</span>
            </a>
            <div class="collapse " id="leave">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="/leave/request">Request</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/leave/leave-entitlement">Leave Entitlements</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/leave/holidays">Holidays</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/leave/calendar">Calendar</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/leave/leave-report">Report</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#recruitment" aria-expanded="false" aria-controls="recruitment">
              <i class="menu-icon icon-user-follow"></i>
              <span class="menu-title">Recruitment</span>
            </a>
            <div class="collapse " id="recruitment">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/job-opening">Job Opening</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/candidates">Candidates</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/recruitment-calendar">Calendar</a>
                </li>
                  <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/recruitment-reports">Reports</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#accounting" aria-expanded="false" aria-controls="accounting">
              <i class="menu-icon icon-calculator"></i>
              <span class="menu-title">Accounting</span>
            </a>
            <div class="collapse " id="accounting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/accounting-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/vendors">Vendors</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/sales">Sales</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/expense">Expenses</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/chart-of-accounts">Chart of Accounts</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/bank-accounts">Bank Accounts</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/accounting-report">Reports</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#payroll" aria-expanded="false" aria-controls="payroll">
              <i class="menu-icon icon-wallet"></i>
              <span class="menu-title">Payroll</span>
            </a>
            <div class="collapse " id="payroll">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="/payroll/payroll-overview">Overview</a>
                </li>
                 <li class="nav-item ">
                  <a class="nav-link" href="/payroll/pay-run">Pay Run</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/payroll/pay-calendar">Pay Calendar</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/payroll/reports">Reports</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cargo" aria-expanded="false" aria-controls="cargo">
              <i class="menu-icon icon-plane"></i>
              <span class="menu-title">Cargo</span>
            </a>
            <div class="collapse " id="cargo">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item ">
                  <a class="nav-link" href="/cargo/quotation">Quotation</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/cargo/job-order">Job Order</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/cargo/item-cost">Item Cost</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="/cargo/unit">Unit</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="/cargo/cargo-port">Port</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="/cargo/airlines">Airlines</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="/cargo/consignee">Consignee</a>
                </li>
              </ul>
            </div>
          </li>
         
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#architecture" aria-expanded="false" aria-controls="architecture">
              <i class="menu-icon fa fa-building-o"></i>
              <span class="menu-title">Architecture</span>
            </a>
            <div class="collapse " id="architecture">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/all-project">All Project</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/rab-penawaran">RAB Penawaran</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/rab-borongan">RAB Borongan</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/categories">Categories</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/worker-all">Worker</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/worker-level">Worker Levels</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/worker-types">Worker Types</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/workers-checkins">Workers Check-Ins</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/workers-overtimes">Workers Overtimes</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#hospitality" aria-expanded="false" aria-controls="hospitality">
              <i class="menu-icon fa fa-hospital-o"></i>
              <span class="menu-title">Hospitality</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#patients" aria-expanded="false" aria-controls="patients">
              <i class="menu-icon icon-user"></i>
              <span class="menu-title">Patients</span>
            </a>
            <div class="collapse " id="patients">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/patients-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/cases">Cases</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/case-handlers">Case Handlers</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/patient-admissions">Patient Admissions</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="doctors">
              <i class="menu-icon fa fa-user-md"></i>
              <span class="menu-title">Doctors</span>
            </a>
            <div class="collapse " id="doctors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/doctors-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/doctor-departments">Departments</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/schedules">Schedules</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/prescriptions">Prescriptions</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://beta.xavaxx.com/nurse" aria-expanded="false" aria-controls="nurse">
              <i class="menu-icon fa fa-stethoscope"></i>
              <span class="menu-title">Nurse</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#medicines" aria-expanded="false" aria-controls="medicines">
              <i class="menu-icon fa fa-medkit"></i>
              <span class="menu-title">Medicines</span>
            </a>
            <div class="collapse " id="medicines">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/medicines-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/medicine-categories">Categories</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/medicine-brands">Brands</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#beds" aria-expanded="false" aria-controls="beds">
              <i class="menu-icon fa fa-h-square"></i>
              <span class="menu-title">Beds</span>
            </a>
            <div class="collapse " id="beds">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/beds-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/bed-list">Bed List</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/bed-assigns">Bed Assigns</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/bed-tranfer">Bed Transfer</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/report">Report</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#hospital-activities" aria-expanded="false" aria-controls="hospital-activities">
              <i class="menu-icon fa fa-random"></i>
              <span class="menu-title">Hospital Activities</span>
            </a>
            <div class="collapse " id="hospital-activities">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/birth">Birth</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/death">Death</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/operation">Operation</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maintenance" aria-expanded="false" aria-controls="maintenance">
              <i class="menu-icon icon-energy"></i>
              <span class="menu-title">Maintenance</span>
            </a>
            <div class="collapse " id="maintenance">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/main-overview">Overview</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/list-maintenance">List</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/sticker">Sticker</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://beta.xavaxx.com/category">Category</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://beta.xavaxx.com/proout">
              <i class="menu-icon icon-logout"></i>
              <span class="menu-title">Sign Out</span>
            </a>
          </li> -->
        </ul>
      </nav>