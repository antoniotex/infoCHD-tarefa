<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/breadcrumb.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/welcome.css">
  <link rel="stylesheet" href="css/presentation.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Tarefa InfoCHD</title>
</head>
  <body>
    <?php
      function randomName(){
        $nameFounders = array("Mike Shinoda", "Joe Hahn", "Brad Delson", "Rob Bourdon", "David Farrell");
        $getRandomName = array_rand($nameFounders, 1);
          return $nameFounders[$getRandomName];
        }
        $randomName = randomName();
    ?>

    <section class="main main-1">
      <div class="main-item main-item-1">
        <p class="parcial-border-white"><span></span>simplicity.</p>
        <div class="main-text">
          <p><span class="text-bold">simplicity</span> is a multipurpose powerpoint template. 
          Advance, clean and professional. Minimalistix design makes the customization extremely easy.
          <br><br><span class="text-bold">enjoy!</span></p>
        </div>
      </div>
    </section>


    <section class="main main-2">
      <div class="main-item main-item-2">
        <h1 class="parcial-border-blue"><span></span>simplicity.</h1>
        <div class="main-text">
          <p><span class="text-bold">simplicity</span> is a multipurpose powerpoint template. 
          Advance, clean and professional. Minimalistix design makes the customization extremely easy.
          <br><br><span class="text-bold">enjoy!</span></p>
        </div>
      </div>
    </section>


    <section class="general">
      <div class="breadcrumb">
        <div class="breadcrumb-item">
          <h2 class="breadcrumb-item-dark">general</h2>
          <h2 class="breadcrumb-item-blue">introduction</h2>
        </div>
      </div>
      <div class="general-item">
          <h1 class="parcial-border-blue"><span></span>simplicity.</h1>
          <div class="general-item-paragraph">
              <p><span class="text-bold">simplicity</span> is a multipurpose powerpoint template. 
              Advance, clean and professional. Minimalistix design makes the customization extremely easy.
              <span class="text-bold">enjoy!</span></p>
          </div>
      </div>
      <div class="footer">
          <div class="footer-item">
              <p>your</p>
              <p>logo</p>
          </div>
          <div class="footer-item">
              <p>page</p>
              <p>xxx</p>
          </div>
      </div>
    </section>


    <section class="welcome">
        <div class="breadcrumb">
            <div class="breadcrumb-item">
                <h2 class="breadcrumb-item-blue">welcome</h2>
                <h2 class="breadcrumb-item-dark">message</h2>
            </div>
        </div>
        <div class="welcome-item">
            <img src="./images/gentleman.png" alt="">
            <div class="welcome-item-paragraph">
                <p>Hi there! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere ipsum sit amet ipsum fringilla porttitor. Sed elit diam, volutpat ut nunc sed.</p>
                <p class="name">
                <span><?php echo $randomName ?></span>, founder</p>
            </div>
        </div>
        <div class="footer">
            <div class="footer-item">
                <p>your</p>
                <p>logo</p>
            </div>
            <div class="footer-item">
                <p>page</p>
                <p>xxx</p>
            </div>
        </div>
    </section>


    <section class="welcome">
    <div class="breadcrumb">
        <div class="breadcrumb-item">
            <h2 class="breadcrumb-item-blue">welcome</h2>
            <h2 class="breadcrumb-item-dark">message</h2>
        </div>
    </div>
    <div class="welcome-item-2">
        <img src="./images/women-business.jpg" alt="">
        <p><span class="name"><?php echo $randomName ?></span>, founder</p>
        <div class="welcome-item-2-paragraph">
             <p><span>Hi there!</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere ipsum sit amet ipsum fringilla porttitor. Sed elitOfficiisiciist diam, volutpat ut nunc sed.</p>
        </div>
    </div>
    <div class="footer">
        <div class="footer-item">
            <p>your</p>
            <p>logo</p>
        </div>
        <div class="footer-item">
            <p>page</p>
            <p>xxx</p>
        </div>
    </div>
    </section>


    <section class="presentation">
        <div class="breadcrumb">
            <div class="breadcrumb-item">
                <h2 class="breadcrumb-item-dark">presentation</h2>
                <h2 class="breadcrumb-item-blue">agenda</h2>
            </div>
        </div>
        <div class="presentation-item-1">
            <div class="timeline">
                <div class="start-timeline">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="timeline-item">
                    <div class="timeline-item-inner">
                        <p>09:00</p>
                        <i class="far fa-sticky-note"></i>
                        <h2>about us</h2>
                        <div class="wrapper-text-default">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitOfficiis, sed ipsa sit, minus odio aut at eveniet.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-item-inner">
                        <p>09:00</p>
                        <i class="far fa-sticky-note"></i>
                        <h2>about us</h2>
                        <div class="wrapper-text-default">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitOfficiis, sed ipsa sit, minus odio aut at eveniet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-item">
                <p>your</p>
                <p>logo</p>
            </div>
            <div class="footer-item">
                <p>page</p>
                <p>xxx</p>
            </div>
        </div>
    </section>



    <section class="presentation">
        <div class="breadcrumb">
            <div class="breadcrumb-item">
                <h2 class="breadcrumb-item-dark">presentation</h2>
                <h2 class="breadcrumb-item-blue">agenda</h2>
            </div>
        </div>
        <div class="presentation-item-2">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-item-inner">
                        <p>09:00</p>
                        <i class="far fa-sticky-note"></i>
                        <h2>about us</h2>
                        <div class="wrapper-text-default">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicin elitOfficiis, sed ipsa sit, minus odio aut at eveniet. p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-item-inner">
                        <p>09:00</p>
                        <i class="far fa-sticky-note"></i>
                        <h2>about us</h2>
                        <div class="wrapper-text-default">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitOfficiis, sed ipsa sit, minus odio aut at eveniet.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-item-inner">
                        <p>09:00</p>
                        <i class="far fa-sticky-note"></i>
                        <h2>about us</h2>
                        <div class="wrapper-text-default">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitOfficiis, sed ipsa sit, minus odio aut at eveniet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-item">
                <p>your</p>
                <p>logo</p>
            </div>
            <div class="footer-item">
                <p>page</p>
                <p>xxx</p>
            </div>
        </div>
    </section>

    <section class="presentation">
        <div class="breadcrumb">
            <div class="breadcrumb-item">
                <h2 class="breadcrumb-item-dark">presentation</h2>
                <h2 class="breadcrumb-item-blue">agenda</h2>
            </div>
        </div>
        <div class="presentation-item-3">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-item-inner">
                        <p>09:00</p>
                        <i class="far fa-sticky-note"></i>
                        <h2>about us</h2>
                        <div class="wrapper-text-default">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitOfficiis, sed ipsa sit, minus odio aut at eveniet.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-item-inner">
                        <p>09:00</p>
                        <i class="far fa-sticky-note"></i>
                        <h2>about us</h2>
                        <div class="wrapper-text-default">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitOfficiis, sed ipsa sit, minus odio aut at eveniet.</p>
                        </div>
                    </div>
                </div>
                <div class="end-timeline">
                <i class="far fa-calendar-alt"></i>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-item">
                <p>your</p>
                <p>logo</p>
            </div>
            <div class="footer-item">
                <p>page</p>
                <p>xxx</p>
            </div>
        </div>
    </section>    
  </body>
</html>