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
        <style>@font-face {
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
  
      
background-image:  url("/images/mdj.png");
background-position: left top;
background-size: contain;
background-repeat: no-repeat;

}</style>
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">تطبيق المخزن</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
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
    <!-- ajouter produit ! --------------------------------------------------------->
        <?php
        if (isset($_POST["addname"])&&isset($_POST["qntmin"])&&isset($_POST["qnt"])) {
            if ($_POST["addname"]!='' &&  $_POST["qntmin"]!=''  &&$_POST["qnt"]!='' &&$_POST["cat"]!='0'&&isset($_POST["checkadd"])&&isset($_POST["num_cont"]))  {

                $addname=trim($_POST["addname"]);
                $qntmin=trim($_POST["qntmin"]);
                $qnt=$_POST["qnt"];
                $cat=$_POST["cat"];
                $num_cont=$_POST["num_cont"];


                $sql = "SELECT * FROM produit WHERE nom_prod ='$addname'";

// execute the query and get the results
$result = mysqli_query($conn, $sql);


// check if any rows were returned
if (mysqli_num_rows($result) == 0) {
                $sql = "INSERT INTO produit (nom_prod,qnt_prod,cat_prod,qnt_min,num_cont)VALUES ('$addname',$qnt,'$cat',$qntmin,$num_cont)";
                $result = mysqli_query($conn, $sql);
                if($result){
                    ?>
                    <div  class="alert alert-success" style="text-align: center;">
                    <strong>
                    تمت زيادة المنتج بنجاح
                </strong>
                  </div><?php
                }else {
                   
                }
                

}else { ?><div class="alert alert-danger" style="text-align: center;" > <strong>
      المنتج موجود
</strong>
    </div><?php }
              






            }else { ?><div class="alert alert-danger" style="text-align: center;" > <strong>
                اكمل ملء المعلومات
            </strong>
                </div><?php }
                   
            
        }
        
        
        
        
        ?>

    <!-- fin ajouter produit !--------------------------------------------------- -->
    <!-- debut suprimmer produit ! ------------------------------------------------->
                <?php 
        
        if (isset($_POST["delname"])&&isset($_POST["check"])) {
            $delname=trim($_POST["delname"]);
            $sql = "SELECT * FROM produit WHERE nom_prod ='$delname'";

// execute the query and get the results
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            $sql = "DELETE FROM produit WHERE nom_prod ='$delname'";

if ($conn->query($sql) === TRUE) {
    ?>
    <div  class="alert alert-success" style="text-align: center;">
    <strong>
    تم الحذف بنجاح
</strong>
  </div><?php
  
} else {
  echo "Error deleting record: " . $conn->error;
}
}else {?>
    <div class="alert alert-danger" style="text-align: center;">
    <strong>
    منتج غير موجود
</strong>
  </div><?php
  
}


        }          ?>
<!-- fin suprimmer produit ! ---------------------------------------------------------->
                    <div class="container-fluid px-4" style="direction: rtl;">
                    <?php
                                        if($_GET['id']==1){
                                             
                                            echo '<h1 class="mt-4">الوراقة</h1>';
                                        }
                                        if($_GET['id']==2){
                                            echo '<h1 class="mt-4">لوازم المكتب</h1>';
                                        }
                                        if($_GET['id']==3){
                                            echo '<h1 class="mt-4">أجهزة ولوازم الإعلام الآلي</h1>';
                                        }
                                        if($_GET['id']==4){
                                            echo '<h1 class="mt-4">السجلات والمطبوعات المختلفة</h1>';
                                        }
                                        if($_GET['id']==5){
                                            echo '<h1 class="mt-4">مختلفة</h1>';
                                        }
                                        if($_GET['id']==6){
                                            echo '<h1 class="mt-4">الخردوات</h1>';
                                            
                                        }
                                        if($_GET['id']==7){
                                            echo '<h1 class="mt-4">المواد الغذائية</h1>'; 
                                        }
                                        if($_GET['id']==8){
                                               echo '<h1 class="mt-4">عتاد</h1>';
                                        }
                                        if($_GET['id']==9){
                                         echo '<h1 class="mt-4">زيوت</h1>';
                                        }
                                        if($_GET['id']==10){
                                            echo '<h1 class="mt-4">البسة</h1>';
                                        }
                                        if($_GET['id']==11){
                                         echo '<h1 class="mt-4">قطع الغيار</h1>';
                                        }
                                        if($_GET['id']==12){
                                          echo '<h1 class="mt-4">مطاطيات</h1>';
                                        }
                                        if($_GET['id']==0){
                                           echo '<h1 class="mt-4">الصفحة الرئيسية</h1>';
                                        }
                                        ?>
                        
                        <br/>
                        <br/><br/>
                        <div class="row">
                            
                        
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4"style="text-align: center;">
                                <button  class="bg-success text-white" data-toggle="modal" data-target="#exampleModal">
                                    <div class="card-body">أضافة منتج جديد</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    <button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4"style="text-align: center;">
                                <button  class="bg-danger text-white" data-toggle="modal" data-target="#forgotPasswordModal">
                                    <div class="card-body">حذف منتج </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    <button>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card mb-4" style="width: 80%;">
                            <div class="card-header" style="direction: rtl;">
                                <i class="fas fa-table me-1" style="direction: rtl;"></i>
                                منتجات المخزن
                            </div>
                            <div class="card-body"style="direction: rtl;">
                                <table id="datatablesSimple" style="direction: rtl;  width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="direction: rtl;font-size: 25px;">اسم المنتج</th>
                                            <th>| |</th>
                                            <th style="direction: rtl; font-size: 25px;">الكمية</th>
                                            <th>||</th>
                                            <th style="direction: rtl; font-size: 25px;">الحدالادنئ</th>
                                            <th>||</th>
                                            <th style="direction: rtl; font-size: 25px;">رقم الجرد</th>
                                            <th></th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        if($_GET['id']==1){
                                            $sql = "SELECT * FROM produit where cat_prod='الوراقة' ";
                                        }
                                        if($_GET['id']==2){
                                            $sql = "SELECT * FROM produit where cat_prod='لوازم المكتب'";
                                        }
                                        if($_GET['id']==3){
                                            $sql = "SELECT * FROM produit where cat_prod='أجهزة ولوازم الإعلام الآلي' ";
                                        }
                                        if($_GET['id']==4){
                                            $sql = "SELECT * FROM produit where cat_prod='السجلات والمطبوعات المختلفة' ";
                                        }
                                        if($_GET['id']==5){
                                            $sql = "SELECT * FROM produit where cat_prod='مختلفة' ";
                                        }
                                        if($_GET['id']==6){
                                            $sql = "SELECT * FROM produit where cat_prod='الخردوات' ";
                                        }
                                        if($_GET['id']==7){
                                            $sql = "SELECT * FROM produit where cat_prod='المواد الغذائية' ";
                                        }
                                        if($_GET['id']==8){
                                            $sql = "SELECT * FROM produit where cat_prod='عتاد' ";
                                        }
                                        if($_GET['id']==9){
                                            $sql = "SELECT * FROM produit where cat_prod='زيوت' ";
                                        }
                                        if($_GET['id']==10){
                                            $sql = "SELECT * FROM produit where cat_prod='البسة' ";
                                        }
                                        if($_GET['id']==11){
                                            $sql = "SELECT * FROM produit where cat_prod='قطع الغيار' ";
                                        }
                                        if($_GET['id']==12){
                                            $sql = "SELECT * FROM produit where cat_prod='مطاطيات' ";
                                        }
                                        if($_GET['id']==0){
                                            $sql = "SELECT * FROM produit ";
                                        }
                                        
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {?>
                                        <tr style="direction: rtl; ">
                                            
                                            
                                            <td style="direction: rtl;font-size: 20px;"><?php echo $row["nom_prod"];?></td>
                                            <td>| |</td>
                                            <td style="direction: rtl;font-size: 20px;"><?php echo $row["qnt_prod"];?></td>
                                            <td>| |</td>
                                            <td style="direction: rtl;font-size: 20px;"><?php echo $row["qnt_min"];?></td>
                                            <td>| |</td>
                                            <td style="direction: rtl;font-size: 20px;"><?php if($row["num_cont"]==0){ echo "لاشيء";}else{ echo $row["num_cont"];}?></td>
                                            
                                            <td style="direction: rtl;font-size: 20px; color:red"><?php if($row["qnt_prod"]<=$row["qnt_min"]){ echo ' <strong>منتج سوف ينفذ<strong>';}?></td>
                                            
                                        </tr>
                                        
                                        
                                            <?php
                                             
                                      //if($row["name"]==$username && $row["password"]==$password ){
		                            //header("Location: home1.php");
		                            	//exit;
                                        //}
                                            }
                                        }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
     

        

        
<!-- dubit modal suprimmer produit ! -->

<form action="home1.php?id=<?php echo $_GET['id'];?>" method="post">
        <div class="modal fade"style="direction: rtl;" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="forgotPasswordModalLabel">حذف المنتج</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
         
            <div class="form-group">
                
              <label for="forgotPasswordEmail">اسم المنتج</label>
              <input type="text" class="form-control" name="delname" style="direction: rtl;" id="forgotPasswordEmail" aria-describedby="forgotPasswordEmailHelp" placeholder="اسم">
            </br>
            <input class="form-check-input" name="check" style=" height:22px;width:22px;" type="checkbox" value="" id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
                هل حقا تريد محو المنتج
            </label>

            </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
          <button type="submit" name="sub"class="btn btn-primary">تاكيد</button>
        </div>
        
      </div>
    </div>
  </div>
  </form>
  <!-- fin modal suprimmer produit ! -->


  <!-- dubit model ajouter produit ! -->
  <form action="home1.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="modal fade bd-example-modal-lg" style="direction: rtl;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج جديد </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <label for="forgotPasswordEmail">اسم المنتج</label>
              <input type="text" class="form-control" name="addname" style="direction: rtl;" id="forgotPasswordEmail" aria-describedby="forgotPasswordEmailHelp" placeholder="اسم">
              <label for="forgotPasswordEmail">كمية المنتج</label>
              <input type="number" class="form-control" name="qnt" style="direction: rtl;" id="forgotPasswordEmail" aria-describedby="forgotPasswordEmailHelp" placeholder="كمية">
              <label for="forgotPasswordEmail">الحدالادنئ للمنتج</label>
              <input type="number" class="form-control" name="qntmin" style="direction: rtl;" id="forgotPasswordEmail" aria-describedby="forgotPasswordEmailHelp" placeholder="الحدالادنئ">
              <label for="forgotPasswordEmail">رقم الجرد للمنتج</label>
              <input type="number" class="form-control" name="num_cont" style="direction: rtl;" id="forgotPasswordEmail" aria-describedby="forgotPasswordEmailHelp" placeholder="رقم الجرد" value=0>
              <label for="forgotPasswordEmail">اختر نوع المنتج</label>
              <select class="form-select" name="cat" aria-label="Default select example">
                 <option selected value="0">انواع المنتجات</option>
                 <option value="الوراقة">الوراقة</option>
                 <option value="لوازم المكتب">لوازم المكتب</option>
                 <option value="أجهزة ولوازم الإعلام الآلي">جهزة ولوازم الإعلام الآلي</option>
                 <option value="السجلات والمطبوعات المختلفة">السجلات والمطبوعات المختلفة</option>
                 <option value="مختلفة">مختلفة</option>
                 <option value="الخردوات">الخردوات</option>
                 <option value="المواد الغذائية">المواد الغذائية</option>
                 <option value="عتاد">عتاد</option>
                 <option value="زيوت">زيوت</option>
                 <option value="البسة">البسة</option>
                 <option value="قطع الغيار">قطع الغيار</option>
                 <option value="مطاطيات">مطاطيات</option>
              </select>
              <input class="form-check-input" name="checkadd" style=" height:22px;width:22px;" type="checkbox" value="" id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
                هل حقا تريد زيادة المنتج
            </label>

        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
        <button type="submit" class="btn btn-primary">تاكيد</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- fin mpdal ajouter produit ! --> 
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
