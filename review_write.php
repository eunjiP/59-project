<!-- 오구프로젝트 
시작일시 : 2022.05.13일
버전 : 오구 1.0v
-->
<?php
include_once 'db/db_store.php';

$page_name = '리뷰페이지';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/8eb4f0837a.js" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- 전체사이즈 -->
  <div class="container">
    <!-- header 인클루드해서 사용 -->
    <header>
      <?php
      include_once "header.php";
      ?>
    </header>
    <!-- main -->
    <main>
      <div class="main--box">
        <div class="review--title">
          <h1 class="store--name">
            가게이름
          </h1>
        </div>
        <div class="review--content">
          <form action="" method="post">
            <div class="stars-widget">
              <label><i class="fa-solid fa-star"></i><input type="radio" class="star-radio" id="star_1" name="star" value="1" /></label>
              <label><i class="fa-solid fa-star"></i><input type="radio" class="star-radio" id="star_2" name="star" value="2" /></label>
              <label><i class="fa-solid fa-star"></i><input type="radio" class="star-radio" id="star_3" name="star" value="3" /></label>
              <label><i class="fa-solid fa-star"></i><input type="radio" class="star-radio" id="star_4" name="star" value="4" /></label>
              <label><i class="fa-solid fa-star"></i><input type="radio" class="star-radio" id="star_5" name="star" value="5" /></label>
            </div>
            <div>
              <textarea name="review_ctnt" id="review_ctnt" cols="30" rows="10" placeholder="구독한 상품에 대한 솔직한 리뷰를 남겨주세요."></textarea>
            </div>
            <div>
              <input class="review--submit" type="submit" value="완료">
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
  <script>
    let radioInputs = document.getElementsByClassName("star-radio");

    let selected = 0;

    for (let idx = 0; idx < radioInputs.length; idx++) {
      let current = radioInputs[idx];
      current.onclick = function() {
        selected = current.value;
        for (let idx2 = 0; idx2 < radioInputs.length; idx2++) {
          let radioGuy = radioInputs[idx2];
          if (radioGuy.value <= selected) {
            let icon = radioGuy.previousSibling;
            icon.classList.add("checked");
          } else {
            let icon = radioGuy.previousSibling;
            icon.classList.remove("checked");
          }
        }
      };
    }
  </script>
</body>

</html>