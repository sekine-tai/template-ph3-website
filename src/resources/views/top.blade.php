<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSSE 初めてのweb制作</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="{{ asset('/css/topStyle.css')  }}" >
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <h1><img class="posselogo" src="logo.svg"></h1>
    <ul class="headerR">
      <div class="RightL">
        <li>トップページ</li>
        <a href="{{ route('quizzes.index') }}">
          <li>クイズ</li>
        </a>
      </div>
      <div class="RightR">
        <li>
        <div href="https://twitter.com/posse_program" class="twitterLink">
          <img class="circle" src="./img/icon/icon-twitter.svg">
        </div>
      </li>
      <li>
        <div href="https://www.instagram.com/posse_programming/" class="instaLink">         
          <img class="circle" src="./img/icon/icon-instagram.svg">
        </div>
      </li>
      </div>
    </ul>
  </header>

  <main>
    <div class="massOne">
      <div class="onePara">
        <h3 class="community_posse">学生プログラミングコミュニティ POSSE（ポッセ） </h3>
        <p class="fellow">自分史上最高を仲間と。</p>
      </div>
      <p>Scroll Down</p>
      <div class="onePic">       
        <img  src="./img/img-hero.jpg" alt="" class="hero">
      </div>
    </div>
    <div class="massTwo">
      <div class="twoHead">
        <h2>POSSEとは</h2>
        <h3 class="aboutPosse">About POSSE</h3>
      </div>
      <div class="twoPara">
        <img src="./img/img-about.jpg" alt="" class="about">
        <p class="aboutParagraph">学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。<br> プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！<br>
          それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
        </p>
      </div>
    </div>
    <div class="lineIntroduce">
    <div class="lineIntroduceContainer">
        <h2 class="posseOfficial"><img src="./img/icon/icon-line.svg" alt="" class="LINE">POSSE 公式LINE</h2>
        <p class="info">公式LINEにてご質問を随時受け付けております。<br>
          詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br>
          下記ボタンより友達追加をお願いします！</p>
          <a href="https://line.me/R/ti/p/@651htnqp?from=page">
            <div class="lineAdd">
              <p>LINE追加</p>
              <p class="jump"><img src="./img/icon/icon-link-gray-dark.svg" alt=""></p>
            </div>
          </a>
      </div>
    </div>
  </main>
  <footer>
    <div class="footerOne">
      <h1><img class="posselogo2" src="logo.svg"></h1>
      <p class="snsText">POSSE公式サイト</p>
      <ul class="sns">
        <li><a href="https://twitter.com/posse_program"><img src="./img/icon/icon-twitter.svg"></a></li>
        <li><a href="https://www.instagram.com/posse_programming/"><img src="./img/icon/icon-instagram.svg"></a></li>
      </ul>
    </div>
    <div class="footerTwo">
      <p>&copy;2022 POSSE</p>
    </div>
    <div class="bannarParent">
      <div class="bannar">
        <ul class="bannarDeatail">
          <li><img src="./img/icon/icon-line.svg" alt="" class="lineAddTwo"></li>
          <li><p>POSSE公式LINEで<br>最新情報をGET！</p></li>
          <li><img src="./img/icon/icon-link-light.svg" alt="" class="bannarJump"></li>
        </ul>       
      </div>
    </div>
    </footer>
</body>
</html>