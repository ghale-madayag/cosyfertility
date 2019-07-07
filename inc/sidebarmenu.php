<ul class="sidebar-menu" data-widget="tree">

  <li class="header">Main Menu</li>

  <!-- Optionally, you can add icons to the links -->

  <li id="dashboard"><a href="./"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

  <li class="treeview" id="patient">

    <a href="#"><i class="fa fa-users"></i> <span>Patient</span>

      <span class="pull-right-container">

          <i class="fa fa-angle-left pull-right"></i>

        </span>

    </a>

    <ul class="treeview-menu">

      <li><a href="add-patient.php">Add Patient</a></li>

      <li><a href="all-patient.php">All Patient</a></li>
      <li><a href="history.php">History</a></li>
      <li><a href="assessment.php">Assessment</a></li>
      <!-- <li><a href="plan.php">Plan</a></li> -->
      <li><a href="referral.php">Referral</a></li>

    </ul>

  </li>
  <li class="treeview" id="planMenu">

    <a href="#"><i class="fa fa-folder-open"></i> <span>Plan</span>

      <span class="pull-right-container">

          <i class="fa fa-angle-left pull-right"></i>

        </span>

    </a>

    <ul class="treeview-menu">

      <li><a href="patient-plan.php">Short Term (Patient)</a></li>
      <li><a href="partner-plan.php">Short Term (Partner)</a></li>
      <li><a href="follow-up.php">Follow-up</a></li>
      <li><a href="actual-follow-up.php">Actual Follow-up Visit</a></li>

    </ul>

  </li>
  <li id="usr"><a href="all-usr.php"><i class="fa fa-heartbeat"></i> <span>Ultrasound Report</span></a></li>
  <li id="tar"><a href="all-tar.php"><i class="fa fa-heart"></i> <span>Trans-Abdominal Report</span></a></li>
  <li id="esr"><a href="all-esr.php"><i class="fa fa-medkit"></i> <span>Embryology Report</span></a></li>
  <li><a href="backup-restore.php"><i class="fa fa-database"></i> <span>Backup & Restore</span></a></li>

</ul>