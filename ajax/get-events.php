<?php
require '../includes/db.php';

$date = $_GET['date'] ?? null;

if (!$date) {
  exit('تاریخ نامعتبر');
}

$stmt = $db->prepare("SELECT * FROM events WHERE event_date = ?");
$stmt->execute([$date]);
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$events) {
  echo "<p class='text-muted'>رویدادی وجود ندارد</p>";
  exit;
}

foreach ($events as $event) {
  echo "
    <div class='border rounded p-2 mb-2'>
      <strong>{$event['title']}</strong><br>
      <small>{$event['event_time']}</small>
    </div>
  ";
}
