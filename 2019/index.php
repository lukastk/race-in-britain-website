<html>

<head>
  <title>Race in Britain 2019</title>
  <meta charset="UTF-8">
  <meta name="description" content="Website for the 2019 Race in Britain summer school">
  <meta name="keywords" content="Race in Britain, Colonialism, Technology, Summer school, Race, Gender, QTPoC, Hackney, BSix, Education">
  <meta name="author" content="Lukas Kikuchi">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" href="media/favicon.png" />
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">

  <script>
    /*if (location.origin != "http://localhost" && location.protocol != 'https:') {
     location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
   }*/
  </script>
</head>

<body>

<div class="menu">
  <a href="#about" onclick="scrollto('about')">About</a>
  <a href="#programme" onclick="scrollto('programme')">Programme</a>
  <a href="#register" onclick="scrollto('register')">Register</a>
</div>

<div class="MainContainer">

  <div class="ParallaxContainer">
      <div class="title">
        <a href=".">
          <img src="media/logo.svg">

          A summer school hosted at the BSix Sixth Form College. 29-31 July.
        </a>
      </div>
  </div>

  <div class="caret">
    <img src="media/caret_gray.svg">
  </div>

  <div class="ContentContainer">
    <div class="content">


      <div class="page-section">
        <h1 id="about">About</h1>

        <img src="media/about_pic.jpg">

        <p>Following our first successful summer school held at SOAS in 2018, <a target="_blank" href="https://2018.raceinbritain.org/">A History of Race & Resistance in Britain</a>, this summer <a target="_blank" href="https://www.consented.co.uk/">Consented Youth</a>, <a target="_blank" href="https://www.instagram.com/hackingeducation/">Hacking Education</a> and the <a href="https://www.raceinbritain.org/#programme">Knowledge is Power Programme</a> will be hosting a three day summer school for young people and educational practitioners from the <b>29th-31st</b> of July at BSix Sixth Form College in Clapton, Hackney.
        </p>

        <p>The aim of the summer school is to provide a space for young people to participate in academic discussions through a combination of lectures and workshops. We will critically explore exploitative structures such as capitalism, colonialism and “race”. Additionally, it will aim to situate emerging scientific issues such as climate change, artificial intelligence and Big Data in the current socio-political context.
        </p>

        <p>Attendees will have the choice to choose between three rooms, where workshops will be held concurrently throughout the days with a focus on encouraging discussion and debate amongst participants. The aim of the three days is to expose young people to academic conversations and theories, encourage discussion and debate, as well as to supplement mainstream history and politics curriculums.
        </p>

        <p>One room will be academic in focus, looking at histories of imperialism and contemporary understandings of race. The second will be more discursive in nature encouraging participants to engage in complex discussions with one another. The third room will be led by Hacking Education with sessions ran by Physics PhD students looking at science, education and society. At the same time attendees will have the option to take part in Thai Boxing training run by British and World Champion Thai Boxers programmed throughout the three days.
        </p>

        <p>This event is targeted at young people, primarily those who are currently in secondary school or who have recently left. It is also open to those who are enrolled in Higher Education and interested members of the public. If you are a teacher or youth worker and wish to bring a group along please email <a href="mailto:consenteduk@gmail.com">consenteduk@gmail.com</a>. You can register to the event <a target="_blank" href="https://www.eventbrite.co.uk/e/summer-school-race-knowledge-science-tickets-56631002854">here</a>
        </p>

        <p>Talks will all be recorded and made available on the Race in Britain YouTube channel. You can find the recorded lectures from last year's school on our <a href="https://www.youtube.com/channel/UCHLM1jCB6ewCrHYfMyvaXuw">official YouTube channel</a>.
        </p>

        <p><i>The Knowledge is Power Programme is a parallel curriculum of events, lectures, short courses and workshops within BSix Sixth Form College to debate some of the major issues facing society and young people today. Bringing together the latest scholarship, community expertise and local heritage, the programme explores how schooling, social media, youth violence, relationships, money, and more, shape our lives and learning. The programme attempts to address the lack of representation across disciplines, gaps in the curriculum and to question its very foundations.  Visiting poets, musicians, journalists and academics are encouraged to hear what students think about these issues and help them build powerfully on existing knowledge and experience.
        </i></p>

        <p><i>Hacking Education is an organisation working towards equity in education through workshops in youth centres, schools and universities that primarily focus on science, technology and society.</i>
        </p>

        <p><i>Consented Youth is an educational project running weekly seminars within schools in East and South London aimed at readying students for university, fostering critical thinking and creating a space for students to explore complex ideas.</i></p>

      </div>

      <div class="page-separator">
        <hr>
      </div>

      <div class="page-section">
        <h1 id="programme">Programme</h1>

        Click <a href="./programme.php">here</a> for a programme-only version of the site, or <a href="./programme_printer_friendly.php">here</a> for a printable version.

        <?php include 'programme_raw.html' ?>

      </div>

      <div class="page-separator">
        <hr>
      </div>

      <div class="page-section">
        <h1 id="register">Register</h1>

        <p>The event is primarily aimed at sixth form students, teachers, youth workers and educators but is also open to the public.
          The summer school is free but attendees must register using our eventbrite page.

        <a target="_blank" href="https://www.eventbrite.co.uk/e/summer-school-race-knowledge-science-tickets-56631002854">Click here to register.</a> </p>

      </div>

      <div class="page-separator">
      </div>

    </div>

    <div class="footer">
      <small>Consented & Hacking Education © 2019</small>
      <a target="_blank" href="https://www.consented.co.uk/"><img class="consented-logo" src="media/consented-logo-white.png"></a>
      <a target="_blank" href="https://www.instagram.com/hackingeducation/"><img class="he-logo" src="media/hE-logo-white-croped.png"></a>
    </div>
  </div>
</div>



<script>

$(".title").hover(function() {
  $(this).animate( {"margin-top" : "-4px" }, 100);
}, function () {
  $(this).animate( {"margin-top" : "0px" }, 100);
});

$(".caret").click(function(e) {
  var new_position = $("#about").position();
  $('.MainContainer').stop().animate({ scrollTop: new_position.top + $(window).height() }, 500);
  e.preventDefault();
})

$(".caret").hover(function() {
  $(".caret img").attr("src", "media/caret_white.svg");
}, function() {
  $(".caret img").attr("src", "media/caret_gray.svg");
})

var scrollto = function(id) {
  var new_position = $("#" + id).position().top;

  if ($(window).width() < 900) {
    new_position = new_position - 50;
  }

  $('.MainContainer').stop().animate({ scrollTop: new_position + $(window).height() }, 500);
}

</script>


</body>

</html>
