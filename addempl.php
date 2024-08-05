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

    <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
                                <script type='text/javascript'>$(document).ready(function() {
$('.select2').select2({
closeOnSelect: false
});
});</script>

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

            <?php
            if (isset($_POST["sub1"])) {
if (isset($_POST["nom"])&&isset($_POST["prenom"])&&isset($_POST["grad"])&&isset($_POST["rigion"])) {
if (!empty($_POST["nom"])&&!empty($_POST["prenom"])&&$_POST["grad"]!="الرتبة"&&$_POST["rigion"]!="0") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $grad = $_POST['grad'];
    $rigion = $_POST['rigion'];
    $sql = "INSERT INTO `preneur`( `nom_p`, `prenom_p`, `grad_p`, `secteur`) VALUES ('$nom','$prenom','$grad','$rigion')";
    
    if ($conn->query($sql) === TRUE) {
        ?>
          <div class="alert alert-success" style="text-align: center;">
          <strong>
            تمت عملية بنجاح  
      </strong>
        </div><?php
    } 
    }else {
        ?>
        <div class="alert alert-danger" style="text-align: center;">
        <strong>
               المعلومات غير كاملة
    </strong>
      </div><?php
        
    }
}}
if (isset($_POST["sub2"])) {
  
    if (isset($_POST["data"])&&isset($_POST["grad1"])&&isset($_POST["rigion1"])) {
    if ($_POST["data"]!="الموظف"&&$_POST["grad1"]!="الرتبة"&&$_POST["rigion1"]!="0") {
      $data = explode("__", $_POST["data"]);
        $nom = $data[0];
        $prenom = $data[1];
        $grad = $_POST['grad1'];
        $rigion = $_POST['rigion1'];
        $sql = "UPDATE `preneur` SET `grad_p`='$grad',`secteur`='$rigion' WHERE `nom_p`='$nom' AND`prenom_p`='$prenom'";
        
        if ($conn->query($sql) === TRUE) {
            ?>
              <div class="alert alert-success" style="text-align: center;">
              <strong>
                تمت تحديث بنجاح  
          </strong>
            </div><?php
        } 
        }else {
            ?>
            <div class="alert alert-danger" style="text-align: center;">
            <strong>
                   المعلومات  التحديث غير كاملة
        </strong>
          </div><?php
            
        }
    }}


?>
            <main class="container" style="direction: rtl;">
            <div class='whater'></div>
                <div class='whater1'></div>
                <form action="addempl.php" method="post">
                
                <h2>   اضافة موظف </h2>
                </br>
                <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>  الاسم </strong></label>
    <div style="display: flex;">
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom"  placeholder="..." >
</br>
    
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>  اللقب  </strong></label>
    <div style="display: flex;">
    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom"  placeholder="..." >
</br>
    
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>  الرتبة  </strong></label>
    <div style="display: flex;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="grad" tabindex="-1" aria-hidden="true" >
                    <option selected="selected">الرتبة</option>
                    <option >النائب العام</option>
                    <option >رئيس المجلس</option>
                    <option >نائب عام مساعد</option>
                    <option >رئيس غرفة</option>
                    <option >مستشار</option>
                    <option >أمين عام</option>
                    <option >رئيس المحكمة</option>
                    <option >رئيس المحكمة التجارية</option>
                    <option >وكيل الجمهورية</option>
                    <option >وكيل الجمهورية مساعد</option>
                    <option >قاضي</option>
                    <option >رئيس أمانة الضبط</option>
                    <option >أمين قسم ضبط رئيسي</option>
                    <option >أمين قسم ضبط</option>
                    <option >أمين ضبط</option>
                    <option >معاون أمين ضبط</option>
                    <option >عون أمانة الضبط</option>
                    <option >متصرف مستشار</option>
                    <option >متصرف رئيسي</option>
                    <option >متصرف محلل</option>
                    <option >متصرف</option>
                    <option >وثائقي أمين محفوظات رئيسي</option>
                    <option >وثائقي أمين محفوظات</option>
                    <option >ملحق رئيسي للإدارة</option>
                    <option >محاسب إداري رئيسي</option>
                    <option >محاسب إداري</option>
                    <option >كاتب</option>
                    <option >تقني سامي في السكن والعمران</option>
                    <option >مهندس دولة في السكن والعمران</option>
                    <option >مهندس دولة رئيسي في الإعلام الآلي</option>
                    <option >مهندس دولة في الإعلام الآلي</option>
                    <option >مهندس دولة رئيسي في المخبر والصيانة</option>
                    <option >مهندس دولة في المخبر والصيانة</option>
                    <option >مساعد مهندس دولة في الإعلام الآلي مستوى 01</option>
                    <option >مساعد مهندس دولة في الإعلام الآلي مستوى 02</option>
                    <option >مهندس دولة رئيسي في الإحصاء</option>
                    <option >مهندس دولة في الإحصاء</option>
                    <option >مساعد مهندس دولة في الإحصاء مستوى 01</option>
                    <option >مساعد مهندس دولة في الإحصاء مستوى 02</option>
                    <option >عون أمن ووقاية</option>
                    <option >حاجب</option>
                    <option >سائق</option>
                    <option >عامل مهني</option>
                    <option >عون خدمة</option>
                    <option >مكلف بالتجهيز</option>
                    <option >أمين مخزن</option>
                    <option >مكلف بالمخزن</option>
                    <option >مكلف بالصيانة</option>


                </select> 
</br>
    
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>   	الجهة  </strong></label>
    <div style="display: flex;">
    <select class="form-select" name="rigion" aria-label="Default select example" style="direction:ltr;">
                 <option selected value="0">الجهات</option>
                 <option value="المجلس القضائي">المجلس القضائي</option>
                 <option value="محكمة الجلفة">محكمة الجلفة</option>
                 <option value="محكمة عين وسارة">محكمة عين وسارة</option>
                 <option value="محكمة حاسي بحبح">محكمة حاسي بحبح</option>
                 <option value="محكمة مسعد">محكمة مسعد</option>
                 <option value="محكمة الإدريسية">محكمة الإدريسية</option>
                 <option value="محكمة حد الصحاري">محكمة حد الصحاري</option>
                 <option value="المحكمة التجارية المتخصصة">المحكمة التجارية المتخصصة</option>
              </select>
</br>
    
</div>
  </div>
  <button type="submit" class="btn btn-primary" name="sub1"><strong> تاكيد </strong></button>
  
  </br></br></br>
  <h2>   تحديث في موظفين</h2>
                </br>
                <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>  الاسم </strong></label>
    <select class="form-control select2 select2-hidden-accessible" name="data" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">الموظف</option>
                    <?php  $sql = "SELECT * FROM `preneur`";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		


  ?>
                    <option><?php echo $row['nom_p'];?>__<?php echo $row['prenom_p'];?></option>
                    <?php }} ?>
                </select> 
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>  الرتبة  </strong></label>
    <div style="display: flex;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="grad1" tabindex="-1" aria-hidden="true" >
                    <option selected="selected">الرتبة</option>
                    <option >النائب العام</option>
                    <option >رئيس المجلس</option>
                    <option >نائب عام مساعد</option>
                    <option >رئيس غرفة</option>
                    <option >مستشار</option>
                    <option >أمين عام</option>
                    <option >رئيس المحكمة</option>
                    <option >رئيس المحكمة التجارية</option>
                    <option >وكيل الجمهورية</option>
                    <option >وكيل الجمهورية مساعد</option>
                    <option >قاضي</option>
                    <option >رئيس أمانة الضبط</option>
                    <option >أمين قسم ضبط رئيسي</option>
                    <option >أمين قسم ضبط</option>
                    <option >أمين ضبط</option>
                    <option >معاون أمين ضبط</option>
                    <option >عون أمانة الضبط</option>
                    <option >متصرف مستشار</option>
                    <option >متصرف رئيسي</option>
                    <option >متصرف محلل</option>
                    <option >متصرف</option>
                    <option >وثائقي أمين محفوظات رئيسي</option>
                    <option >وثائقي أمين محفوظات</option>
                    <option >ملحق رئيسي للإدارة</option>
                    <option >محاسب إداري رئيسي</option>
                    <option >محاسب إداري</option>
                    <option >كاتب</option>
                    <option >تقني سامي في السكن والعمران</option>
                    <option >مهندس دولة في السكن والعمران</option>
                    <option >مهندس دولة رئيسي في الإعلام الآلي</option>
                    <option >مهندس دولة في الإعلام الآلي</option>
                    <option >مهندس دولة رئيسي في المخبر والصيانة</option>
                    <option >مهندس دولة في المخبر والصيانة</option>
                    <option >مساعد مهندس دولة في الإعلام الآلي مستوى 01</option>
                    <option >مساعد مهندس دولة في الإعلام الآلي مستوى 02</option>
                    <option >مهندس دولة رئيسي في الإحصاء</option>
                    <option >مهندس دولة في الإحصاء</option>
                    <option >مساعد مهندس دولة في الإحصاء مستوى 01</option>
                    <option >مساعد مهندس دولة في الإحصاء مستوى 02</option>
                    <option >عون أمن ووقاية</option>
                    <option >حاجب</option>
                    <option >سائق</option>
                    <option >عامل مهني</option>
                    <option >عون خدمة</option>
                    <option >مكلف بالتجهيز</option>
                    <option >أمين مخزن</option>
                    <option >مكلف بالمخزن</option>
                    <option >مكلف بالصيانة</option>


                </select> 
</br>
    
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>   	الجهة  </strong></label>
    <div style="display: flex;">
    <select class="form-select" name="rigion1" aria-label="Default select example" style="direction:ltr;">
                 <option selected value="0">الجهات</option>
                 <option value="المجلس القضائي">المجلس القضائي</option>
                 <option value="محكمة الجلفة">محكمة الجلفة</option>
                 <option value="محكمة عين وسارة">محكمة عين وسارة</option>
                 <option value="محكمة حاسي بحبح">محكمة حاسي بحبح</option>
                 <option value="محكمة مسعد">محكمة مسعد</option>
                 <option value="محكمة الإدريسية">محكمة الإدريسية</option>
                 <option value="محكمة حد الصحاري">محكمة حد الصحاري</option>
                 <option value="المحكمة التجارية المتخصصة">المحكمة التجارية المتخصصة</option>
              </select>
</br>
    
</div>
  </div>
  <button type="submit" class="btn btn-primary" name="sub2"><strong> تحديث </strong></button>
  
                </form>
                
                </main>
                
            </div>
        </div>
     

        

        

        
 
        
    </body>
</html>
