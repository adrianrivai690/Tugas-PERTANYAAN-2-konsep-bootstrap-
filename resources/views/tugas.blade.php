<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Bootstrap Frames</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* Simple styles for the frames */
      .frame-header { background: #6c757d; color: #fff; padding: 1rem; }
      .frame { background: #f8f9fa; border: 1px solid #e9ecef; padding: 1rem; min-height: 100px; }
      .qual-list { margin-top: 0.5rem; }
      .blink {
        animation: blinker 1.2s linear infinite;
        color: #dc3545;
        font-weight: 600;
      }
      @keyframes blinker { 50% { opacity: 0; } }
      .small-muted { color:#6c757d; }
    </style>
  </head>
  <body>
    <div class="container my-4">
      <!-- First Frame: Name and address (full width) -->
      <div class="row mb-3">
        <div class="col-12 frame-header">
          <h4 class="mb-0">First Frame: Name and address</h4>
          <small class="small-muted">John Doe, 123 Example Street, City, Country</small>
        </div>
      </div>

      <!-- Second row: two columns -->
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="frame">
            <h5>Second frame</h5>
            <p class="mb-1"><strong>Bulleted list of qualifications</strong></p>
            <ul class="qual-list">
              <li>Bachelor in Computer Science</li>
              <li>Experience with Laravel & Bootstrap</li>
              <li>Teamwork and communication</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="frame">
            <h5>Third frame</h5>
            <p class="mb-1"><strong>Links to favourite sites</strong></p>
            <ul>
              <li><a href="https://laravel.com" target="_blank">Laravel</a></li>
              <li><a href="https://getbootstrap.com" target="_blank">Bootstrap</a></li>
              <li><a href="https://github.com" target="_blank">GitHub</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Third row: three columns -->
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="frame">
            <h6>Fourth frame</h6>
            <p class="mb-2"><strong>Scrolling message</strong></p>
            <!-- simple scrolling message; <marquee> kept for assignment-style behaviour -->
            <div class="small">
              <marquee behavior="scroll" direction="left">Welcome to the assignment demo — this message scrolls across the frame.</marquee>
            </div>  
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="frame text-center">
            <h6>Fifth frame</h6>
            <p class="mb-2"><strong>Blinking reminders</strong></p>
            <div class="blink">Don't forget to submit your assignment!</div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="frame text-center">
            <h6>Sixth frame</h6>
            <p class="mb-2"><strong>Image</strong></p>
            <img src="https://via.placeholder.com/200x120.png?text=Image" alt="placeholder" class="img-fluid rounded">
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
