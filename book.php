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
  <link rel="stylesheet" href="css/all.css" />

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
            <a class="nav-link" href="#">الأخبار</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#teacher">البرامج</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
‎              مساعدة
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#knowledge">تواصل معنا</a></li>
              <li><a class="dropdown-item" href="#search-tools">فتح تذكرة</a></li>
              <li><a class="dropdown-item" href="#search-tools">متابعة حالة التذكرة</a></li>
              <li><a class="dropdown-item" href="#search-tools">سياسة وأدلة الاستخدام</a></li>
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
        <div class="form-group col-2 m-0 p-0">
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
        </div>
      </form>
      <div class="row py-2">
    <!-- Card for College Instructors -->
    <?php
    // Include the database connection file
    include 'db_connect.php';

    // SQL query to fetch data from the instructor table
    $sql = "SELECT * FROM Instructors";
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Output HTML for each card
    ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["Name"]; ?></h5>
                        <div class="card-body">
                            <p class="card-text">
                                <span style="color: blue;">التخصص: </span><?php echo $row["Specialization"]; ?>
                            </p>
                            <p class="card-text">
                                <span style="color: blue;">الشهادة: </span><?php echo $row["Degree"]; ?>
                            </p>
                            <p class="card-text">
                                <span style="color: blue;">نبذة بسيطة: </span><?php echo $row["BriefDescription"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        // If no results found
        echo "0 results";
    }

    // Close the database connection
    $conn->close();
    ?>




        
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
        <div class="footer-section">
            <h3>روابط سريعة</h3>
            <ul>
                <li><a href="#"> الصفحة الرئيسية</a></li>
                <li><a href="#"> الميزات</a></li>
                <li><a href="#"> الوافدون</a></li>
                <li><a href="#"> التقييمات</a></li>
                <li><a href="#"> المدونات</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>روابط إضافية</h3>
            <ul>
                <li><a href="#"> معلومات الحساب </a></li>
                <li><a href="#">العناصر المطلوبة </a></li>
                <li><a href="#"> سياسة الخصوصية</a></li>
                <li><a href="#"> وسيلة الدفع </a></li>
                <li><a href="#"> خدماتنا </a></li>
            </ul>
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

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
