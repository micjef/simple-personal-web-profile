<?php 
  require 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michael Jeffry Setiawan</title>
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
          <?php foreach($data["media"] as $media) : ?>
            <a href="<?= $media["link"]; ?>
              "><img src="./images/<?= $media["img"]; ?>" alt="<?= $media["alt"]; ?>"
            /></a>
          <?php endforeach; ?>
        </div>

        <div class="project">
          <p class="lead">My Projects</p>

          <div class="projects">
            <?php foreach($data["project"] as $project) : ?>
              <div class="card">
                <div class="inner">
                  <div class="front">
                    <img src="./images/project/<?= $project["img"];?>" alt="<?= $project["title"];?>" />
                  </div>
                  <div class="back">
                    <a href="<?= $project["link"];?>">
                      <p><?= $project["title"];?></p>
                    </a>
                    <p><?= $project["lead"];?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
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

