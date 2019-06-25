<?php
require 'php/functions.php';

require '../config.php';
require 'libraries/entity/Quote.php';
require 'libraries/mapper/QuoteMapper.php';
require 'libraries/repository/QuoteRepository.php';

$quoteMapper = new QuoteMapper($conn);
$quoteRepository = new QuoteRepository($quoteMapper);



$quote = $quoteRepository->find();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sjors van Holst - Student at ROCva</title>

    <meta charset="utf-8">
    <meta name="author" content="Sjors van Holst">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I’m Sjors van Holst, a passionate programmer with a focus on web design and experience in PHP, JavaScript, HTML, CSS, Java, and AJAX. I’ve got a calm and friendly attitude with a positive approach">

    <link rel="stylesheet" href="style.css">
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119006854-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119006854-2');
    </script>
  </head>

  <body class="background">
    <div class="navbar flex-container">
      <div class="header">Sjors van Holst</div>
    </div>

    <div class="content">
      <div class="cell rounded">
        <div class="flex-container desktop-row mobile-column">
          <div class="position-relative">
            <h1>About me</h1>
            I’m Sjors van Holst, a passionate programmer with a focus on web design and experience in
            <acronym title="Personal Home Page">PHP</acronym>,
            <acronym title="JavaScript">JS</acronym>,
            <acronym title="HyperText Markup Language">HTML</acronym>,
            <acronym title="Cascading Style Sheet">CSS</acronym>, Tensorflow, WordPress and
            <acronym title="Asynchronous JavaScript and XML">AJAX</acronym>. I’ve got a calm and friendly attitude with a positive approach, I grew up and live in the Netherlands. I finished primary school and continued to high school, where I was introduced to my first programming languages: Processing!
            <br>
            <br>
            After about spending a year learning al the ins and outs of processing I was ready to move on in a different direction. I entered college and started web development. Since I already had experienced programming, I was able to enter a program which is allowing me to complete the study in only 2 years! I was born on March 22, which makes me <?=getYears('2000-03-22')?> years old. If your interested you can download a copy of my CV by clicking
            <a href="assets/files/Sjors van Holst CV.pdf" title="A download of my CV" download>here</a>.

            <blockquote class="position-absolute">
              <h2><i>"<?=$quote->getContent()?>"</i></h2>
              <h3> - <span id="orgin"><?=$quote->getAuthor()?></span></h3>
            </blockquote>
          </div>
          <div class="mobile-divider-medium"></div>
          <a href="https://www.youtube.com/channel/UC6KVWCZJfsgJ6bVUi8G6-DQ" title="Secret link to my Youtube channel" target="_blank">
            <img class="desktop-left-margin profile rounded" src="<?=getRandomImage('assets/images/sjors/min/')?>" alt="A picture of me" title="Sjors van Holst">
          </a>
        </div>
      </div>

      <div class="cell rounded">
        <h1>Things I have made</h1>
        <div class="mobile-divider-medium desktop-divider-medium"></div>
        <div class="flex-container desktop-row mobile-column">
          <a href="https://moderately-interesting.sjorsvanholst.nl" title="Visit the 'Moderately Interesting' play store page" target="_blank">
            <img class="desktop-right-margin product rounded" src="assets/images/projects/min/Moderately Interesting-min.png" alt="A screenshot of 'Moderately Interesting'" title="Moderately Interesting">
          </a>
          <div class="mobile-divider-medium desktop-divider-medium"></div>
          <div>
            <div class="desktop-only line center"></div>
            <a href="https://moderately-interesting.sjorsvanholst.nl"><h2>Moderately Interesting</h2></a>
            <i>In the app "Moderately interesting" you have the 'simple' task of shooting oncoming enemies without letting them past you or hit you with their own bullets. They can only shoot within a certain distance. Which should give you tactical advantages?</i>
            This was the first 'program' I publicly released after creating it. It was made in Processing Android mode. The code hasn't aged like a fine wine, which is why I'm currently working on a new release, programmed in Android Studio using Java!
          </div>
        </div>

        <div class="mobile-divider-medium desktop-divider-medium"></div>

        <div class="flex-container desktop-row-reverse mobile-column">
          <a href="https://map.sjorsvanholst.nl" title="Visit the World Wide connections website" target="_blank">
            <img class="desktop-left-margin product rounded" src="assets/images/projects/min/World Wide connections-min.png" alt="A screenshot of World Wide connections" title="World Wide connections">
          </a>
          <div class="mobile-divider-medium desktop-divider-medium"></div>
          <div>
            <div class="desktop-only line center"></div>
            <a href="https://map.sjorsvanholst.nl"><h2>World Wide connections</h2></a>
            <i>On this website you can track web traffic towards any of my projects in realtime.</i>
            I've created this website, to track al trafic towards my projects even though services such as <a href="https://analytics.google.com/analytics/web/" title="Vist Google Analytics website">Google Analytics</a> also provide the service but I like the 'interface' and the fact that anyone can view the trafic withouth exposing any of the users private data. I only store the users rough location and nothing else, the title is a quite obvious play on World Wide Web abbreviation.
          </div>
        </div>

        <div class="mobile-divider-medium desktop-divider-medium"></div>

        <div class="flex-container desktop-row mobile-column">
          <a href="https://monte-carlo.sjorsvanholst.nl" title="Visit the monte-carlo simulation website" target="_blank">
            <img class="desktop-right-margin product rounded" src="assets/images/projects/min/Monte-Carlo simulation-min.png" alt="A screenshot of the Monte-Carlo simulation" title="Monte-Carlo simulation">
          </a>
          <div class="mobile-divider-medium desktop-divider-medium"></div>
          <div>
            <div class="desktop-only line center"></div>
            <a href="https://monte-carlo.sjorsvanholst.nl"><h2>Monte-Carlo simulation</h2></a>
            <i>On this website, we are calculating &pi; with your help! Using a Monte Carlo simulation, we have created a field with a circle in the middle, where millions of dots are randomly placed by your computer. Using this, we can calculate &pi;.</i>
            I created this website with AJAX. As it continued, I grew to be fond of it, which is why I cleaned it up en published it as a tool to demonstrate a Monte Carlo simulation!
          </div>
        </div>
      </div>

      <div class="cell rounded">
        <h1>Experience</h1>
        <div class="alert info">Below I've listed the experiences that also represent my skills.</div>
        <div class="flex-container desktop-row mobile-column desktop-bottom-margin">
          <div class="experience-cell">
            <div class="flex-container desktop-row mobile-row">
              <h2 class="desktop-right-margin mobile-right-margin">Education</h2>
              <div class="line center"></div>
            </div>

            <h3>Kajmunk College (2013 - 2017):</h3>
            <div class="sub-text">
              <i>
                - Physics<br>
                - English<br>
                - Math<br>
                - Art<br>
              </i>
            </div>
            <div class="mobile-divider-medium desktop-divider-medium"></div>
            <h3>ROC van Amsterdam (2017 - current):</h3>
            <div class="sub-text">
              <i>
                - JavaScript<br>
                - HTML/CSS<br>
                - Ajax<br>
                - PHP<br>
                - C#<br>
              </i>
            </div>
          </div>

          <div class="mobile-divider-medium"></div>

          <div class="experience-cell desktop-left-margin">
            <div class="flex-container desktop-row mobile-row">
              <h2 class="desktop-right-margin mobile-right-margin">Work</h2>
              <div class="line center"></div>
            </div>

            <h3>Student aan Huis (8 months):</h3>
            <div class="sub-text">
              <i>
                - IT Support at home
              </i>
            </div>
            <div class="mobile-divider-medium desktop-divider-medium"></div>
            <h3>Get Interactive (<?=getMonths('2018-08-27', '2019-02-02')?> months):</h3>
            <div class="sub-text">
              <i>
                - Internship as a web developer
              </i>
            </div>
            <div class="mobile-divider-medium desktop-divider-medium"></div>
            <h3>Get Interactive (<?=getMonths('2019-02-02', '2019-06-11')?> months):</h3>
            <div class="sub-text">
              <i>
                - Part time software developer
              </i>
            </div>
          </div>
        </div>

        <div class="flex-container desktop-row mobile-column">
          <div class="mobile-divider-medium"></div>

          <div class="experience-cell">
            <div class="flex-container">
              <h2 class="desktop-right-margin mobile-right-margin">Courses</h2>
              <div class="line center"></div>
            </div>
            <h3>Secured by design:</h3>
            <div class="sub-text">
              <i>- Ethical hacking</i>
            </div>
            <div class="mobile-divider-medium desktop-divider-medium"></div>
            <h3>ROC Light license:</h3>
            <div class="sub-text">
              <i>- Aviation rules & laws</i>
            </div>
          </div>

          <div class="mobile-divider-medium"></div>

          <div class="experience-cell desktop-left-margin">
            <div class="flex-container">
              <h2 class="desktop-right-margin mobile-right-margin">Competitions</h2>
              <div class="line center"></div>
            </div>
            <h3>Skills heroes (National championship):</h3>
            <div class="sub-text">
              <i>- Application developer</i>
            </div>
          </div>
        </div>
      </div>

      <?php
        $results = $conn->query("SELECT * FROM `article`")->fetchAll();
        if(count($results) > 0):
      ?>

        <div class="cell rounded">
          <h1>Things I wrote</h1>

          <?php
            foreach ($results as $row):
              $url = "https://sjorsvanholst.nl/article.php?title=".strtolower(str_replace(' ', '-', $row['title']));

              if ($row['image_id']) {
                $stmt = $conn->prepare("SELECT source, alternative, title FROM `image` WHERE id = ?");
                $stmt->bind_param('i', $row['image_id']);
                $stmt->execute();

                $stmt->bind_result($img_source, $img_alternative, $img_title);
                $stmt->fetch();
                $stmt->close();
              }
          ?>

            <div class="center line"></div>
            <div class='flex-container mobile-column desktop-row'>
              <div>
                <a href="<?= $url ?>"><h2 class='article-title'><?= $row['title'] ?></h2></a>
                <a class="desktop-only" href='<?= $url ?>'><?= $url ?></a>
                <div><?= $row['description'] ?></div>
              </div>

              <div>
                <div class="mobile-divider-small desktop-divider-small"></div>

                <?php if ($img_source): ?><a href="<?= $url ?>">
                  <img class='desktop-left-margin product rounded' src='images/univisium/<?= $img_source ?>' alt='<?= $img_alternative ?>' title='<?= $img_title ?>'></a>
                <?php endif; ?>

                <div class="mobile-divider-small desktop-divider-small"></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="cell rounded">
        <h1>Contact</h1>

        <?php
          if (isset($_GET['message'])) {
            if ($_GET['message'] == "invalid") echo "<div class='alert error'>Your email address appears to be invalid.</div>";
            else if ($_GET['message'] == "empty") echo "<div class='alert error'>All fields must be filled out.</div>";
            else if ($_GET['message'] == "succes") echo "<div class='alert success'>Your message has been send!</div>";
          }
        ?>

        Don't trust this form? You can find my public key <a alt="A link to my public key" title="A link to my public key" href="assets/files/key.pub">here</a>
        <form method="POST" action="php/send.php">
          <input type="text" name="name" placeholder="Fullname">
          <input type="text" name="email" placeholder="E-mail">
          <input type="text" name="subject" placeholder="Subject">
          <textarea type="text" name="message" placeholder="Message" rows="4"></textarea>
          <button>Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>
