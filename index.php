<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="container-fluid p-4">


  <div class="card p-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h6 class="mb-0">Today's Counselling</h6>
    </div>

    <div id="calendar" class="d-flex gap-2 calendar-days">
      <!-- روزها با JS ساخته میشن -->
    </div>
  </div>

  <div class="card p-3 mt-3">
    <h6>Events</h6>
    <div id="events-container" class="mt-2">
      <p class="text-muted">یک روز را انتخاب کنید</p>
    </div>
  </div>

  <!-- تقویم -->
  <div class="row">
    <div class="col-lg-8">
      <div class="card p-3">
        <h5>Today's Counselling</h5>

        <div id="calendar" class="d-flex gap-2 mt-3">
          <!-- روزها با JS ساخته میشن -->
        </div>
      </div>
    </div>

    <!-- ایونت‌های روز -->
    <div class="col-lg-4">
      <div class="card p-3">
        <h5>Events</h5>
        <div id="events-container" class="mt-3">
          <p class="text-muted">یک روز را انتخاب کنید</p>
        </div>
      </div>
    </div>
  </div>

</div>

<script src="assets/js/calendar.js"></script>