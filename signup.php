<?php
            include 'db_connect.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get form data
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $password = $_POST['password'];


                // Insert user into database
                $sql = "INSERT INTO students (FullName, Username,Password) VALUES ('$fullname', '$username','$password')";

                if ($conn->query($sql) === TRUE) {
                                        echo "<script>alert('تم انشاء الحساب بنجاح  ');</script>";
                                        echo "<script>window.location.href='login.php'</script>"; 
                } else {
                    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
                }
            }
            ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>signup</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <style>
      .login-form {
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .login-form .btn-primary {
        padding: 10px;
        font-size: 18px;
      }

      .login-form .form-control {
        border-radius: 20px;
      }

      .login-form .link {
        color: #007bff;
        text-decoration: none;
      }

      .login-form .link:hover {
        text-decoration: underline;
      }

      .img-fluid {
        max-width: 100px; /* Adjust based on your needs */
        border-radius: 50%;
        margin-bottom: 20px;
      }
    </style>
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/all.css" />
  </head>
  <body dir="rtl">
    <form class="login-form bg-light p-4"  style="width: 50%;" dir="rtl" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="text-center mb-4">
            <img src="img/WhatsApp Image 2024-02-26 at 9.50.42 PM.jpeg" alt="" class="img-fluid">
        </div>
        <div class="form-group">
            <input type="text" class="form-control p-3 mb-3" placeholder="اسم الطالب   " name="fullname">
        </div>
        <div class="form-group">
            <input type="text" class="form-control p-3 mb-3" placeholder="ادخل اسم المستخدم " name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control p-3 mb-3" placeholder="كلمة المرور" aria-label="Password" name="password">
        </div>

        <button class="btn btn-primary btn-block" typr="submit">انشاء حساب</button>
        <div class="d-flex justify-content-between mb-3">
            <a href="login.php" class="link">رجوع  </a>
        </div>
    </form>

  </body>
</html>
