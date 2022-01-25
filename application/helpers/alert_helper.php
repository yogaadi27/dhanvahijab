<?php 

function succ_msg($value){
  $str = "<script>
            toastr.success('".$value."', 'Sukses Login !');
          </script>";
	return $str;
}

function err_msg($value){
  $str = "<script>
              toastr.error('".$value."', 'Gagal Login!');
          </script>";
	return $str;
}


 ?>