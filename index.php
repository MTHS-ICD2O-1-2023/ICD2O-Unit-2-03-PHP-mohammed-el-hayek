<!DOCTYPE html>
<html lang=en-ca>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Hello World program, in PHP" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Mohammed El-hayek" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>The Hello World program,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">The Hello World program, in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="page-content-php">
          <form action="answer.php" method="POST">
            <p>Name</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="name">
              <label class="mdl-textfield__label" for="name-input">Name here ...</label>
            </div>
            <br />
            <p>Age</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="age">
              <label class="mdl-textfield__label" for="age-input">Age here ...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <!-- Accent-colored raised button with ripple -->
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          </form>
        </div>
      </main>
    </div>
  </body>
</html>