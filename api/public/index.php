<?php
  $data = json_decode(file_get_contents("http://www.dataservicepunt.nl/flevoland/data/?temp"), true);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://www.dataservicepunt.nl/flevoland/css/style.css">
    <title>Data marts en data services (API's)</title>
  </head>
  <body>
    <nav>
      <div class="wrapper">
        <a href="https://www.dataservicepunt.nl/flevoland/">Data&nbsp;Servicepunt&nbsp;Flevoland</a> |
        <a href="https://www.dataservicepunt.nl/flevoland/data/index.json">Data marts</a> |
        <a href="https://www.dataservicepunt.nl/flevoland/data/index.json">Data services (API's)</a> |
        <a href="http://apps.dataservicepunt.nl/">Apps</a> |
        <a href="mailto:flevoland@dataservicepunt.nl">flevoland@dataservicepunt.nl</a>
      </div>
    </nav>

    <header>
      <div class="wrapper">
        <img src="https://www.dataservicepunt.nl/flevoland/img/Logo.png" alt="Provincie Flevoland">
      </div>
    </header>

    <main>
      <div class="wrapper" style="padding-top: 8rem">
        <div class="content" style="max-width: 40rem; background: white; padding: 1rem; margin: auto;">
          <h1>data marts</h1>
<?php foreach ($data["datamarts"] as $datamart) { ?>
          <div class="datamart">
            <h2 style="max-width: 20em"><a href="<?php echo $datamart["uri"]; ?>"><?php echo $datamart["naam"]; ?></a></h2>
            <p>contact: <?php echo $datamart["contact"]; ?></p>
          </div>
<?php } ?>
          <h1>data services (API's)</h1>
<?php foreach ($data["dataservices"] as $dataservices) { ?>
          <div class="dataservice">
            <h2 style="max-width: 20em"><a href="<?php echo $dataservices["uri"]; ?>"><?php echo $dataservices["naam"]; ?></a></h2>
            <p>documentatie: <a href="<?php echo $dataservices["documentatie"]; ?>">swagger</a></p>
            <p>contact: <?php echo $dataservices["contact"]; ?></p>
          </div>
<?php } ?>
        </div>
      </div>
    </main>

    <footer>
      <div class="wrapper">
        <div style="display: flex">
          <div style="width: 150px">
            <img src="https://www.dataservicepunt.nl/flevoland/img/Logo-provincie-Flevoland.png?width=61&amp;height=83" alt="Logo Provincie Flevoland">
          </div>
          <div style="flex: auto">
            <h2>Meer informatie en contact</h2>
            <p><a href="mailto:flevoland@dataservicepunt.nl">flevoland@dataservicepunt.nl</a></p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>