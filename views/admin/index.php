<?php
include 'menu.php';
?>
<body >
 
 <div class="row">

     <!-- fix for small devices only -->
     <div class="clearfix hidden-md-up"></div>

     <div class="col-12 col-sm-6 col-md-3">
       <div class="info-box mb-3">
         <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

         <div class="info-box-content">
           <span class="info-box-text">Usuarios Registrados</span>
           <span class="info-box-number">
           <?php
                        $registros1 = mysqli_query($conexion, "SELECT count(*)FROM usuario;");
                        $reg1 = mysqli_fetch_array($registros1);
                        echo $reg1['count(*)'];
                        ?>
           </span>
         </div>
         <!-- /.info-box-content -->
       </div>
       <!-- /.info-box -->
     </div>
     <div class="col-12 col-sm-6 col-md-3">
         <div class="info-box mb-3">
           <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

           <div class="info-box-content">
             <span class="info-box-text">Productos Registrados</span>
             <span class="info-box-number"><?php
                        $registros1 = mysqli_query($conexion, "SELECT count(*)FROM producto;");
                        $reg1 = mysqli_fetch_array($registros1);
                        echo $reg1['count(*)'];
                        ?></span>
           </div>
           <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
       </div>
       <div class="col-12 col-sm-6 col-md-3">
         <div class="info-box mb-3">
           <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

           <div class="info-box-content">
             <span class="info-box-text">Marcas</span>
             <span class="info-box-number"><?php
                        $registros1 = mysqli_query($conexion, "SELECT count(*)FROM marca;");
                        $reg1 = mysqli_fetch_array($registros1);
                        echo $reg1['count(*)'];
                        ?></span>
           </div>
           <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
       </div>
     <!-- /.col -->
     <div class="col-12 col-sm-6 col-md-3">
       <div class="info-box mb-3">
         <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

         <div class="info-box-content">
           <span class="info-box-text">Ventas Totales</span>
           <span class="info-box-number"><?php
                        $registros1 = mysqli_query($conexion, "SELECT count(*)FROM compra;");
                        $reg1 = mysqli_fetch_array($registros1);
                        echo $reg1['count(*)'];
                        ?></span>
         </div>
         <!-- /.info-box-content -->
       </div>
       <!-- /.info-box -->
     </div>
     <!-- /.col -->
   </div>
</body>