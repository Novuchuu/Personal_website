<!DOCTYPE html
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="nav-menu">
            <nav>
                <ul>
                    <li><a href="index.html">About me</a></li>
                    <li class="active"><a href="notes.php">Notes</a></li>
                    <li><a href="projects.html">Projects</a></li>
                </ul>
            </nav>

        </div>
        <div class="main-content">
          <dive class="recent-notes-list">
            <h2>recent</h2>
            <ul>
              <?php
               $notesDir = 'notes/';
               $notes = glob($notesDir . '*.html');

               // Sort alphabetically
               sort($notes);

               foreach ($notes as $note) {
               $title = basename($note, '.html');
               echo '<li class="note-block"><a href="' . $note . '">' . $title . '</a></li>';
}
?>
</ul>
          </div>

        </div>
    </div>

    <footer>
        <!-- Footer content -->
    </footer>

    <script src="script.js"></script>
</body>
</html>
