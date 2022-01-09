<?php
    require_once "config/db.php";

    class ReaderModel{
        private $madg;
        private $hovaten;
        private $gioitinh;
        private $namsinh;
        private $nghenghiep;
        private $ngaycapthe;
        private $ngayhethan;
        private $diachi;
        // định nghĩa các phương thức để thực hiện các thao tác tương ứng với từng action
        public function ConnectionDB(){//phương thức tạo kết nối đến csdl
            $connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
            if(!$connection){
                die("Không thể kết nối đến csdl");
            }
            return $connection;
        }
        public function CloseConnect($connection = null) {
            mysqli_close($connection);
        }
        public function getAllReader(){
            //khởi tạo kết nối
            $conn=$this->ConnectionDB();
            //định nghĩa và thực hiện truy vấn
            $sql="SELECT * FROM docgia";
            $result=mysqli_query($conn,$sql);

            //khai báo biến lấy kết quả trả về dạng mảng
            $arr_Reader=[];
            if(mysqli_num_rows($result)){
                $arr_Reader=mysqli_fetch_all($result,MYSQLI_ASSOC);//MYSQLI_ASSOC trả về kết quả dưới dạng mảng kết hợp
            }
            $this->CloseConnect($conn);
            return $arr_Reader;
        }
        public function DeleteReader($madg=null){
            $conn=$this->ConnectionDB();
            $sql="delete nhanvien where maNV='$manv'";
            $isTrue=mysqli_query($conn,$sql);
            $this->CloseConnect($conn);
            return $isTrue;
        }

    }

?>