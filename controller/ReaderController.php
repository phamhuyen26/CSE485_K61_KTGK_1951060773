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
              //cần gọi đêns usermodel để truy vấn csdl

            //sau đó đổ dữ liệu ra user view
        }
        // function edit(){
        //      echo "hiển thị danh sách người dùng";
        //       //cần gọi đêns usermodel để truy vấn csdl

        //     //sau đó đổ dữ liệu ra user view

        //     if (!isset($_GET['iddg'])) {
        //         header("Location: index.php?controller=reader&action=index");
        //         return;
        //     }
        //     if (!is_numeric($_GET['iddg'])) {
        //         header("Location: index.php?controller=reader&action=index");
        //         return;
        //     }
        //     $iddg = $_GET['iddg'];

        //     $readerModel= new ReaderModel();
        //     $reader=$readerModel->getAllReader($iddg);//kết quả trả về
        //     if (isset($_POST['submit'])) {
        //         $bd_name = $_POST['bd_name'];
        //         //$bd_sex = $_POST['bd_sex'];
        //         $bd_age = $_POST['bd_age'];
        //         $bd_bgroup = $_POST['bd_bgroup'];
        //         $bd_reg_date = $_POST['bd_reg_date'];
        //         $bd_phno = $_POST['bd_phno'];
        //         if(empty($bd_name) || empty($_POST['bd_sex'])|| empty($bd_age) || empty($bd_bgroup) || empty($bd_reg_date) || empty($bd_phno)){
        //             $error = 'Thông tin chưa đầy đủ!';
        //         }
        //         else {
                    
        //             //xử lý update dữ liệu vào hệ thống
        //             $bd_sex = $_POST['bd_sex'];
        //             $bdArr = [
        //                 'bd_id' => $id,
        //                 'bd_name' => $bd_name,
        //                 'bd_sex' => $bd_sex,
        //                 'bd_age' => $bd_age,
        //                 'bd_bgroup' => $bd_bgroup,
        //                 'bd_reg_date' => $bd_reg_date,
        //                 'bd_phno' => $bd_phno,
        //             ];
        //             $isAdd = $bdModal->update($bdArr);
    
        //             if ($isAdd) {
        //                 $TT= "Sửa thành công";
        //             }
        //             else {
        //                 $TT = "Sửa thất bại";
        //             }
        //             header("Location: index.php?controller=blooddonor&action=admin&tt=$TT");
        //             exit();
        //         }
        //     }
        //     require_once 'view/Blooddonor/edit.php';




        // }
        function delete(){
            $id=$_GET(['iddg']);
            if (!is_numeric($id)) {
                header("Location: index.php?controller=reader&action=index");
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
            header("Location: index.php?controller=blooddonor&action=index&error=$error");
              
        }
    }

?>