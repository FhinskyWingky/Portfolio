
<?php
    require_once "config.php";

    	$Name = $_POST['name'];
	    $SurName = $_POST['surname'];
	    $Username = $_POST['username'];
	    $Password = $_POST['psw'];
	    $Password_Repeat = $_POST['psw-repeat'];
	    $Email = $_POST['email'];
	    $Address = $_POST['address'];

		
		$currentCustomer = "SELECT MAX(id_customer) FROM customer";
		$search_customerID = mysqli_query($conn , $currentCustomer);
		while($objResult = mysqli_fetch_array($search_customerID, MYSQLI_BOTH))
		{
			$id_customer = $objResult[0];
		}
		$id_customer++;

		$currentAccount = "SELECT MAX(id_account) FROM account";
		$search_accountID = mysqli_query($conn , $currentAccount);
		while($objResult = mysqli_fetch_array($search_accountID, MYSQLI_BOTH))
		{
			$id_account = $objResult[0];
		}
		$id_account++;


        if($Password == $Password_Repeat){
        ///insert
	    $new_customer = "INSERT INTO customer 
	    (id_customer , id_account , name , surname , email , address) VALUES 
	    ($id_customer , $id_account , '$Name' , '$SurName' , '$Email', '$Address')";        
        $Customer_Data = mysqli_query($conn,$new_customer);

		$new_account = "INSERT INTO account VALUES ($id_account , '$Username', '$Password', 'user')";
		$Customer_Account = mysqli_query($conn,$new_account);

            if($Customer_Data){

				if($Customer_Account){
					header('location: login.php?status=2');
				}else{
                    echo '<script> alert("ไม่พบข้อมูลคุณในระบบ"); </script>';
					header("refresh:0 register.php?status=1");	
				}
				
            }
            else { 
                echo '<script> alert("ไม่พบข้อมูลคุณในระบบ"); </script>';
                header("refresh:0  register.php?status=1");
            }
        ////
        }else{
            echo '<script> alert("รหัสผ่านคุณไม่ตรงกัน กรุณากรอกใหม่"); </script>';
            header('refresh:0  register.php?status=1');
        }





?>