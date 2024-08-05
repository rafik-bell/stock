<?php
header('Content-Type: text/html; charset=utf-8');
include 'conection.php';
$conn->set_charset("utf8");
$oki=false;


?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
       
   

       #pdf-content{
           font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
       }
               table, th, td {
                 border: 1px solid black;
                 border-collapse: collapse;
                 text-align: center;
                  direction: rtl;
         
               }
               </style>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js'></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Charts - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">تسجيل خروج<i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
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
                        <div class="small">Logged in as:</div>
                        Start Bootstrap  
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main class="container">
<!-- entre sorti de  produit de magasin ! --------------------------------------------------------->
<?php
if (isset($_POST["sub"])) {
    //echo $_POST['data'][0]['qnt'];
    $myMatrix = array();
    if (!empty($_POST["cat"])) {
        if (isset($_POST["data2"])) {





                    
            if ($_POST["data2"]!="المستفيد"){
                $array = explode("__", $_POST["data2"]);
                    $name_p= trim($array[0]);
                    $prenom=trim($array[1]);
                    $grade=trim($array[2]);
                    $rigion=trim($array[3]);


//////////////////table de produit/////////
if (isset($_POST["data"])) {
    $cont_prod=1;

    foreach ($_POST['data'] as $row) {
        if (!empty($row['qnt'])&&!empty($row['name'])&&!empty($row['comnt'])){
            $qnt = $row['qnt'];
            $name = trim($row['name']);
            $comnt =trim($row['comnt']);
            

/////////////////////////////id prod
$cat=$_POST["cat"];
$sql = "SELECT * FROM `produit` WHERE nom_prod='$name' AND cat_prod='$cat'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
  
$id_prod= $row['id'];
$qnt_prod= $row['qnt_prod'];


}
///////////////////////qnt prod
if($qnt_prod-$qnt>0){
/////////////
$myMatrix[] = array($name,$qnt,$comnt);
//print_r($myMatrix);
////////////////////////////////////insert proneur
$sql = "SELECT * FROM `preneur` WHERE nom_p='$name_p' AND prenom_p='$prenom' AND grad_p='$grade' AND secteur='$rigion'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
      
$id_p= $row['id_p'];
//echo "exsiste";

}}else{
  
  $sql = "INSERT INTO `preneur`( `nom_p`, `prenom_p`, `grad_p`, `secteur`) VALUES ('$name_p','$prenom','$grade','$rigion')";
  if (mysqli_query($conn, $sql)) {
      //echo "proneure inserted";
      

  }else {
      echo "Error inserting data: " . $conn->error;
  }


}
/////////////////////////////////
///////////////////////////id preneur
$sql = "SELECT * FROM `preneur` WHERE nom_p='$name_p' AND prenom_p='$prenom'AND grad_p='$grade' AND secteur='$rigion' ";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		
  $id_p= $row['id_p'];

}


}
///////////////////////////// fin id proneur


///////////////////////////fin id 


//////////////////////////id prondre
$cat=$_POST["cat"];
$sql = "SELECT * FROM `prondre` where id_p=$id_p AND id=$id_prod ";
$result = mysqli_query($conn, $sql);

$id_prondre =mysqli_num_rows($result);
  








/////////////////////////fin id prondre

///////////////////////////insert prondre 
$current_datetime = date('Y-m-d H:i:s');
$sql = "INSERT INTO `prondre`(`id_p`, `id`, `date_p`, `qnt_p`, `cat_p`, `id_proneur`,`rest_p`) VALUES ($id_p,$id_prod,'$current_datetime',$qnt,'$cat',$id_prondre+1,$qnt_prod-$qnt)";
              if (mysqli_query($conn, $sql)) {
                //echo "prondre inserted";
                ///////////////////////////update prode
$sql = "UPDATE `produit` SET `qnt_prod`=$qnt_prod-$qnt WHERE id=$id_prod";
              if (mysqli_query($conn, $sql)) {
               // echo "update prod";
                ?>
          <div class="alert alert-success" style="text-align: center;">
          <strong>
          منتج  <?php echo $cont_prod;
            $cont_prod =$cont_prod+1;?>تمت عملية بنجاح  
      </strong>
        </div><?php

                $oki=true;
                

              }else {
                echo "Error inserting data: " . $conn->error;
               
            }    
/////////////////////////fin apdate prod

              }else {
                echo "Error inserting data: " . $conn->error;
            }

///////////////////////////fin insert prondre


        }else{
            ?>
            <div class="alert alert-danger" style="text-align: center;">
            <strong>
                   منتج<?php echo $cont_prod;
            $cont_prod =$cont_prod+1;?> نفذ   
        </strong>
          </div><?php        }

///////////////////////////////////

        }else{
            ?>
            <div class="alert alert-danger" style="text-align: center;">
            <strong>
                  نوع منتج<?php echo $cont_prod;
            $cont_prod =$cont_prod+1;?> خاطئ   
        </strong>
          </div><?php        }



    }else{?>
        <div class="alert alert-danger" style="text-align: center;">
        <strong>
            منتج  <?php echo $cont_prod;
            $cont_prod =$cont_prod+1;?>غير كامل المعلومات 
    </strong>
      </div><?php }
}
if($oki==true){
?><div id='pdf-content'>
                <div style='padding-left:10%;padding-right: 10%;padding-top: 5%;'>
               <p style='text-align: center; font-size: large; '> الجمهورية الجزائرية الديمقراطية الشعبية
            </br>
        
                وزارة العدل</p>
            </br><div style='display: flex;width: 100%;'>
            
        
             <p style='font-size: large ; width: 50%;'>: الجلفة
            </br>  
            <span>: رقم </span></p>
        </br>
        <p style='text-align: right; font-size: large;width: 50%;'>
            مجلس قضاء الجلفة
        </br>
            الامانة العامة
        </br>
            مصلحة الوسائل العامة 
        </br>
            المخزن</p>
        </div>
               <p style='text-align: center; font-size: 30px; '> : الاخذ على عاتق الخاص بـ<?php echo $cat; ?></p>
            </br> <p style='text-align: right; font-size: large;'> : المستفيد </p>
        
        
               <table style='width:100%; border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;' >
                <tr style='height: 30px;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;' >
                  <th style='width: 34%;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>الاسم واللقب</th>
                  <th style='width: 33%;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>الرتبة</th> 
                  <th style='width: 30%;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>الجهة</th>
                </tr>
                <tr style='height: 30px;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>
                  <td style='border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'><?php echo $name_p.' '. $prenom; ?></td>
                  <td style='border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'><?php echo $grade; ?></td>
                  <td style='border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'><?php echo $rigion; ?></td>
                </tr>
              </table>
              <p style='text-align: right; font-size: large;'> اللوازم</p> 
              <table style='width:100%; border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>
                <tr style='height: 30px;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>
                  <th style='width: 10%;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>الرقم</th>
                  <th style='width: 40%;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;' >التعين</th> 
                  <th style='width: 10%;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>الكمية</th>
                  <th style='width: 40%;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>الملاحظة</th>
                </tr>
                
              <?php  for ($i = 0; $i < count($myMatrix); $i++) {

                ?> <tr style='height: 30px;border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'>  
                <td style='border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;' ><?php echo $i+1; ?></td> <?php
    for ($j = 0; $j < count($myMatrix[$i]); $j++) { ?>
    
                
               
                  
                  <td style='border: 1px solid black;border-collapse: collapse; text-align: center; direction: rtl;'><?php echo $myMatrix[$i][$j]; ?></td>
                  <?php } ?>
                  
    </tr>  
                
                <?php } ?>
                
              </table>
            </br>
              <div style='display: flex;padding-left: 20%;font-size: large'>
              <p style='width: 30%;'> الامين العام</p>
              <p style='width: 33%;'>المستفيد</p> 
                  <p style='width: 34%;'>امين المخزن</p>
                  
        </div> 
              
               
            </div>
            </div>
                
            <button id='generate-pdf'>تنزيل الملف</button>
                
                
                
                <?php }


}   

                
///////////////////////////////fin table de produit///////////            
                    }else{?>
                        <div class="alert alert-danger" style="text-align: center;">
                        <strong>
                          ادخل معلومات المستفيد 
                    </strong>
                      </div><?php }
                
        }
    }else{?>
        <div class="alert alert-danger" style="text-align: center;">
        <strong>
          ادخل نوع المنتج
    </strong>
      </div><?php }
}

///$current_datetime = date('Y-m-d H:i:s');
//echo $current_datetime;
      ?>


<form action="charts.php" method="post">


                    <div class="container-fluid px-4" style="direction: rtl;">
                        <h1 class="mt-4"> اخذ على عاتق</h1>
</br>
</br>
<label for="exampleInputEmail1" class="form-label"><strong>   اخذ علئ عاتق الخاص <strong>   </label>
<select class="form-select" name="cat" aria-label="Default select example">
                 <option selected value="0">انواع اخذ على عاتق</option>
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
</br>
<label for="exampleInputEmail1" class="form-label"><strong>     المستفيد   <strong>   </label>
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<select class="form-control select2 select2-hidden-accessible" name="data2" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">المستفيد</option>
                    <?php  $sql = "SELECT * FROM `preneur`";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		


  ?>
                    <option><?php echo $row['nom_p'];?>__<?php echo $row['prenom_p'];?>__<?php echo $row['grad_p'];?>__<?php echo $row['secteur'];?></option>
                    <?php }} ?>
                </select> 


                    <label for="exampleInputEmail1" class="form-label"><strong>    المنتجات المدخلة <strong>   </label>
                    </br>
                    <table class="table table-bordered  border-primary"style="direction: rtl;">
                    <thead>
                        <tr>
                        <th scope="col">رقم</th>
                        <th scope="col">اسم المنتجات</th>
                        <th scope="col">كمية المنتجات</th>
                        <th scope="col">ملاحظة</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <tr>
                        <th scope="row">1</th>
                        <td><select class="form-control select2 select2-hidden-accessible " style="width: 100%;  height: 100%;" name="data[0][name]" tabindex="-1" name="forn_name" aria-hidden="true">
                    <option selected="selected">اسم</option>
                    <?php  $sql = "SELECT * FROM `produit`";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		
  

  ?>
                    <option><?php echo $row["nom_prod"];?></option>
                    <?php }} ?>
                    
                </select></td>
                        <td><input type="number" class="form-control" name="data[0][qnt]" style="direction: rtl;"  placeholder="كمية" valeu="0"></td>
                        <td><input type="text" class="form-control" name="data[0][comnt]" style="direction: rtl;"  placeholder="ملاحظة" valeu="0"></td>
                        </tr>
                        <tr>
                        
                        
                        
                        
                        
                    </tbody>
                    <table><script>
  var a =1
  function addRow() {
    
    // Find the table body
    var tableBody = document.getElementById("table-body");

    // Create a new table row
    var newRow = document.createElement("tr");

    // Create three new table data cells
    var newCell1 = document.createElement("td");
    var newCell2 = document.createElement("td");
    var newCell3 = document.createElement("td");
    var newCell4 = document.createElement("td");
    var newCell5 = document.createElement("td");

    // Set the content of the new cells
    newCell1.innerHTML = a+1
    newCell2.innerHTML = '<input type="text" class="form-control" name="data['+a+'][name]" style="direction: rtl;"  placeholder="اسم">';
    newCell3.innerHTML = '<input type="number" class="form-control"name="data['+a+'][qnt]" style="direction: rtl;"  placeholder="كمية">';
    newCell4.innerHTML = '<input type="text" class="form-control" name="data['+a+'][comnt]" style="direction: rtl;"  placeholder="ملاحظة" valeu="0">';
    newCell5.innerHTML = '<button type="button" class="btn btn-danger" onclick="deleteRow(this)">حذف</button>';

    // Append the new cells to the new row
    newRow.appendChild(newCell1);
    newRow.appendChild(newCell2);
    newRow.appendChild(newCell3);
    newRow.appendChild(newCell4);
    newRow.appendChild(newCell5);

    // Append the new row to the table body
    tableBody.appendChild(newRow);
    a=a+1
  }
</script>
<script>
  function deleteRow(button) {
    a=a-1
    // Find the row to delete
    var row = button.closest("tr");

    // Remove the row from the table
    row.parentNode.removeChild(row);
  }
</script>











<div><button type="button"  class="btn btn-success" onclick="addRow()"> زيادة منتج</button></div>
</br>
<button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
        <button type="submit" name="sub" class="btn btn-primary">تاكيد</button>
        
                        </div>
                        
                    </div>
                       
                  
</form>
                </main>
                
            </div>
        </div>
        <script>
        document.getElementById('generate-pdf').addEventListener('click', function() {
            html2pdf().from(document.getElementById('pdf-content')).save();
        });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
