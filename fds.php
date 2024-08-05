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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
          
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
                                <script type='text/javascript'>$(document).ready(function() {
$('.select2').select2({
closeOnSelect: false
});
});</script>

        <meta charset="utf-8" />
        <script src='html2pdf/html2pdf.bundle.min.js'></script>
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
            <main class="container" style="direction: rtl;">
            <div class='whater'></div>
                <div class='whater1'></div>

<?php ?>

 <form action="fds.php" method="post">
                
                <h2>   ورقة المخزن </h2>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<select class="form-control select2 select2-hidden-accessible" name="name_prod" style="width: 100%;" tabindex="-1" aria-hidden="true">
<option selected="selected">اسم</option>
                    <?php  $sql = "SELECT * FROM `produit`";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		
  

  ?>
                    <option><?php echo $row["nom_prod"];?></option>
                    <?php }} ?>
                </select>
    
</br>
    
</div>
  </div>
  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i><strong>  بحث </strong></button>
  
  </form>
  <button id="downloadBtn" class="btn btn-primary">ورقة المخزن</button>
  </br>
              
                <?php  
    
         
    if(isset($_POST["year"])&&isset($_POST["name_prod"])){

        $year = $_POST["year"];
        $name_prod =trim($_POST["name_prod"]);
        $table=array();
        $table1=array();

if(empty($_POST["year"])&&!empty($_POST["name_prod"])){
    
    
    
   
    $sql = "SELECT preneur.nom_p ,preneur.prenom_p,preneur.grad_p,preneur.secteur,produit.nom_prod,prondre.date_p,prondre.qnt_p,prondre.rest_p FROM produit JOIN prondre ON produit.id=prondre.id JOIN preneur ON preneur.id_p=prondre.id_p where YEAR(prondre.date_p)=2023  AND produit.nom_prod='$name_prod' ORDER BY  prondre.date_p DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $table[]=array($row["nom_p"], $row["prenom_p"], $row["grad_p"], $row["secteur"], $row["nom_prod"], $row["date_p"], $row["qnt_p"],$row["rest_p"]);
        $table1[]=array($row["date_p"],'',$row["secteur"],'/',$row["qnt_p"],$row["rest_p"],'');


}}
$sql = "SELECT fournisuer.nom_forn,fournisuer.prenom_forn,produit.nom_prod,forni.qnt_prod_f,forni.date_f,forni.pdf_path,forni.rest_f FROM `produit` JOIN forni ON produit.id=forni.id JOIN fournisuer ON forni.id_forn=fournisuer.id_forn where YEAR(forni.date_f)=2023 AND produit.nom_prod='$name_prod' ORDER BY forni.date_f DESC";
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $table[]=array($row["nom_forn"],$row["prenom_forn"],"/","/", $row["nom_prod"], $row["date_f"], $row["qnt_prod_f"],$row["rest_f"]);
     $table1[]=array($row["date_f"],'','المخزن',$row["qnt_prod_f"],'/',$row["rest_f"],'');

}}
//print_r($table);
$column = array();
foreach ($table as $key => $row) {
    $column[$key] = $row[5];
}
array_multisort($column, SORT_ASC, $table);

/////
$column1 = array();
foreach ($table1 as $key => $row) {
    $column1[$key] = $row[0];
}
array_multisort($column1, SORT_ASC, $table1);
////

}



if(!empty($_POST["year"])&&!empty($_POST["name_prod"])){
    
    $sql = "SELECT preneur.nom_p ,preneur.prenom_p,preneur.grad_p,preneur.secteur,produit.nom_prod,prondre.date_p,prondre.qnt_p ,prondre.rest_p FROM produit JOIN prondre ON produit.id=prondre.id JOIN preneur ON preneur.id_p=prondre.id_p where YEAR(prondre.date_p)=$year  AND produit.nom_prod='$name_prod' ORDER BY  prondre.date_p DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $table[]=array($row["nom_p"], $row["prenom_p"], $row["grad_p"], $row["secteur"], $row["nom_prod"], $row["date_p"], $row["qnt_p"],$row["rest_p"]);
        $table1[]=array($row["date_p"],'',$row["secteur"],'/',$row["qnt_p"],$row["rest_p"],'');


}}
$sql = "SELECT fournisuer.nom_forn,produit.nom_prod,forni.qnt_prod_f,forni.date_f,forni.pdf_path,forni.rest_f FROM `produit` JOIN forni ON produit.id=forni.id JOIN fournisuer ON forni.id_forn=fournisuer.id_forn where YEAR(forni.date_f)=$year AND produit.nom_prod='$name_prod' ORDER BY forni.date_f DESC";
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $table[]=array($row["nom_forn"],"/","/","/", $row["nom_prod"], $row["date_f"], $row["qnt_prod_f"],$row["rest_f"]);
     $table1[]=array($row["date_f"],'','المخزن',$row["qnt_prod_f"],'/',$row["rest_f"],'');

}}
//print_r($table);
$column = array();
foreach ($table as $key => $row) {
    $column[$key] = $row[5];
}
array_multisort($column, SORT_ASC, $table);


/////
$column1 = array();
foreach ($table1 as $key => $row) {
    $column1[$key] = $row[0];
}
array_multisort($column1, SORT_ASC, $table1);
////


}       


////////////////////////////////////////////
   ?> 
   </br>
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
    <th scope="col">باقي</th>

    </tr>
</thead>
<tbody>
<?php   

                
                
//////////////////////////////////////////   
  for ($i = 0; $i < count($table); $i++) {           
                ?>
                    <tr>
                    <th scope="row">1</th>
                    <?php  for ($j = 0; $j < count($table[$i]); $j++) { ?>


                    <?php if($table[$i][2]=="/"){ ?>
                    <td style="color:#00c853;  font-weight: bold;" ><?php echo $table[$i][$j]; ?></td>
                    <?php }else{ ?>

                    <td style="color:#e53935;  font-weight: bold;"><?php echo $table[$i][$j]; ?></td>
                    
                    <?php }} ?>
                    
                    </tr>
                    <?php
}
                                        
    
                     ?>
                </tbody>
                </table>

</br>


<div style='display:none;'>
                <div class="content" id="content" style=' direction: rtl; margin-right: 20px;margin-top: 10px;'>
<p style='text-align: center; font-size: large; '> الجمهورية الجزائرية الديمقراطية الشعبية</p>
        
              <p style=' font-size: large; '>  وزارة العدل</p>
              <p style=' font-size: large; '>  مجلس قضاء الجلفة</p>
              
              <h1 style='text-align: center; '>ورقة المخزن</h1>
              </br></br>

              <div style='display: flex;'>
              
              
              <p style='text-align: center;font-size: large;flex-grow: 5; '><span>:السنة</span> <span><?php if($_POST["year"]==''){echo '2023';}else{echo $_POST["year"];}?></span></p>
              <p style='text-align: center;font-size: large;flex-grow: 5; '><span>:المنتج</span><span><?php echo $_POST["name_prod"];?></span></p>
              </div>


<table style="width:100%;border: 1px solid black;border-collapse: collapse;">
  <tr>
    <th style='border: 1px solid black;border-collapse: collapse;width: 100px;text-align: center;'>التاريخ</th>
    <th style='border: 1px solid black;border-collapse: collapse;width: 100px;text-align: center;'>رقم وصل الدخول و الخروج</th> 
    <th style='border: 1px solid black;border-collapse: collapse;text-align: center;'>الحركة</th>
    <th style='border: 1px solid black;border-collapse: collapse;text-align: center;'>كمية الدخول</th>
    <th style='border: 1px solid black;border-collapse: collapse;text-align: center;'>كمية الخروج</th>
    <th style='border: 1px solid black;border-collapse: collapse;text-align: center;'>المخزون</th>
    <th style='border: 1px solid black;border-collapse: collapse;width: 200px;text-align: center;'>الملاحظات</th>
    
  </tr>
  <tr>
    
    <?php
  for ($i = 0; $i < count($table1); $i++) {           
                ?>
                    <tr>
                    <?php  for ($j = 0; $j < count($table1[$i]); $j++) { ?>


                    <?php if($table1[$i][2]=="/"){ ?>
                    <td style="border: 1px solid black;border-collapse: collapse;text-align: center;" ><?php echo $table1[$i][$j]; ?></td>
                    <?php }else{ ?>

                    <td style="border: 1px solid black;border-collapse: collapse;text-align: center;"><?php echo $table1[$i][$j]; ?></td>
                    
                    <?php }} ?>
                    
                    </tr>
                    <?php

}                                  
    
                     ?>
  </tr>
  
</table>


</div>
</div>

<script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            html2pdf().from(document.getElementById('content')).save();
        });
    </script>

<?php
}
                                  
    
                     ?>


               


                
                
                
                
                </main>
                
            </div>
        </div>

        

     

        

        
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
       
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
