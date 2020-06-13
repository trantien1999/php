	<?php
	
	// cách để comment trong php
	
	class Hinhanh {
		// tạo ra các thuộc tính của class Hinhanh
		// chỉ ra tính chất của class
		// dùng từ khóa public trước tên thuộc tính để khai báo giới hạn truy cập cho tên thuộc tính 
		
		public $src;
		
		public $alt;
		
		public $width;
		
		public $height;
		
		public $id;
		
		public $class;
		
		// phương thức khởi tạo class
		// chú ý __ là 2 dấu _ liên tiếp
		// phương thức khởi tạo class được tự động gọi 
		//khi chúng ta khởi toa jdodois tượng từ class bằng từ khóa new
		public function __ construct($src_param,$alt_param, $width_param, 
									 $height_param, $id_param, $class_param){
		
			//bên trong hàm khởi tạo 
			// truyền các giá trị của các tham số cho các thuộc tính class
			$this->arc = $src_param;
			$this->alt= $alt_param;
			$this->width = $width_param;
			$this->height = $height_param;
			$this->id = $id_param;
			$this->class = $class_param;
		}
		
		// tạo ra phương thức trong class
		// giống hàm function trong php
		// sử dụng từ khóa public khai báo giới hạn truy cập trước tên của phương thức
		// phương thức trong class thường dùng để tạo 1 hành động cho đối tượng 
		
		public function html(){
			//đưa các thuộc tính của classs Hinhanh vào trong phương thức html
			// để truy cập vào thuộc tính trong class ở trong nội bộ
			// phương thức của nó thì sử dụng $this->ten thuộc tính
			//this->src 
			$html = "<img src='$this->src' alt= '$this->alt' width='$this->width' height='$this->height' id='...' class=''/>";
			
						
			return $html;
		}
		
	} //dấu ngoặc là kết thúc của class Hinhanh




// tạo ra đối tượng object từ class Hinhanh
$img1= newHinhanh('https://salt.tikicdn.com/cache/280x280/ts/product/cc/7a/c7/33170ba12b41a015851b21fa0652c7dd.jpg', ' demo hinh anh', '200','300','img1','image');
























