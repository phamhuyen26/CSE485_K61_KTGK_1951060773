<?php
    require_once "view/template/header.php";
?>




    <div class="text-center mt-5 mx-5">
        <h2>Reader Table</h2>
        <p class="fs-3">Danh sách độc giả</p>
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

        </tr>
      </thead>
      <tbody>
        <?php
           foreach($reader_arr as $reader){
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

   
    
    
  