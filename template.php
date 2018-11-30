<?php
  $org = strtolower($org);

  if ($org == 'usa today') {
    $orgName = 'USA TODAY';
    $orgSlug = 'usa-today';
    $orgImage = 'assets/img/usa-today-logo.png';
    $orgNavImage = 'assets/img/usa-today-logo.png';
    $orgSubscribeText = 'to get home delivery';
    $favicon = 'assets/img/usa-today-favicon.png';
  } else if ($org == 'tennessean') {
    $orgName = 'Nashville Tennessean';
    $orgSlug = 'tennessean';
    $orgImage = 'assets/img/tennassean-logo.png';
    $orgNavImage = 'assets/img/tennassean-nav-logo.png';
    $orgSubscribeText = '99¢ first month. Save 90%';
    $favicon = 'assets/img/tennessean-favicon.png';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $articleTitle; ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- other meta, CSS, and custom tags -->

  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://www.gannett-cdn.com/sites/tennessean/images/favicon.png">
</head>

<body class="<?php echo $orgSlug ?>">
  <div id="black-bars"></div>
  <section id="navbar">
    <nav>
      <div id="masthead">
        <img src="<?php echo $orgImage ?>" alt="USA Today Logo">
        <h4><span>Subscribe now</span><br><?php echo $orgSubscribeText ?></h4>
      </div>

      <div id="nav-wrapper">
        <ul class="usa-today">
          <li class="nav-logo">
            <img src="<?php echo $orgNavImage ?>" alt="USA Today logo">
          </li>
          <li class="catagory news">News</li>
          <li class="catagory sports">Sports</li>
          <li class="catagory life">Life</li>
          <li class="catagory money">Money</li>
          <li class="catagory tech">Tech</li>
          <li class="catagory travel">Travel</li>
          <li class="catagory opinion">Opinion</li>
          <li class="catagory weather">
            <img src="assets/img/weather.png" alt="Weather icon">
            75&#176;
          </li>
          <li class="catagory crosswords hide">Crosswords</li>
          <li class="catagory investigations">Investigations</li>
          <li class="catagory elections hide">50 States</li>
          <li class="catagory thanksgiving">Video</li>
          <li class="catagory more">More</li>

          <li class="icon search"><img src="assets/img/icon-search.png" alt="Search Icon"></li>
          <li class="icon profile"><img src="assets/img/icon-profile.png" alt="Profile Icon"></li>
        </ul>

        <ul class="tennessean">
          <li class="nav-logo">
            <img src="<?php echo $orgNavImage ?>" alt="USA Today logo">
          </li>
          <li class="catagory home">Home</li>
          <li class="catagory news">News</li>
          <li class="catagory counties">Counties</li>
          <li class="catagory sports">Sports</li>
          <li class="catagory business">Business</li>
          <li class="catagory music">Music</li>
          <li class="catagory civility hide">Civility Tennessee</li>
          <li class="catagory politics">Politics</li>
          <li class="catagory jobs hide">Jobs</li>
          <li class="catagory obituaries hide">Obituaries</li>
          <li class="catagory more">More</li>

          <li class="icon search"><img src="assets/img/icon-search.png" alt="Search Icon"></li>
          <li class="catagory subscribe">Subscribe</li>
          <li class="catagory sign-in">Sign In</li>
        </ul>
      </div>
    </nav>
  </section>

  <main>
    <section id="social-sidebar">
      <ul>
        <li class="facebook"><img src="assets/img/facebook.png" alt="facebook logo"></li>
        <li class="twitter"><img src="assets/img/twitter.png" alt="Twitter logo"></li>
        <li class="linkedin"><img src="assets/img/linkedin.png" alt="LinkedIn logo"></li>
        <li><img src="assets/img/comment.png" alt="Comment logo"></li>
        <li><img src="assets/img/email.png" alt="Email logo"></li>
      </ul>
      <ul class="print">
        <li class="space"></li>
        <li class="print"><img src="assets/img/print.png" alt="Print logo"></li>
      </ul>
    </section>
    <article>
      <section id="article-header">
        <div id="headline"><?php echo $articleTitle; ?></div>
        <div id="publish-data">
          <span id="author"><?php echo $articleAuthor; ?></span>,
          <p id="article-org"><?php echo $orgName ?></p>
          <p id="pub-date">Published <?php echo $articlePublishDate; ?></p>
          <p id="updated-date"><?php echo $articleUpdateDate; ?></p>
        </div>
      </section>

      <section id="article-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-8">
              <div id="article-image">
                <img src="<?php echo $articleImage; ?>" alt="Article featured image">
                <p><?php echo $articleCaption; ?></p>
              </div><!-- article-image -->

              <div id="article-social">
                <ul>
                  <li class="facebook"><img src="assets/img/facebook.png" alt="facebook logo">Connect</li>
                  <li class="twitter"><img src="assets/img/twitter.png" alt="Twitter logo">Tweet</li>
                  <li class="linkedin"><img src="assets/img/linkedin.png" alt="LinkedIn logo">LinkedIn</li>
                  <li><img src="assets/img/comment.png" alt="Comment logo">Comment</li>
                  <li><img src="assets/img/email.png" alt="Email logo">Email</li>
                  <li><img src="assets/img/share.png" alt="More logo">More</li>
                </ul>
              </div><!-- article-social -->

              <div id="article-text">
                <?php echo $articleText; ?>
              </div><!-- article-text -->
              <div id="eyp" class="<?php echo $eyp; ?>">
                  <?php echo $eypText; ?>
              </div>
            </div><!-- col -->
            <div class="col-sm-4 sidebar">
              <div class="sidebar-content">
                <h1><a class="link">Share your feedback</a> to help improve our site experience!</h1>
              </div>
            </div><!-- col -->
            <div id="article-social" class="bottom">
              <ul>
                <li class="facebook"><img src="assets/img/facebook.png" alt="facebook logo">Connect</li>
                <li class="twitter"><img src="assets/img/twitter.png" alt="Twitter logo">Tweet</li>
                <li class="linkedin"><img src="assets/img/linkedin.png" alt="LinkedIn logo">LinkedIn</li>
                <li><img src="assets/img/comment.png" alt="Comment logo">Comment</li>
                <li><img src="assets/img/email.png" alt="Email logo">Email</li>
                <li><img src="assets/img/share.png" alt="More logo">More</li>
              </ul>
            </div><!-- article-social -->
          </div><!-- row --->
        </div><!-- container-fluid -->
      </section>
    </article>
  </main>

  <!-- jQuery Slim (Can replace with full version) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popover javascript plugin (for boostrap) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Boostrap 4 js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Custom js -->
  <script src="assets/js/main.js"></script>
</body>
</html>
