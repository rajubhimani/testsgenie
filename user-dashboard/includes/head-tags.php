<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207281095-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-207281095-2');
  </script>
  <!-- <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TestsGenie</title>
  <link rel="shortcut icon" href="../img/android-icon-72x72.png" />
  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
  <!--  Google fonts -->
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <!-- css stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/userdashobord.css">
  <link rel="stylesheet" href="../css/graph.css">
  <!--  <link rel="stylesheet" href="styles.css"> -->
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <!-- <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script> -->
  <?php
  if($_SESSION['crpage3']=='score-detailed.php' || $_SESSION['crpage3']=='score-detailed-trial.php')
  {
  ?>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  <style>
    <?php
    $leftVal = 0;
    for ($i = 0; $i <= $tlQsDivCount; $i++) {
      $lno = $i + 1;
      $leftVal = $leftVal + $tlQsDivPerc;
      echo '
        .graph-lines-wrapper .g-lines.gline' . $lno . '{
            left: ' . $leftVal . '%;
        }
        .graph-lines-wrapper .gtext' . $lno . '{
            left: ' . $leftVal . '%;
        }
      ';
    }
    ?>
  </style>
  <?php
  }
  ?>
  <?php
  if($_SESSION['crpage3']=='index.php')
  {
    include('includes/graph-head1.php');
  }
  ?>
</head>