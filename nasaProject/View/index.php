<?php
if (!isset($title)) {
    include '../Models/home.php';
    exit; // Prevent rest of page from loading twice
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CSS Accordion Image Slider</title>
  <link rel="stylesheet" href="style.css" />

  <style>
    .content::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('<?php echo htmlspecialchars($mediaType === "image" ? $imageUrl : "assets/images/earth2.avif"); ?>');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      opacity: 0.4;
      z-index: -1;
    }
  </style>
</head>

<body>
  <div class="container content">
    <h3><?php echo htmlspecialchars($title); ?></h3>
    <p><?php echo htmlspecialchars($explanation); ?></p>
  </div>

  <div class="panels">
  <div class="panel active" style="background-image: url('/dashboard/assets/images/jupiter.avif');">
    <h3>Jupiter</h3>
    <p>facts about this planet here</p>
  </div>
  <div class="panel" style="background-image: url('/dashboard/assets/images/the moon.avif');">
    <h3>Moon</h3>
    <p>facts about this planet here</p>
  </div>
  <div class="panel" style="background-image: url('/dashboard/assets/images/the sun.avif');">
    <h3>Sun</h3>
    <p>facts about this planet here</p>
  </div>
  <div class="panel" style="background-image: url('/dashboard/assets/images/pluto.avif');">
    <h3>Pluto</h3>
    <p>facts about this planet here</p>
  </div>
</div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      let panels = document.querySelectorAll('.panel');
      panels.forEach(panel => {
        panel.addEventListener('click', () => {
          panels.forEach(p => p.classList.remove('active'));
          panel.classList.add('active');
        });
      });
    });
  </script>
</body>
</html>