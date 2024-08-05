<?php
header('Content-Type: text/html; charset=utf-8');
include 'conection.php';
$conn->set_charset("utf8");




// execute the query and get the results



// check if any rows were returned


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>  التطبيق الخاص بالمخزن  </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
          @font-face {
      font-family: 'Kumbh Sans';
      src: url('/fonts/Cairo/static/Cairo-Medium.ttf') format('truetype');
      font-weight: 400;
      font-style: normal;
    }
  
    @font-face {
      font-family: 'Kumbh Sans';
      src: url('/fonts/Cairo/static/Cairo-Medium.ttf') format('truetype');
      font-weight: 700;
      font-style: normal;
    }
  
    body {
      font-family: 'Kumbh Sans', sans-serif;
     

    }
    * {
      font-family: 'Kumbh Sans', sans-serif;
      font-weight: 700; /* Use the bold font weight */
    }
    main{
      margin : 0;
      padding:0;
 
    }
  
    
          .card {
  position: relative;
  width: 100%;
  padding-bottom: 100%; /* 1:1 aspect ratio */
  overflow: hidden;

  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  transition : 0.3s ease-in-out
}

.card .card-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #f5f5f5;
  background-size: cover;
  background-position: center;
  border-radius : 15px;
  /* border : 2px solid red */
 
}
.card:hover  {

  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  transform : translateY(-10px)
}

.card:hover .card-img {
  filter: brightness(0.9); /* Add a little overlay on hover */
 
}

.whater{
opacity: 0.4;
  height: 110%;
  width:100%;
  position: absolute;
  top:0;
  left: 0;
  z-index: -20;
      
background-image:  url("/images/flag.png");
background-position: right bottom;
background-size: 90% auto;
background-repeat: no-repeat;

}

.whater1{
opacity: 0.1;
  height: 50%;
  width :50%;
  position: absolute;
  top:1%;
  left: 39%;
  
      
background-image:  url("/images/mdj.png");
background-position: left top;
background-size: contain;
background-repeat: no-repeat;

}

.card .card-title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 40px;
  text-align: center;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
}
.img{
    width: 25%;
  height: 25%;
}

@media (min-width: 576px) {
  .card {
    border: none;
  }
}
        </style>
    </head>
    <body class="sb-nav-fixed" >
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">تطبيق المخزن</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item ">
                    <a class="nav-link " href="index.php" >تسجيل خروج<i class="fas fa-user fa-fw"></i></a>
                    
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav" >
            <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="historique.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                الصفحة الرئيسية
                            </a>
                            
                            
                            
                           
                            
                            
                            <div class="sb-sidenav-menu-heading">داخل وخارج من المخزن</div>
                            <a class="nav-link" href="tables .php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                ادخال الى مخزن
                            </a>
                            <a class="nav-link" href="histo_mo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                المدخلات  
                            </a>
                            <div class="sb-sidenav-menu-heading">داخل وخارج من المخزن</div>

                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                اخذ على عاتق
                            </a>
                            <a class="nav-link" href="histo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                المخرجات 
                            </a>
                            <a class="nav-link" href="fds.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                ورقة المخزن 
                            </a>
                            <a class="nav-link" href="addempl.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                اضافة موظف  
                            </a>
                            <a class="nav-link" href="addforn.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                اضافة مورد 
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Made and Protected by:</div>
                        BELLARBI RAFIK 
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content" >
                <main>

                <div class='whater'></div>
                <div class='whater1'></div>
                <div style="display: flex; text-align: center; width: 100%; justify-content: space-around;  align-items: center; margin-bottom: 3rem; " >
                    <div ><img  style="width: 150px;  height: 150px" src="images/mdjColored.png"/></div>
                    <div  > 
                 <h1 >الجمهورية الجزائرية الديمقراطية الشعبية
            </h1> 
            </br>
        
              <h2>  وزارة العدل </h2>
              </br>
              <h3> مجلس قضاء الجلفة  </h3>
              <h3>  التطبيق الخاص بالمخزن</h3>
            </div>
            <div ><img   style="width: 150px;  height: 150px;" src="images/mdjColored.png"/></div>

            </div>
            </br>  
                <div class="container">
                <div class="row">
                 
    <div class="col-lg-3 col-md-4 col-sm-6 mb-8">
    <a href="home1.php?id=1">
      <div class="card" onMouseOver="this.style.border='7px solid #f44336'" onMouseOut="this.style.border='0px'" style="border-radius : 25px" >
      <div class="card-img" style="background-image: url('images/rr.jpg'); "   ></div>
        <div class="card-title"> الوراقة </div>
      </div>
      </a>
    </div>


    <div class="col-lg-3 col-md-4 col-sm-6 mb-8">
    <a href="home1.php?id=2">
      <div class="card"  onMouseOver="this.style.border='7px solid #69f0ae'" onMouseOut="this.style.border='0px'" style="border-radius : 25px">
        <div class="card-img" style="background-image: url('images/00.jpg');" ></div>
        <div class="card-title"> لوازم المكتب </div>
      </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-8">
    <a href="home1.php?id=3">
      <div class="card"  onMouseOver="this.style.border='7px solid #03a9f4'" onMouseOut="this.style.border='0px'" style="border-radius : 25px">
      <div class="card-img" style="background-image: url('images/info.jpg');" ></div>
        <div class="card-title"> أجهزة ولوازم الإعلام الآلي </div>
      </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=4">
      <div class="card">
      <div class="card-img" style="background-image: url('images/555.jpg');"  onMouseOver="this.style.border='7px solid #ffa726'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> السجلات والمطبوعات المختلفة </div>
      </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=5">
      <div class="card">
      <div class="card-img" style="background-image: url('images/vv.jpg');"  onMouseOver="this.style.border='7px solid #795548'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> مختلفة </div>
      </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=6">
      <div class="card">
      <div class="card-img" style="background-image: url('images/k.jpg');"  onMouseOver="this.style.border='7px solid #ffff00'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> الخردوات </div>
      </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=7">
      <div class="card">
      <div class="card-img" style="background-image: url('images/2.jpg');"  onMouseOver="this.style.border='7px solid #f48fb1'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> المواد الغذائية </div>
      </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=8">
      <div class="card">
      <div class="card-img" style="background-image: url('images/atad.jpg');"  onMouseOver="this.style.border='7px solid #e040fb'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> عتاد </div>
      </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=9">
      <div class="card">
      <div class="card-img" style="background-image: url('images/car.jpg');"  onMouseOver="this.style.border='7px solid #00695c'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> زيوت </div>
      </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=10">
      <div class="card">
      <div class="card-img" style="background-image: url('images/aa.jpg');"  onMouseOver="this.style.border='7px solid #b3e5fc'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> البسة </div>
      </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=11">
      <div class="card">
      <div class="card-img" style="background-image: url('images/9.jpg');"  onMouseOver="this.style.border='7px solid #9e9d24'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> قطع الغيار </div>
      </div>
</a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <a href="home1.php?id=12">
      <div class="card">
      <div class="card-img" style="background-image: url('images/pp.jpg');"  onMouseOver="this.style.border='7px solid #212121'" onMouseOut="this.style.border='0px'"></div>
        <div class="card-title"> مطاطيات </div>
      </div>
      </a>
    </div>
  </div>
 
        </div>


                <form action="historique.php" method="post">


                
                
                
                </form>
                </main>
               
            </div>
        </div>
     

        

        
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
