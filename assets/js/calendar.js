const calendar = document.getElementById('calendar');

for (let i = 1; i <= 7; i++) {
  let btn = document.createElement('button');
  btn.className = 'btn btn-light day';
  btn.dataset.date = `2026-01-${i}`;
  btn.innerText = i;

  btn.onclick = () => loadEvents(btn.dataset.date, btn);
  calendar.appendChild(btn);
}

function loadEvents(date, el) {
  document.querySelectorAll('.day').forEach(d => d.classList.remove('active'));
  el.classList.add('active');

  fetch('ajax/get-events.php?date=' + date)
    .then(res => res.text())
    .then(html => {
      document.getElementById('events-container').innerHTML = html;
    });
}
