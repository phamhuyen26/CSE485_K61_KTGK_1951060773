<!-- echo "Xin Chào!"; -->
<?php
    require_once "model/ReaderModel.php";
    class ReaderController{
        function index(){
            // echo "hiển thị danh sách người dùng";
            $readerModel= new ReaderModel();
            $reader_arr=$readerModel->getAllReader();//kết quả trả về
            //cần gọi đêns usermodel để truy vấn csdl
            require_once "view/reader/index.php";
            //sau đó đổ dữ liệu ra user view
        }
        function chitiet(){
            // echo "hiển thị danh sách người dùng";
            $readerModel= new ReaderModel();
            $reader_arr=$readerModel->getAllReader();//kết quả trả về
            //cần gọi đêns usermodel để truy vấn csdl
            require_once "view/reader/chitiet.php";
            //sau đó đổ dữ liệu ra user view
        }
        function add(){
            if (!isset($_GET['iddg'])) {
                header("Location: index.php?controller=reader&action=index");
                return;
            }
            if (!is_numeric($_GET['iddg'])) {
                header("Location: index.php?controller=reader&action=index");
                return;
            }
            $iddg = $_GET['iddg'];
                $readerModel= new ReaderModel();
            $reader=$readerModel->update($iddg);//kết quả trả về
            if (isset($_POST['submit'])) {
               
                
                $hovaten = $_POST['hovaten'];
                $namsinh = $_POST['namsinh'];
                $nghenghiep = $_POST['nghenghiep'];
                $ngaycapthe = $_POST['ngaycapthe'];
                $ngayhethan = $_POST['ngayhethan'];
                $diachi = $_POST['diachi'];
                $gioitinh = $_POST['gioitinh'];
                if(empty($hovaten) || empty($namsinh)|| empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan) || empty($diachi)){
                    $error = 'Thông tin chưa đầy đủ!';
                }
                else {
                    //xử lý update dữ liệu vào hệ thống
                    $gioitinh = $_POST['gioitinh'];
                    $readerArr = [
                        'iddg' => $iddg,
                        'hovaten' => $hovaten,
                        'namsinh' => $namsinh,
                        'nghenghiep' => $nghenghiep,
                        'ngaycapthe' => $ngaycapthe,
                        'ngayhethan' => $ngayhethan,
                        'diachi' => $diachi,
                    ];
                    $isAdd = $bdModal->insert($bdArr);
    
                    if ($isAdd) {
                        $erro= "Sửa thành công";
                    }
                    else {
                        $erro = "Sửa thất bại";
                    }
                    header("Location: index.php?controller=reader&action=chitiet&error=erro");
                    exit();
                }
            }
            require_once 'view/reader/edit.php?error=$error';
            require_once "view/reader/add.php";
        }
        function edit(){
            if (!isset($_GET['iddg'])) {
                header("Location: index.php?controller=reader&action=index");
                return;
            }
            if (!is_numeric($_GET['iddg'])) {
                header("Location: index.php?controller=reader&action=index");
                return;
            }
            $iddg = $_GET['iddg'];
                $readerModel= new ReaderModel();
            $reader=$readerModel->update($iddg);//kết quả trả về
            if (isset($_POST['submit'])) {
               
                
                $hovaten = $_POST['hovaten'];
                $namsinh = $_POST['namsinh'];
                $nghenghiep = $_POST['nghenghiep'];
                $ngaycapthe = $_POST['ngaycapthe'];
                $ngayhethan = $_POST['ngayhethan'];
                $diachi = $_POST['diachi'];
                $gioitinh = $_POST['gioitinh'];
                if(empty($hovaten) || empty($namsinh)|| empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan) || empty($diachi)){
                    $error = 'Thông tin chưa đầy đủ!';
                }
                else {
                    //xử lý update dữ liệu vào hệ thống
                    $gioitinh = $_POST['gioitinh'];
                    $readerArr = [
                        'iddg' => $iddg,
                        'hovaten' => $hovaten,
                        'namsinh' => $namsinh,
                        'nghenghiep' => $nghenghiep,
                        'ngaycapthe' => $ngaycapthe,
                        'ngayhethan' => $ngayhethan,
                        'diachi' => $diachi,
                    ];
                    $isAdd = $bdModal->update($bdArr);
    
                    if ($isAdd) {
                        $erro= "Sửa thành công";
                    }
                    else {
                        $erro = "Sửa thất bại";
                    }
                    header("Location: index.php?controller=reader&action=chitiet&error=erro");
                    exit();
                }
            }
            require_once 'view/reader/edit.php?error=$error';

        }

       
        function delete(){
            $id= $_GET(['iddg']);
            
            if (!is_numeric($id)) {
                header("Location: index.php?controller=reader&action=chitiet");
                exit();
            }
            $readerModel= new ReaderModel();
            $isdelete=$readerModel->DeleteReader($id);//kết quả trả về
            //cần gọi đêns usermodel để truy vấn csdl
            if($isdelete){
                $error="Xóa thành công!";
            }
            else{
                $error="Xóa Thất bại!";
            }
            header("Location: index.php?controller=reader&action=delete&error=$error");
              
        }
    }

?>