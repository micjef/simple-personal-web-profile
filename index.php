<?php 
  require './data/data.php';//ini db local, pada code ini hanya untuk menampilkan nama dan lead

  //koneksi ke db
  $conn = mysqli_connect("localhost", "root", "", "pemwebupn");

  //ambil data dari db
  $media = mysqli_query($conn, "SELECT * FROM media");
  $project = mysqli_query($conn, "SELECT * FROM project");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $data["nama"]; ?></title>
    <link rel="stylesheet" href="./styles/styles.css" />
    <link
      rel="shortcut icon"
      href="./images/micjef_logo.png"
      type="image/x-icon"
    />
  </head>
  <body>
    <div class="bg1">
      <div class="circle1"></div>
      <div class="circle2"></div>
      <div class="circle3"></div>
    </div>

    <div class="bg2">
      <div class="circle1"></div>
      <div class="circle2"></div>
    </div>

    <div class="container">
      <div class="left">
        <div class="info">
          <p class="title"><?php echo $data["nama"]; ?></p>
          <p class="lead">
            <?php echo $data["lead"];?>
          </p>
        </div>

        <div class="media">
          <?php while($mediaResult = mysqli_fetch_assoc($media)) : ?>
            <a href="<?= $mediaResult["link"]; ?>
              "><img src="./images/<?= $mediaResult["img"]; ?>" alt="<?= $mediaResult["alt"]; ?>"
            /></a>
          <?php endwhile; ?>
        </div>

        <div class="project">
          <p class="lead">My Projects</p>

          <div class="projects">
            <?php while($projectResult = mysqli_fetch_assoc($project)) : ?>
              <div class="card">
                <div class="inner">
                  <div class="front">
                    <img src="./images/project/<?= $projectResult["img"];?>" alt="<?= $projectResult["title"];?>" />
                  </div>
                  <div class="back">
                    <a href="<?= $projectResult["link"];?>">
                      <p><?= $projectResult["title"];?></p>
                    </a>
                    <p><?= $projectResult["lead"];?></p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>

        <div class="button">
          <a href="https://michael-jeffry-setiawan.web.app"><p>View more</p></a>
        </div>
      </div>

      <div class="right">
        <img src="./images/sitting.png" alt="sitting" />
      </div>
    </div>
  </body>
</html>

