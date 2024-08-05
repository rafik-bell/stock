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
  z-index: -20;
      
background-image:  url("/images/mdj.png");
background-position: left top;
background-size: contain;
background-repeat: no-repeat;

}
</style>
        <style>
          .card {
  position: relative;
  width: 100%;
  padding-bottom: 100%; /* 1:1 aspect ratio */
  overflow: hidden;
  background-color: #f5f5f5;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  transition : 0.3s
}

.card .card-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  
  background-size: cover;
  background-position: center;
}
.card:hover  {

  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  transform : translateY(-10px)
}

.card:hover .card-img {
  filter: brightness(0.9); /* Add a little overlay on hover */
 
}

.card .card-title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-size: 32px;
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
    <body class="sb-nav-fixed">
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
                <main class="container" style="direction: rtl;">
                <div class='whater'></div>
                <div class='whater1'></div>

<?php ?>

 <form action="histo.php" method="post">
                
                <h2>    المخرجات </h2>
</br>
                <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>  بحث عبر السنة </strong></label>
    <div style="display: flex;">
    <input type="number" class="form-control" id="exampleInputEmail1" name="year"  placeholder="2023" >
</br>
    
</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>  بحث عبر اسم المنتج</strong></label>
    <div style="display: flex;">
    <input type="text" class="form-control" id="exampleInputEmail1" name="name_prod" aria-describedby="emailHelp">
</br>
    
</div>
  </div>
  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i><strong>  بحث </strong></button>
  </form>
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">اللقب</th>
                    <th scope="col">الرتبة</th>
                    <th scope="col">الجهة</th>
                    <th scope="col">المنتج</th>
                    <th scope="col">التاريخ</th>
                    <th scope="col">الكمية</th>

                    </tr>
                </thead>
                <tbody>
                <?php  
    
         
    if(isset($_POST["year"])&&isset($_POST["name_prod"])){

        $year = $_POST["year"];
        $name_prod =trim($_POST["name_prod"]);

if(empty($_POST["year"])){$sql = "SELECT preneur.nom_p ,preneur.prenom_p,preneur.grad_p,preneur.secteur,produit.nom_prod,prondre.date_p,prondre.qnt_p FROM produit JOIN prondre ON produit.id=prondre.id JOIN preneur ON preneur.id_p=prondre.id_p where YEAR(prondre.date_p)=2023 ORDER BY  prondre.date_p DESC";
}else{
    $sql = "SELECT preneur.nom_p ,preneur.prenom_p,preneur.grad_p,preneur.secteur,produit.nom_prod,prondre.date_p,prondre.qnt_p FROM produit JOIN prondre ON produit.id=prondre.id JOIN preneur ON preneur.id_p=prondre.id_p where YEAR(prondre.date_p)=$year ORDER BY  prondre.date_p DESC";  
}
if(!empty($_POST["year"])&&!empty($_POST["name_prod"])){$sql = "SELECT preneur.nom_p ,preneur.prenom_p,preneur.grad_p,preneur.secteur,produit.nom_prod,prondre.date_p,prondre.qnt_p FROM produit JOIN prondre ON produit.id=prondre.id JOIN preneur ON preneur.id_p=prondre.id_p where YEAR(prondre.date_p)=$year AND produit.nom_prod='$name_prod'  ORDER BY  prondre.date_p DESC";}       
if(empty($_POST["year"])&&!empty($_POST["name_prod"])){$sql = "SELECT preneur.nom_p ,preneur.prenom_p,preneur.grad_p,preneur.secteur,produit.nom_prod,prondre.date_p,prondre.qnt_p FROM produit JOIN prondre ON produit.id=prondre.id JOIN preneur ON preneur.id_p=prondre.id_p where YEAR(prondre.date_p)=2023 AND produit.nom_prod='$name_prod'  ORDER BY  prondre.date_p DESC";}


////////////////////////////////////////////
    }else{
        $sql = "SELECT preneur.nom_p ,preneur.prenom_p,preneur.grad_p,preneur.secteur,produit.nom_prod,prondre.date_p,prondre.qnt_p FROM produit JOIN prondre ON produit.id=prondre.id JOIN preneur ON preneur.id_p=prondre.id_p ORDER BY  prondre.date_p DESC";       
    }
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
                
                
//////////////////////////////////////////              
                ?>
                    <tr>
                    <th scope="row">1</th>
                    <td><?php echo $row["nom_p"];?></td>
                    <td><?php echo $row["prenom_p"];?></td>
                    <td><?php echo $row["grad_p"];?></td>
                    <td><?php echo $row["secteur"];?></td>
                    <td><?php echo $row["nom_prod"];?></td>
                    <td><?php echo $row["date_p"];?></td>
                    <td><?php echo $row["qnt_p"];?></td>

                    
                    </tr>
                    <?php
                                             
                                            }
                          }
                        
                     ?>
                </tbody>
                </table>


               


                
                
                
                
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
