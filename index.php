<?php
// Include the connect.php file
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="all.css" />

  <title>Document</title>
</head>

<body lang="ar" dir="rtl" class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/WhatsApp Image 2024-02-26 at 9.50.42 PM.jpeg" width="80px"
          alt="" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i> الرئيسية</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
‎              عن المكتبة
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#see">الرؤية والرسالة</a>
              </li>
              <li>
                <a class="dropdown-item" href="#goals">اهداف المكتبة</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#search-engine">محرك البحث</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
‎              بوابة المعرفة
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#knowledge">مصادر المعرفة</a></li>
              <li><a class="dropdown-item" href="#search-tools">أدوات بحثية</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="News.php">الأخبار</a>
          </li>
          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
‎              مساعدة
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#knowledge">تواصل معنا</a></li>
            </ul>
          </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
‎              تسجيل
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="signup.php">تسجيل</a></li>
              <li><a class="dropdown-item" href="login.php">تسجيل دخول </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>


        </ul>
      </div>
    </div>
  </nav>
  <section class="content">
    <h1>مرحبا بكم في المكتبة الرقمية </h1>
    <h1>للكلية التطبيقية</h1>
    <h5>مكتبة رقمية مصدر شامل للمعرفة و البحث العلمي</h5>
   <!-- <button class="btn btn-primary px-5">تصفح</button> -->
    <form class="login-form bg-light p-4 collapse" class="collapse" id="collapslogin">
      <h3 class="text-center text-secondary">
        <img src="img/WhatsApp Image 2024-02-26 at 9.50.42 PM.jpeg" alt="" class="img-fluid" />
      </h3>
      <input type="text" class="form-control p-3 m-2" placeholder="ادخل البريد الالكتروني" />
      <input type="password" class="form-control p-3 m-2" placeholder="كلمة المرور" />
      <h5><a href="#" class="link m-2">نسيبت كلمة المرور</a></h5>
      <h5><a href="#" class="link m-2">ليس لديك حساب</a></h5>
      <button class="btn btn-primary px-5 m-2">دخول</button>
    </form>
  </section>
  <section class="container-fluid py-5" id="goals">
    <h1 class="text-center">أهداف المكتبة</h1>
    <h3>
‎      تسعى المكتبة إلى تحقيق مجموعة من الأهداف الرئيسية التي تسهم في دعم
‎      المجتمع الأكاديمي والبحث العلمي، ومن أبرز هذه الأهداف:
    </h3>
    <ul class="goal-list">
      <li>
‎        توفير مصادر المعلومات المتنوعة والحديثة لتلبية احتياجات المستفيدين.
      </li>
      <li>
‎        دعم العملية التعليمية والبحثية من خلال توفير مجموعات غنية من الكتب
‎        والمجلات والدوريات.
      </li>
      <li>
‎        تعزيز مهارات البحث والاستقصاء لدى المستفيدين بتوفير ورش عمل ودورات
‎        تدريبية.
      </li>
      <li>
‎        تحفيز القراءة والثقافة بين أفراد المجتمع من خلال تنظيم فعاليات ومعارض
‎        للكتب.
      </li>
      <li>
‎        الحفاظ على التراث الثقافي والعلمي من خلال جمع وأرشفة المواد النادرة
‎        والقيمة.
      </li>
      <li>
‎        تسهيل الوصول إلى الموارد الإلكترونية وقواعد البيانات العلمية لتعزيز
‎        التعلم الذاتي.
      </li>
      <li>
‎        تعزيز التعاون بين المكتبات والمؤسسات التعليمية لتبادل الموارد
‎        والخبرات.
      </li>
      <li>دعم النشر العلمي والبحثي لأعضاء الهيئة التدريسية والطلاب.</li>
      <li>توفير بيئة تعليمية محفزة تساعد على الإبداع والابتكار.</li>
      <li>
‎        المساهمة في تحقيق التنمية المستدامة من خلال دعم البحوث والدراسات
‎        المتعلقة بالقضايا البيئية والاجتماعية.
      </li>
    </ul>
  </section>



  <section id="see" style="text-align: center" class="container py-5">
    <button class="big-button">
      <i class="fa-regular fa-lightbulb"></i> رؤيتنا
    </button>
    <p>
‎      نسعى جاهدين لتحقيق الريادة والتميز في مجالنا، من خلال تبني أحدث الأساليب
‎      والتقنيات المتقدمة التي تسهم في تطوير العمليات وتعزيز الإبداع والابتكار.
‎      نلتزم بتقديم أعلى مستويات الجودة في جميع ما نقدمه من خدمات أو منتجات، مع
‎      التركيز الدائم على رضا العملاء وتلبية توقعاتهم بكل احترافية.
    </p>
    <div class="styled-line"></div>
    <!-- Styled line between buttons -->
    <button class="big-button">
      <i class="fa-solid fa-scroll"></i> رسالتنا
    </button>

    <p>
‎      في سعينا نحو التميز، نحرص على تطوير مهارات فريقنا وتحفيزهم على الابتكار
‎      والتفكير الإبداعي، لأننا نؤمن بأن نجاحنا يبدأ من داخل منظمتنا. نعمل على
‎      بناء شراكات استراتيجية تساعدنا على توسيع آفاقنا واستكشاف فرص جديدة للنمو
‎      والتطور. نحن ملتزمون بأن نكون مثالاً يحتذى به في مجالنا، مع المحافظة على
‎      قيمنا ومبادئنا التي تقوم عليها ثقافتنا المؤسسية.
    </p>
  </section>
  <section id="search-tools">
    <div class="cards-container">
      <div class="card">
        <img
          src="img/DALL·E 2024-02-27 03.37.26 - Design a simple and elegant logo for a brand named 'Mawj'. The logo should convey themes of innovation and excellence. Incorporate abstract waves to s.png"
          alt="Mawj Logo" class="card-logo" />
        <div class="card-content">
          <h2>Mawj</h2>
          <p>أمواج الابتكار والتميز</p>
        </div>
      </div>
      <div class="card">
        <img
          src="img/DALL·E 2024-02-27 03.42.10 - Design a simple and elegant logo for a brand named 'Verde'. The logo should embody themes of sustainability, nature, and environmental friendliness. I.png"
          alt="Mawj Logo" class="card-logo" />
        <div class="card-content">
          <h2>Verde</h2>
          <p class="tagline">نحو مستقبل أخضر ومستدام</p>
        </div>
      </div>
    </div>
    <!-- Repeat for other cards, changing the description as needed -->
    </div>
  </section>
  <section id="knowledge" class="bt-white">
  <div class="full-width-container">
        <div class="inline-card  py-5">
            <div class="header-and-text" onclick="redirectToPage('knowledge_sources.php')">
                <h3 class="inline-card-header">مصادر المعرفة</h3>
                <h5 class="inline-card-text">
                    من هنا نقوم بتقديم عدة مواقع يستطيع المستخدم الدخول لها والاستفادة منها.
                </h5>
            </div>
        </div>
    </div>
    <div class="full-width-container ">
        <div class="inline-card py-5">
            <div class="header-and-text" onclick="redirectToPage('programming_languages.php')">
                <h3 class="inline-card-header">لغة برمجة</h3>
                <h5 class="inline-card-text">
                    من هنا نقوم بتوفير روابط لتعليم لغات البرمجة ويمكن للمستخدم دخولها اونلاين والتطبيق عليها.
                </h5>
            </div>
        </div>
    </div>
    <div class="full-width-container ">
        <div class="inline-card py-5">
            <div class="header-and-text" onclick="redirectToPage('educational_sites.php')">
                <h3 class="inline-card-header">مواقع تعليمية</h3>
                <h5 class="inline-card-text">
                    لقد قمنا بتجميع العديد من المواقع التعليمية لتسهيل وصول المستخدم اليها والاستفادة منها في مقرارته الدراسية.
                </h5>
            </div>
        </div>
    </div>
   <!-- <div class="full-width-container " id="teacher">
      <div class="faculty-header">
        <h2>التخصصات الموجودة  </h2>
    </div>
    <div class="row m-0 justify-content-center">
      <div class="col-md-4">
          <div class="card text-center">
              <div class="card-body">
                  <div class="user-photo">
                      <img src="img/R (1).jfif" alt="المعلم 1">
                  </div>
                  <h5 class="card-title" style="font-size: 23px;">الدعم الفني </h5>
                  <h6  style="color: blue; font-size: 20px; font-weight: bold;">الاقسام المتوفرة: </h6>

                  <div class="user-rating" >
                    <table align="center" style="font-weight: bold; font-size: 20px;" >
                      <tr>
                      <td style="padding-left: 30px;">  دعم البرمجيات </td>
                      <td style="padding-right: 30px;">خدمات تقنية </td>
                    </tr>
                    <tr>
                      <td style="padding-left: 30px;">  تطوير البرمجيات  </td>
                      <td style="padding-right: 30px;"> تطوير تقني </td>
                    </tr>
                    </table>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card text-center">
              <div class="card-body">
                  <div class="user-photo">
                      <img src="img/150.PNG" alt="المعلم 2">
                  </div>
                  <h5 class="card-title" style="font-size: 23px;"> نظم المعلومات</h5>
                  <h6  style="color: blue; font-size: 20px; font-weight: bold;">الاقسام المتوفرة: </h6>
                  <div class="user-rating">
                    <table align="center" style="font-weight: bold; font-size: 20px;" >
                        <tr>
                        <td style="padding-left: 30px;">  قسم شبكات</td>
                        <td style="padding-right: 30px;">امن معلومات</td>
                      </tr>
                      <tr>
                        <td style="padding-left: 30px;">  قواعد بيانات </td>
                        <td style="padding-right: 30px;">صيانة حاسب </td>
                      </tr>
                      </table>

                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="card text-center">
              <div class="card-body">
                  <div class="user-photo">
                      <img src="img/170.PNG" alt="المعلم 3">
                  </div>
                  <h5 class="card-title" style="font-size: 23px;">إدارة الأعمال التطبيقي </h5>
                  <h6  style="color: blue; font-size: 20px; font-weight: bold;">الاقسام المتوفرة: </h6>
                  <table align="center" style="font-weight: bold; font-size: 20px;" >
                    <tr>
                    <td style="padding-left: 30px;">  تسويق الخدمات </td>
                    <td style="padding-right: 30px;">دعم فني </td>
                  </tr>
                  <tr>
                    <td style="padding-left: 30px;">  الإدارة المالية </td>
                    <td style="padding-right: 30px;">حلول تقنية </td>
                  </tr>
                  </table>
                  </div>
              </div>
          </div>
      </div>
  </div> -->
    </div>
  </section>
  <footer class="my-5" id="search-engine">
    <div class="container py-5">
      <form class="row">
        <!-- Input field -->
        <div class="form-group col-2 m-0 p-0">
          <div class="d-grid">
            <button class="btn btn-primary py-4 px-2" type="button">
              بحث
            </button>
          </div>
        </div>
        <div class="form-group col-6 m-0 p-0">
          <label for="inputField" class="sr-only">Input</label>
          <input type="text" class="form-control p-4" id="inputField" placeholder="بحث" />
         </div>
        <!-- <div class="form-group col-2 m-0 p-0">
          <label for="selectField" class="sr-only">Select</label>
          <select class="form-control p-4" id="selectField">
            <option selected>الكلمات الدلالية</option>
            <option value="1">العنوان</option>
            <option value="2">المؤلف</option>
          </select>
        </div>
        <div class="form-group col-2 m-0 p-0">
          <label for="selectField" class="sr-only">Select</label>
          <select class="form-control p-4" id="selectField">
            <option selected>جميع المصادر</option>
            <option value="1">الكتب الألكترونية</option>
            <option value="2">المجالات الألكترونية</option>
          </select>
        </div> --> 
      </form>
      <div class="row py-2">
        <!-- Card for Courses -->

        <div class="col-md-4">
            <div class="card">
                <div class="card-body" onclick="navigateToCourse()">
                    <i class="fa-solid fa-book-open-reader card-icon"></i>
                    <h5 class="card-title">المقررات الدراسيه</h5>
                </div>
            </div>
        </div>
        <!-- Card for Featured Books -->
   
        <div class="col-md-4">
            <div class="card">
                <div class="card-body" onclick="navigateToBooks()">
                    <i class="fa-solid fa-book-open-reader card-icon"></i>
                    <h5 class="card-title">اعضاء التدريس</h5>
                </div>
            </div>
        </div>
        <!-- Card for College Departments -->
        <div class="col-md-4">
           
    <div class="card">
    <div class="card-body" onclick="navigateToDepartments()">
    <i class="fa-solid fa-school card-icon"></i>
    <h5 class="card-title">اقسام الكليه</h5>
</div>
    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
  </footer>

  <div class="custom-footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>مواقعنا</h3>
            <ul>
                <li><a href="#"> السعودية</a></li>

            </ul>
        </div>
            <ul>
            </ul>
        </div>
        <div class="footer-section">
        </div>
        <div class="footer-section contact-info">
            <h3>معلومات الاتصال</h3>
            <p>الهاتف: 05583737800</p>
            <p>الهاتف: 05583737800</p>
            <p>البريد الإلكتروني: hmr29239@gmail.com</p>
        </div>
    </div>
    <div class="footer-icons">
      <div class="footer-icons">
        <a href="https://www.facebook.com/share/NZAUzVx9aMdsi4QR/" target="_blank"><i class="fab fa-facebook-f"></i></a>

    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/hmr29239" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
    </div>
</div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      // Toggle button click event
      $("#toggleButton").click(function () {
        $("#toggleContent").toggle(); // Toggle the content
      });
    });

  </script>
  <script>
    function navigateToDepartments() {
        window.location.href = 'Departments.php';
    }

    function navigateToBooks() {
        window.location.href = 'book.php';
    }

    function navigateToCourse() {
      window.location.href = 'course.php';
    }
</script>

<script>
        function redirectToPage(pageURL) {
            window.location.href = pageURL;
        }
    </script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
