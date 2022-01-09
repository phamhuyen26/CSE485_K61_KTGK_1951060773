<?php
    require_once "view/template/header.php";
?>




    <div class="text-center mt-5 mx-5">
        <h2>Reader Table</h2>
        <p class="fs-3">Danh sách độc giả</p>
        <p class="">
                <?php
                    // echo $_GET['error'];
                ?>
        </p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>madg</th>
          <th>hovaten</th>
          <th>gioitinh</th>
          <th>namsinh</th>
          <th>nghenghiep</th>
          <th>ngaycapthe</th>
          <th>ngayhethan</th>
          <th>diachi</th>
          <th>Sửa</th>
          <th>Xóa</th>
          

        </tr>
      </thead>
      <tbody>
        <?php
           foreach($reader_arr as $reader){
            $Edit = "//localhost/BKTGK_1951060773/index.php/?controller=reader&action=edit&iddg=" . $reader['madg'];
            $Delete ="//localhost/BKTGK_1951060773/index.php/?controller=reader&action=delete&iddg=" . $reader['madg'];
        ?>
        <tr>
          <td scope="row"><?php echo $reader['madg'] ?></td>
          <td><?php echo $reader['hovaten'] ?></td>
          <td><?php echo $reader['gioitinh'] ?></td>
          <td><?php echo $reader['namsinh'] ?></td>
          <td><?php echo $reader['nghenghiep'] ?></td>
          <td><?php echo $reader['ngaycapthe'] ?></td>
          <td><?php echo $reader['ngayhethan'] ?></td>
          <td><?php echo $reader['diachi'] ?></td>
          
          <td><a href="<?php echo $Edit ?>"><i class="bi bi-pencil-square"></i></a></td>
          <td><a href="<?php echo $Delete ?>"><i class="bi bi-trash"></i></a></td>
                            

        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    </div>


<?php
    require_once "view/template/footer.php";
?>

   
    
    
  