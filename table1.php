<?php
header('Content-Type: text/html; charset=utf-8');
include 'conection.php';
$conn->set_charset("utf8");



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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
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
            <div id="layoutSidenav_content" style="direction: rtl;">

                <main class="container">
<!-- entre sorti de  produit de magasin ! --------------------------------------------------------->
        <?php
      if (isset($_POST["sub"])) {
        if($_POST["forn_name"]!="المورد"){

          $pdf_file = $_FILES['pdf_file'];
          $pdf_name = $pdf_file['name'];
          $pdf_name = str_replace(" ", "", $pdf_name);
          $bol_name_f= false;


          if($pdf_name!=''){
/////////////////////////////////id forni
$sql = "SELECT * FROM `forni` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
  if($row['pdf_name']==$pdf_name){ $bol_name_f= true ; }
  

}
}

if($bol_name_f == false){ 
  
/////////////////////////////////////
$array = explode("__", $_POST["forn_name"]);
                        
                        
                        
          
          $forn_name =trim($array[0]);
          //////////////////////////////////////////////idforn
  $sql = "SELECT `id_forn` FROM `fournisuer` WHERE nom_forn='$forn_name'";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		
  $id_forn= $row['id_forn'];

}


}else{
  $sql = "INSERT INTO fournisuer  (nom_forn) VALUES ('$forn_name')";
  if (mysqli_query($conn, $sql)) {
   // echo "forn inserted";

  }
}
////////////////////////////////////////////////

        
        
        


      
         if (isset($_POST["data"])) {
          $cont_prod=1;

            foreach ($_POST['data'] as $row) {

              if (!empty($row['qnt'])&&!empty($row['name'])){
              $qnt = $row['qnt'];
              $name = trim($row['name']);
             // echo $name;
              //echo $qnt;

                if(!empty($_POST["forn_name"])){
///////////////////////////////////////
                  $forn_name =$_POST["forn_name"];

////////////////////////////////////////////////
$sql = "SELECT * FROM `produit` WHERE nom_prod='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
  
$id_prod= $row['id'];
$qnt_prod= $row['qnt_prod'];

}



///////////////////////////upload fil   
  //////////////////////////////////////////////idforn
  $sql = "SELECT `id_forn` FROM `fournisuer` WHERE nom_forn='$forn_name'";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		
  $id_forn= $row['id_forn'];

}


}

$upload_dir = 'uploads/';
if (!file_exists($upload_dir)) {
    mkdir($upload_dir);
}
$pdf_file = $_FILES['pdf_file'];
$pdf_name = trim($pdf_file['name']);
$pdf_name = str_replace(" ", "", $pdf_name);
$pdf_tmp_name = $pdf_file['tmp_name'];







/////////////////////////////////id forni
$sql = "SELECT * FROM `forni` WHERE id_forn=$id_forn AND id=$id_prod";
$result = mysqli_query($conn, $sql);

$id_forni =mysqli_num_rows($result);
//echo $id_forni;
  
/////////////////////////////////////
$current_datetime = date('Y-m-d H:i:s');
//echo $id_forn;
//echo $id_prod;
$sql = "INSERT INTO `forni`(`id_forn`, `id`, `qnt_prod_f`, `date_f`,`id_forni`,pdf_name, pdf_path,rest_f) VALUES ($id_forn,$id_prod ,$qnt ,'$current_datetime',$id_forni+1,'$pdf_name', '$upload_dir$pdf_name',$qnt_prod+$qnt)";
              if (mysqli_query($conn, $sql)) {
                //echo "fornri inserted";
                move_uploaded_file($pdf_tmp_name, $upload_dir . $pdf_name);
                


              
 ///////////////////////////////////     
 $sql = "UPDATE `produit` SET `qnt_prod`=$qnt_prod+$qnt WHERE id=$id_prod";
              if (mysqli_query($conn, $sql)) {
                //echo "update prod";
                ?>
          <div class="alert alert-success" style="text-align: center;">
          <strong>
          منتج  <?php echo $cont_prod;
            $cont_prod =$cont_prod+1;?>تمت عملية بنجاح  
      </strong>
        </div><?php


              }else {
                echo "Error inserting data: " . $conn->error;
            }  
          }else {
            echo "Error inserting data: " . $conn->error;
        }    
        $cont_prod =$cont_prod+1;

 
/////////////////////////////
      }else{?>
        <div class="alert alert-danger" style="text-align: center;">
  <strong>
      منتج  <?php echo $cont_prod;
      $cont_prod =$cont_prod+1;?>غير  موجود 
</strong>
</div><?php }


            }

            }else{?>
              <div class="alert alert-danger" style="text-align: center;">
        <strong>
            منتج  <?php echo $cont_prod;
            $cont_prod =$cont_prod+1;?>غير كامل المعلومات 
    </strong>
      </div><?php }

            }

            $current_date = date('Y-m-d');
            //echo $current_date;
            //echo $_POST["forn_name"];
        }else{?>
              <div class="alert alert-danger" style="text-align: center;">
              <strong>
              منتجات غير موجودة
          </strong>
      
      </div><?php }
}else{?>
  <div class="alert alert-danger" style="text-align: center;">
  <strong>
    ملف الفاتورة موجود
</strong>
</div><?php }

        }else{?>
          <div class="alert alert-danger" style="text-align: center;">
          <strong>
           ادخل ملف الفاتورة 
      </strong>
        </div><?php } 
     }else{?>
      <div class="alert alert-danger" style="text-align: center;">
      <strong>
       ادخل اسم المورد 
  </strong>
    </div><?php } 

    }

        
        ?>
                  

<form action="tables .php" method="post" enctype="multipart/form-data">



                    <div class="container-fluid px-4">
                        <h1 class="mt-4">  ادخال الى مخزن</h1>
</br>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong> اسم المورد </strong></label>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />


<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" name="forn_name" aria-hidden="true">
                    <option selected="selected">المورد</option>
                    <?php  $sql = "SELECT * FROM `fournisuer`";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		
  $id_forn= $row['id_forn'];

  ?>
                    <option><?php echo $row['nom_forn'];?>__<?php echo $row['prenom_forn'];?>__<?php echo $row['nom_entr'];?></option>
                    <?php }} ?>
                    
                </select> 


    <div id="emailHelp" class="form-text"></div>
  </div>
  <label for="exampleInputEmail1" class="form-label"><strong>    المنتجات المدخلة <strong>   </label>
  </br>
<table class="table table-bordered"style="direction: rtl;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم المنتجات</th>
      <th scope="col">كمية المنتجات</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
      <select class="form-control select2 select2-hidden-accessible " style="width: 100%;  height: 100%;" name="data[0][name]" tabindex="-1" name="forn_name" aria-hidden="true">
                    <option selected="selected">اسم</option>
                    <?php  $sql = "SELECT * FROM `produit`";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {
		
  

  ?>
                    <option><?php echo $row["nom_prod"];?></option>
                    <?php }} ?>
                    
                </select> </td>
      <td><input type="number" class="form-control" name="data[0][qnt]" style="direction: rtl;"  placeholder="كمية" valeu="0"></td>
      
    </tr>
    
    
    
  </tbody>
</table>












<script>
  var a =1
  function addRow() {
    
    
    // Find the table body
    var tableBody = document.querySelector("tbody");

    // Create a new table row
    var newRow = document.createElement("tr");

    // Create three new table data cells
    var newCell1 = document.createElement("td");
    var newCell2 = document.createElement("td");
    var newCell3 = document.createElement("td");
    var newCell4 = document.createElement("td");
    

    // Set the content of the new cells
    newCell1.innerHTML = a+1
    

    newCell2.innerHTML = '<select class="form-control select2 select2-hidden-accessible " style="width: 100%;  height: 100%;" name="data[0][name]" tabindex="-1" name="forn_name" aria-hidden="true"> <option selected="selected">اسم</option><?php  $sql = "SELECT * FROM `produit`"; $result = mysqli_query($conn, $sql);if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) {?><option><?php echo $row["nom_prod"];?></option><?php }} ?>
                    </select> ';
    newCell3.innerHTML = '<input type="number" class="form-control"name="data['+a+'][qnt]" style="direction: rtl;"  placeholder="كمية">';
    newCell4.innerHTML = '<button type="button" class="btn btn-danger" onclick="deleteRow(this)">حذف</button>';

    // Append the new cells to the new row
    newRow.appendChild(newCell1);
    newRow.appendChild(newCell2);
    newRow.appendChild(newCell3);
    newRow.appendChild(newCell4);

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











<div><button type="button" class="btn btn-success" onclick="addRow()"> زيادة منتج</button></div>
</br>
<h5 for="exampleInputEmail1" class="form-label"><strong> ادخال ملف الفاتورة </strong></h5>
</br>
<div><input type="file" class="form-control form-control-lg"  id="formFileLg" name="pdf_file"></div>

</br>
<button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
        <button type="submit" name="sub" class="btn btn-primary">تاكيد</button>
        
                        </div>
                        
                    </div>
                    

</form>
                </main>


                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
