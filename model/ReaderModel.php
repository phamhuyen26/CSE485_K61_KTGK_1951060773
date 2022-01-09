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
        public function DeleteReader($ma=null){
            $conn=$this->ConnectionDB();
            $sql="DELETE docgia where madg= {$ma} ";
            $isTrue=mysqli_query($conn,$sql);
            $this->CloseConnect($conn);
            return $isTrue;
        }
        public function update($ma = []) {
            $connection = $this->ConnectionDB();
            $update = "UPDATE docgia 
            SET madg = '{$readerArr['hovaten']}', gioitinh = '{$readerArr['hovaten']}', namsinh = '{$readerArr['namsinh']}', nghenghiep = '{$readerArr['nghenghiep']}', ngaycapthe = '{$readerArr['ngaycapthe']}', ngayhethan = '{$readerArr['ngayhethan']}',diachi = '{$readerArr['diachi']}'  WHERE bd_id = {$bd['bd_id']}";
            $isUpdate = mysqli_query($connection, $queryUpdate);
            $this->CloseConnect($connection);
    
            return $isUpdate;
        }
        public function insert($arr = []) {
            $connection = $this->ConnectionDB();
            $Insert = "INSERT INTO docgia (madg, hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi)
            VALUES ('{$arr['madg']}', '{$arr['hovaten']}', '{$arr['gioitinh']}', '{$arr['namsinh']}', '{$arr['nghenghiep']}', '{$arr['ngaycapthe']}','{$arr['ngayhethan']}','{$arr['diachi']}')";
            $isInsert = mysqli_query($connection, $Insert);
            $this->CloseConnect($connection);
    
            return $isInsert;
        }

    }

?>