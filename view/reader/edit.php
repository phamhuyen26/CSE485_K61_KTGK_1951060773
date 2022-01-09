<?php
    require_once "view/template/header.php";
?>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="post" action="" novalidate>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="madg" name="madg"  class="form-control form-control-lg" />
                    <label class="form-label" for="madg">Mã độc giả</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="hovaten" name="hovaten" class="form-control form-control-lg" />
                    <label class="form-label" for="hovaten">họ và tên</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                  <input type="date" class="form-control form-control-lg" id="namsinh" name="namsinh" >
                    <label for="birthdayDate" class="form-label">Năm sinh</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Giới tính: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gioitinh"
                      id="femaleGender"
                      value="option1"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gioitinh"
                      id="maleGender"
                      value="option2"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" name="diachi" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">địa Chỉ</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="phoneNumber" name="nghenghiep" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Nghề nghiệp</label>
                  </div>

                </div>
              </div>

              <div class="row">
              <div class="col-md-6 mb-4 d-flex align-items-center">

                <div class="form-outline datepicker w-100">
                <input type="date" name="ngaycapthe" class="form-control form-control-lg" id="datetime" >
                <label for="birthdayDate" class="form-label">Ngày cấp thẻ</label>
                </div>

                </div>

                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                  <input type="date" name="ngayhethan" class="form-control form-control-lg" id="datetime" >
                    <label for="birthdayDate" class="form-label">Ngày hết hạn</label>
                  </div>

                </div>
              </div>


              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
    require_once "view/template/footer.php";
?>