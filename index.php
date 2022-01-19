<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">

  <style>
    .profile-pic {
      color: #808B9F;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 1.1rem;
    }
  </style>

</head>
<body>

  <?php
    function getProfilePicture($name){
        $name_slice = explode(' ',$name);
        $name_slice = array_filter($name_slice);
        $initials = '';
        $initials .= (isset($name_slice[0][0]))?strtoupper($name_slice[0][0]):'';
        $initials .= (isset($name_slice[count($name_slice)-1][0]))?strtoupper($name_slice[count($name_slice)-1][0]):'';
        return '<div class="img profile-pic">'.$initials.'</div>';
      }
  ?>

  <div class="wrapper">
    <div class="outer">
      <div class="card" style="--delay:-1;">
        <div class="content">
          <?php echo getProfilePicture('Fir st');?>
          <div class="details">
            <span class="name">Fir st</span>
            <p>Frontend Developer</p>
          </div>
        </div>
        <a href="#">Follow</a>
      </div>
      <div class="card" style="--delay:0;">
        <div class="content">
        <?php echo getProfilePicture('Seco nd');?>
          <div class="details">
            <span class="name">Seco nd</span>
            <p>YouTuber & Blogger</p>
          </div>
        </div>
        <a href="#">Follow</a>
      </div>
      <div class="card" style="--delay:1;">
        <div class="content">
        <?php echo getProfilePicture('Thi rd');?>
          <div class="details">
            <span class="name">Thi rd</span>
            <p>Freelancer & Vlogger</p>
          </div>
        </div>
        <a href="#">Follow</a>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
        <?php echo getProfilePicture('Fo ur');?>
          <div class="details">
            <span class="name">Fo ur</span>
            <p>Backend Developer</p>
          </div>
        </div>
        <a href="#">Follow</a>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
        <?php echo getProfilePicture('Fi ve');?>
          <div class="details">
            <span class="name">Fi ve</span>
            <p>Teacher & Advertiser</p>
          </div>
        </div>
        <a href="#">Follow</a>
      </div>
    </div>
  </div>

</body>
</html>