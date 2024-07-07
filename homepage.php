<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html class="no-js" dir="rtl" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Premium Bootstrap 5 Landing Page Template" name="description"/>
<meta content="bootstrap 5, premium, marketing, multipurpose" name="keywords"/>
<meta content="Coderthemes" name="author"/>
<!-- Site Title -->
<title>مصر</title>
<!-- Site favicon -->
<link href="images/favicon.ico" rel="shortcut icon"/>
<!--Material Icon -->
<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css" integrity="sha512-nRzny9w0V2Y1/APe+iEhKAwGAc+K8QYCw4vJek3zXhdn92HtKt226zHs9id8eUq+uYJKaH2gPyuLcaG/dE5c7A==" referrerpolicy="no-referrer" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Tajawal:wght@200;300;400;500;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<!-- <link href="https://arabyai-webpages.s3.me-south-1.amazonaws.com/template_website/araby_ai_template/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<link href="https://arabyai-webpages.s3.me-south-1.amazonaws.com/template_website/araby_ai_template/css/animate.css" rel="stylesheet"/>
<link href="https://arabyai-webpages.s3.me-south-1.amazonaws.com/template_website/testing_template/css/bootstrap.min.css" rel="stylesheet"/>
<link class="style" href="css/style.css" rel="stylesheet"/>
<!-- <link class="style" href="css/style_Orange.css" rel="stylesheet" type="text/css" /> -->
<style>
      body,
      p,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      a,
      button {
        font-family: "Tajawal";
      }
      .contact_details {
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: space-between;
      }

      @media (min-width: 768px) {
        .contact_details {
          flex-direction: row;
        }
      }
      .section-title .sub-title::before {
        right: 2px;
      }
    </style>
</head>
<body data-bs-offset="60" data-bs-spy="scroll" data-bs-target=".navbar">
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="navbar-sticky">
<div class="container">
<a class="logo text-uppercase" href="#home" style="display: flex; justify-content: center; gap: 10px; align-items: center">
<img alt="" src="favicon.ico" width="50px"/>
</a>
<button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
<i class="mdi mdi-menu"></i>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
<li class="nav-item">
<a class="nav-link" href="#home">اكتشف مصر</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#about">اكتشف أثار مصر الفريدة</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#features">الأماكن الأثرية</a>
</li>
<li class="nav-item">
<a class="nav-link" href="index.php">تسجيل الدخول </a>
</li>
<li class="nav-item">
<a class="nav-link" href="logout.php">تسجيل الخروج </a>
</li>
</ul>
</div>
</div>
</nav>
<div style="text-align:center; padding:3px;">
      <p  style="font-size:18px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
      </p>
    </div>
<section class="hero-agency" id="home" style="background-image: url('data:image/svg+xml;utf8,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%20%3C%21--%20Generator%3A%20Adobe%20Illustrator%2026.3.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%20%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%201837.6%20825.8%22%20style%3D%22enable-background%3Anew%200%200%201837.6%20825.8%3B%22%20xml%3Aspace%3D%22preserve%22%3E%20%3Cstyle%20type%3D%22text/css%22%3E%20.st0%7Bfill%3Aurl%28%23SVGID_1_%29%3B%7D%20.st1%7Bfill%3Anone%3Bstroke%3A%2301C1FF40%3Bstroke-width%3A6%3Bstroke-miterlimit%3A10%3B%7D%20.st2%7Bfill%3A%2301C1FF40%3B%7D%20.st3%7Bfill%3Anone%3Bstroke%3A%2301C1FF40%3Bstroke-width%3A3.2%3Bstroke-miterlimit%3A10%3B%7D%20%3C/style%3E%20%3Cg%20id%3D%22Layer_2_00000053544470457071224840000006208577058981760911_%22%3E%20%3Cg%20id%3D%22Layer_7%22%3E%20%3Cg%20id%3D%22Layer_8%22%3E%20%3ClinearGradient%20id%3D%22SVGID_1_%22%20gradientUnits%3D%22userSpaceOnUse%22%20x1%3D%221194.389%22%20y1%3D%22469.8773%22%20x2%3D%221876.3309%22%20y2%3D%22718.0839%22%20gradientTransform%3D%22matrix%281%200%200%20-1%200%20828%29%22%3E%20%3Cstop%20%20offset%3D%220.2633%22%20style%3D%22stop-color%3A%23FFFFFF%22/%3E%20%3Cstop%20%20offset%3D%220.999%22%20style%3D%22stop-color%3A%23999999%22/%3E%20%3C/linearGradient%3E%20%3Cpath%20class%3D%22st0%22%20d%3D%22M1219.4%2C0c0%2C0-5.5%2C18.7%2C7.3%2C27.8s100%2C62.7%2C60.9%2C88.6c-39.1%2C25.9-113.6%2C75.9-120%2C137.7%20c-6.4%2C61.8%2C33.9%2C81.2%2C70.9%2C90.3c37%2C9.1%2C68.5%2C3.9%2C100.3%2C36.7s42.4%2C70%2C59.1%2C117.6s48.8%2C61.5%2C77.3%2C56.4c28.5-5.2%2C53.6-8.2%2C84.9-62.1%20c31.2-53.9%2C58.8-74.2%2C98.8-66.7c40%2C7.6%2C52.1%2C40%2C178.8%2C46.7l-1.3-278.8c0%2C0-39.9-27.6-46.7-46.9c-18-50.8%2C46.7-115.6%2C46.7-115.6V0%20H1219.4z%22/%3E%20%3C/g%3E%20%3Ccircle%20class%3D%22st1%22%20cx%3D%22714.7%22%20cy%3D%22258.5%22%20r%3D%2217.7%22/%3E%20%3Cpath%20class%3D%22st2%22%20d%3D%22M1243.9%2C203.1l75.7-45.3l10.8-6.4c5.5-3.3%2C0.5-12-5-8.6l-75.7%2C45.3l-10.7%2C6.4%20C1233.3%2C197.8%2C1238.4%2C206.5%2C1243.9%2C203.1L1243.9%2C203.1z%22/%3E%20%3Cpath%20class%3D%22st2%22%20d%3D%22M1535.1%2C772.2l-58.6-56.5c-4.6-4.5-11.7%2C2.6-7.1%2C7.1l58.6%2C56.5C1532.7%2C783.7%2C1539.8%2C776.6%2C1535.1%2C772.2z%22/%3E%20%3Ccircle%20class%3D%22st1%22%20cx%3D%221480.7%22%20cy%3D%22307.2%22%20r%3D%2257.2%22/%3E%20%3Ccircle%20class%3D%22st1%22%20cx%3D%221754.1%22%20cy%3D%22319.4%22%20r%3D%2247.6%22/%3E%20%3Cpolygon%20class%3D%22st3%22%20points%3D%2251.6%2C675.8%2016.9%2C714.2%202.3%2C660.3%20%09%09%22/%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E');">
<div class="container">
<div class="row">
<div class="col-lg-6">
<h1 class="hero-title fw-bold mb-4">اكتشف مصر</h1>
<p class="text-muted mb-5 fs-18">مصر بلد عظيم وغني بالتاريخ والثقافة والجمال الطبيعي. إنها مهد الحضارة ووطن بعض أعظم المعالم الأثرية في العالم، مثل أهرامات الجيزة وأبو الهول. مصر هي بلد الجمال الطبيعي، حيث تلتقي الصحراء والبحر والنهر</p>
<div class="d-flex align-items-center mb-4 mb-lg-0">
</div>
</div>
<div class="col-lg-6">
<img alt="" class="img-fluid" src="images/Egypt.jpg"/>
</div>
</div>
</div>
</section>
<section class="hero-6 bg-dark d-flex align-items-center position-relative" id="about">
<!-- <h1 class="hero-title d-none d-xl-block text-uppercase">We Grow</h1> -->
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-5">
<div class="hero-content mb-lg-0 mb-md-5 mb-5 pb-lg-0 pb-md-5">
<!--<h1 class="text-light font-weight-medium">We Grow</h1>-->
<h1 class="text-light font-weight-medium mb-4 pb-1">اكتشف أثار مصر الفريدة</h1>
<p class="hero-6-sub-title mb-4 pb-2" style="font-size: 16px">استمتع بأثار مصر واكتشف تراثها الثقافي العريق. بلد الفراعنة والأهرامات لديها الكثير لتقدمه، من تاريخها العريق إلى الجمال الطبيعي الخلاب. استمتع بالأطعمة الشهية وارتشف من الشاي الساخن في القاهرة القديمة.اكتشف جمال مصر.</p>
</div>
</div>
<div class="col-lg-6 offset-lg-1 col-md-7">
<video controls width="700px" height="500" src="video/The most Beautiful Places in Egypt.mp4" poster="images/poster.png"></video>
</div>
</div>
</div>
</section>
<!-- About end -->
<!-- Services start -->
<section class="powerful-tools-area" id="features">
<div class="powerful-shape shape-1"></div>
<div class="powerful-shape shape-2">
<img alt="" class="spinner" src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20viewBox%3D%220%200%201855.6%201132.14%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%2C.cls-3%7Bfill%3Anone%3B%7D.cls-2%7Bclip-path%3Aurl%28%23clip-path%29%3B%7D.cls-3%7Bstroke%3A%2301C1FF%3Bstroke-miterlimit%3A10%3Bstroke-width%3A6px%3B%7D%3C/style%3E%3CclipPath%20id%3D%22clip-path%22%20transform%3D%22translate%28503.78%2095.84%29%22%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M865.06%2C283.65s-25.3-8.93-100.9%2C12.67-233.55%2C105.3-294.3%2C33.75S401%2C154.57%2C361.86%2C88.42%2C287.61-4.73%2C189.06.67%2C0%2C104.62%2C0%2C199.12%2C6.81%2C343.57%2C144.51%2C408.37s62.1%2C182.25%2C20.25%2C216S19%2C731%2C35.16%2C830.92s98.55%2C187.65%2C224.1%2C145.8%2C155.19-148.5%2C174.79-213.3%2C103.31-101.25%2C207.26-68.85S878%2C740.23%2C951.81%2C673c82.35-75%2C79.19-160.71%2C53-255C976.74%2C317.32%2C898.56%2C287.77%2C865.06%2C283.65Z%22/%3E%3C/clipPath%3E%3C/defs%3E%3Cg%20id%3D%22Layer_2%22%20data-name%3D%22Layer%202%22%3E%3Cg%20id%3D%22Layer_3%22%20data-name%3D%22Layer%203%22%3E%3Cg%20class%3D%22cls-2%22%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22531.35%22%20y1%3D%221085.25%22%20x2%3D%221263.43%22%20y2%3D%22346.71%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22549.36%22%20y1%3D%221093.81%22%20x2%3D%221281.44%22%20y2%3D%22355.27%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22562.77%22%20y1%3D%221103.16%22%20x2%3D%221294.85%22%20y2%3D%22364.63%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22603.54%22%20y1%3D%221084.85%22%20x2%3D%221335.62%22%20y2%3D%22346.31%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22621.55%22%20y1%3D%221093.41%22%20x2%3D%221353.63%22%20y2%3D%22354.87%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22634.96%22%20y1%3D%221102.77%22%20x2%3D%221367.04%22%20y2%3D%22364.23%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22659.69%22%20y1%3D%221103.16%22%20x2%3D%221391.77%22%20y2%3D%22364.63%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22677.7%22%20y1%3D%221111.72%22%20x2%3D%221409.78%22%20y2%3D%22373.18%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22691.1%22%20y1%3D%221121.08%22%20x2%3D%221423.18%22%20y2%3D%22382.54%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22724.48%22%20y1%3D%221112.12%22%20x2%3D%221456.56%22%20y2%3D%22373.58%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22742.49%22%20y1%3D%221120.68%22%20x2%3D%221474.57%22%20y2%3D%22382.14%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22755.9%22%20y1%3D%221130.03%22%20x2%3D%221487.97%22%20y2%3D%22391.49%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22881.69%22%20y1%3D%221020.5%22%20x2%3D%221613.77%22%20y2%3D%22281.96%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22899.7%22%20y1%3D%221029.06%22%20x2%3D%221631.78%22%20y2%3D%22290.52%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22913.1%22%20y1%3D%221038.42%22%20x2%3D%221645.18%22%20y2%3D%22299.88%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22943.42%22%20y1%3D%221029.46%22%20x2%3D%221675.5%22%20y2%3D%22290.92%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22961.44%22%20y1%3D%221038.02%22%20x2%3D%221693.51%22%20y2%3D%22299.48%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22974.84%22%20y1%3D%221047.37%22%20x2%3D%221706.92%22%20y2%3D%22308.83%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22987.59%22%20y1%3D%221065.19%22%20x2%3D%221719.67%22%20y2%3D%22326.65%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%221017.92%22%20y1%3D%221056.24%22%20x2%3D%221750%22%20y2%3D%22317.7%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%221035.93%22%20y1%3D%221064.79%22%20x2%3D%221768.01%22%20y2%3D%22326.25%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%221049.33%22%20y1%3D%221074.15%22%20x2%3D%221781.41%22%20y2%3D%22335.61%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%221059.65%22%20y1%3D%221085.25%22%20x2%3D%221791.73%22%20y2%3D%22346.71%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%221089.97%22%20y1%3D%221076.3%22%20x2%3D%221822.05%22%20y2%3D%22337.76%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%221107.98%22%20y1%3D%221084.85%22%20x2%3D%221840.06%22%20y2%3D%22346.31%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%221121.39%22%20y1%3D%221094.21%22%20x2%3D%221853.47%22%20y2%3D%22355.67%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22139.84%22%20y1%3D%22843.56%22%20x2%3D%22871.92%22%20y2%3D%22105.02%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22157.85%22%20y1%3D%22852.12%22%20x2%3D%22889.93%22%20y2%3D%22113.58%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22171.25%22%20y1%3D%22861.47%22%20x2%3D%22903.33%22%20y2%3D%22122.93%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22212.03%22%20y1%3D%22843.16%22%20x2%3D%22944.11%22%20y2%3D%22104.62%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22230.04%22%20y1%3D%22851.72%22%20x2%3D%22962.12%22%20y2%3D%22113.18%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22243.44%22%20y1%3D%22861.07%22%20x2%3D%22975.52%22%20y2%3D%22122.53%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22268.17%22%20y1%3D%22861.47%22%20x2%3D%221000.25%22%20y2%3D%22122.93%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22286.18%22%20y1%3D%22870.03%22%20x2%3D%221018.26%22%20y2%3D%22131.49%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22299.59%22%20y1%3D%22879.38%22%20x2%3D%221031.67%22%20y2%3D%22140.84%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%2224.56%22%20y1%3D%22741.05%22%20x2%3D%22756.64%22%20y2%3D%222.51%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%222.13%22%20y1%3D%22742.45%22%20x2%3D%22734.21%22%20y2%3D%223.91%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%2242.57%22%20y1%3D%22749.61%22%20x2%3D%22774.65%22%20y2%3D%2211.07%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%2255.98%22%20y1%3D%22758.96%22%20x2%3D%22788.06%22%20y2%3D%2220.42%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%2296.75%22%20y1%3D%22740.65%22%20x2%3D%22828.83%22%20y2%3D%222.11%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22114.76%22%20y1%3D%22749.21%22%20x2%3D%22846.84%22%20y2%3D%2210.67%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22128.17%22%20y1%3D%22758.56%22%20x2%3D%22860.25%22%20y2%3D%2220.02%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22152.89%22%20y1%3D%22758.96%22%20x2%3D%22884.97%22%20y2%3D%2220.42%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22170.9%22%20y1%3D%22767.52%22%20x2%3D%22902.98%22%20y2%3D%2228.98%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22184.31%22%20y1%3D%22776.87%22%20x2%3D%22916.39%22%20y2%3D%2238.34%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22332.96%22%20y1%3D%22870.43%22%20x2%3D%221065.04%22%20y2%3D%22131.89%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22350.98%22%20y1%3D%22878.98%22%20x2%3D%221083.06%22%20y2%3D%22140.44%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22364.38%22%20y1%3D%22888.34%22%20x2%3D%221096.46%22%20y2%3D%22149.8%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22310.83%22%20y1%3D%22965.74%22%20x2%3D%221042.91%22%20y2%3D%22227.2%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22328.84%22%20y1%3D%22974.3%22%20x2%3D%221060.92%22%20y2%3D%22235.76%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22342.24%22%20y1%3D%22983.65%22%20x2%3D%221074.32%22%20y2%3D%22245.11%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22372.57%22%20y1%3D%22974.69%22%20x2%3D%221104.65%22%20y2%3D%22236.16%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22390.58%22%20y1%3D%22983.25%22%20x2%3D%221122.66%22%20y2%3D%22244.71%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22403.98%22%20y1%3D%22992.61%22%20x2%3D%221136.06%22%20y2%3D%22254.07%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22416.74%22%20y1%3D%221010.43%22%20x2%3D%221148.82%22%20y2%3D%22271.89%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22447.06%22%20y1%3D%221001.47%22%20x2%3D%221179.14%22%20y2%3D%22262.93%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22465.07%22%20y1%3D%221010.03%22%20x2%3D%221197.15%22%20y2%3D%22271.49%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22478.47%22%20y1%3D%221019.38%22%20x2%3D%221210.55%22%20y2%3D%22280.85%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22488.79%22%20y1%3D%221030.49%22%20x2%3D%221220.87%22%20y2%3D%22291.95%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22519.12%22%20y1%3D%221021.53%22%20x2%3D%221251.2%22%20y2%3D%22282.99%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22537.13%22%20y1%3D%221030.09%22%20x2%3D%221269.21%22%20y2%3D%22291.55%22/%3E%3Cline%20class%3D%22cls-3%22%20x1%3D%22550.53%22%20y1%3D%221039.44%22%20x2%3D%221282.61%22%20y2%3D%22300.9%22/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E"/>
</div>
<div class="container">
<div class="powerful-tools-wrapper">
<div class="row">
<div class="col-lg-6">
<div class="powerful-image mt-50 wow fadeInLeftBig" data-wow-delay="0.3s" data-wow-duration="1s">
<div class="image">
<img alt="" class="feature1" id="img-fluid" src="images/poster.png"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="powerful-tools-content mt-50">
<div class="section-title">
<h2 class="title" id="feat_title1"></h2>
</div>
<div class="powerful-content-wrapper">
<h5>الجيزة</h5>
<h3>الأهرامات</h3>
<p id="feat_desc1" style="font-size: 16px">أشهر الأهرامات في مصر هي أهرامات الجيزة الثلاثة: هرم خوفو، وهرم خفرع، وهرم منقرع. هرم خوفو هو الأكبر من الثلاثة، ويُعد من عجائب الدنيا السبع القديمة. تم بناء الأهرامات منذ أكثر من 4500 عام، باستخدام ملايين من الكتل الحجرية. لا يزال يُحيط ببناء الأهرامات أسرار كثيرة، مثل كيفية نقل الكتل الحجرية الثقيلة إلى مكانها، وكيفية بناء الأهرامات بدقة متناهية.</p>
<!-- <ul class="content-list">
<li><i class="fas fa-check"></i> Refresing to get such a personal touch.</li>
<li><i class="fas fa-check"></i> Duis aute irure dolor in reprehenderit in voluptate.</li>
<li><i class="fas fa-check"></i> Velit esse cillum dolore eu fugiat nulla pariatur.</li>
</ul> -->
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--====== Powerful Tools Ends ======-->
<!--====== Discover Start ======-->
<section class="discover-area" id="discover">
<div class="discover-shape shape-1">
<img alt="" src="https://arabyai-webpages.s3.me-south-1.amazonaws.com/template_website/araby_ai_template/images/dots-2.png"/>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="discover-content-wrapper">
<div class="section-title">
<h2 class="title" id="feat_title2">سيوة</h2>
</div>
<div class="discover-content">
<p id="feat_desc2" style="font-size: 16px">سيوة (باللغة الأمازيغية السيوية:ⵉⵙⵉⵡⴰⵏ أو isiwan) هي مدينة وواحة مصرية في الصحراء الغربية، تبعد حوالي 300 كم عن ساحل البحر المتوسط إلى الجنوب الغربي من مرسى مطروح، وتتبع محافظة مطروح إدارياً. ينتشر في أرجائها الآبار والعيون التي تستخدم لأغراض الري والشرب وتعبئة المياه الطبيعية والعلاج، وبها أربع بحيرات كبرى، فيما اكتشف بها عدة أماكن أثرية مثل معبد آمون، الذي يشهد ظاهرة الاعتدال الربيعي مرتان كل عام، ومقابر جبل الموتى، وأعلنت بها محمية طبيعية تبلغ مساحتها 7800 كم، تضم عدة أنواع لأشكال الحياة الحيوانية والنباتية. يقطن الواحة ما يقارب من 35 ألف نسمة تقريباً، يعمل أغلبهم بالزراعة أو السياحة. يسود المناخ القاري الصحراوي الواحة، فهي شديدة الحرارة صيفاً، أما شتاؤها فدافئ نهاراً شديد البرودة ليلاً.</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="powerful-image mt-50 wow fadeInLeftBig" data-wow-delay="0.3s" data-wow-duration="1s">
<div class="image">
<img alt="" class="feature2" id="img-fluid" src="images/siwa.jpg"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!--====== Everything Start ======-->
<section class="everything-area" id="everything" style="background-color: transparent">
<div class="everything-shape shape-1 bg-primary" style="opacity: 0.2"></div>
<div class="everything-shape shape-2"></div>
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="everything-image mt-50 wow fadeInLeftBig" data-wow-delay="0.3s" data-wow-duration="1s">
<div class="image">
<img class="feature3" id="img-fluid" src="images/2021-07-13.jpg"/>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="everything-content-wrapper mt-50">
<div class="section-title">
<p class="sub-title">الإسكندرية</p>
<h2 class="title" id="feat_title3">مكتبة الإسكندرية</h2>
</div>
<div class="everything-content">
<ul class="everything-items">
<li>
<br><p id="feat_desc3" style="font-size: 16px">مكتبة الإسكندرية القديمة وعرفت باسم مكتبة الإسكندرية الملَكية أو المكتبة العظمى هي كبرى مكتبات عصرها، وقد شيدها بطليموس الأول. ويقال أنه تم تأسيسها علي يد الإسكندر الأكبر قبل حوالي ثلاثة وعشرين قرناً ويقال أيضاً أنه تم تأسيسها على يد بطليموس الثاني في أوائل القرن الثالث قبل الميلاد، عام (285 ـ 247) قبل الميلاد تعرضت المكتبة للعديد من الحرائق و دمرت تماماً في عام 48 ق.م وفي عام 2002 تم إعادة بنائها تحت اسم مكتبة الإسكندرية الجديدة. </p></br>
<br>
<br>
<br>
<br>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<div><h2 class="designer" dir="ltr">this website designed by omar ahmad farouk</h2></div>
<object
data="egypt.pdf"
type="application/pdf"
width="100%"
height="600px"
></object> 
<div><object
data="egypt.docx"
type="application/word"
width="100%"
height="600px"
></object> 

</section>
<!--====== Everything Ends ======-->
<!--service end-->
<!-- .row end -->
</div>
<!-- .container End -->
</section>
<!--Testimonils end-->
<!-- footer & cta start -->
<section class="footer bg-light" style="padding: 50px 20px">
<div class="pb-0" id="contact">
<!-- start container -->
<div class="container" style="padding-bottom: 40px">
<div class="contact-item">
<div class="row align-items-center">
<!-- <div class="col-lg-5"> -->
<div class="contact-info">
<div class="mb-4">
<h2>لنتواصل</h2>
<!-- <p class="text-muted mb-0">
                    Looking for help? Fill the form and start a new adventure.
                  </p> -->
</div>
<hr/>
<div class="contact_details">
<div class="info-content">
<div class="d-flex mt-2">
</div>
</div>
<div class="info-content">
<h6>رقم الهاتف :</h6>
<div class="d-flex mt-2">
<div class="icon">
<i class="mdi mdi-email-outline fs-24 text-primary"></i>
</div>
<div class="icon-content ms-3">
<p class="mb-0 fs-15" id="mob_no">01011715345</p>
</div>
</div>
</div>
<div class="info-content">
<h6>البريد الإلكتروني :</h6>
<div class="d-flex mt-2">
<div class="icon">
<i class="mdi mdi-phone-outline fs-24 text-primary"></i>
</div>
<div class="icon-content ms-3">
<p class="mb-0 fs-15" id="email">oa600690@gmail.com</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-3 text-center text-lg-start">
<div class="footer-logo mb-4">
<a href="#">
<img alt="" src="images/logo-dark.png" width="50px"/>
</a>
</div>
<a class="text-muted" href="#" id="email_f"></a>
<p class="text-muted" id="mob_no_f"></p>
</div>
<div class="col-lg-9">
<div class="row">
<div class="col-sm-6 col-md-3">
<h5 class="fs-22 mb-3 fw-semibold">روابط سريعة</h5>
<ul class="list-unstyled footer-nav">
<li style="margin-right: 40px">
<a class="footer-link" href="#home">اكتشف مصر</a>
</li>
<li style="margin-right: 40px">
<a class="footer-link" href="#about">اكتشف أثار مصر الفريدة</a>
</li>
<li style="margin-right: 40px">
<a class="footer-link" href="#features">الأماكن الأثرية</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- footer & cta end -->
</body>
<script src="main.js"></script>
</html>