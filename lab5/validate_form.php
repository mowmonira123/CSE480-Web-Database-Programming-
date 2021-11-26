<?php
 session_start();
    include('db1.php');
?>



<?php
if (isset($_POST['submit'])){

	$name = $_POST['Name'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
    $ipaddress = $_POST['Ip'];
    $URL = $_POST['url'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mob_no = $_POST['mob'];
    $brief = $_POST['brief'];
    $c = 0;


    if($name==""){
    	echo "<span class='error'>* 'Name cannot be empty'</span>";
    }
    else{
    	if (!preg_match('/^([a-zA-Z]+)[\s]([a-zA-Z]+){4,25}$/', $name)) {

    	    echo "<span class='error'>* 'Invalid Input in Name.Must be in Between 4-25 Characters long. First and last name are mandetory.Middle name is optinal. There should be single space in between words. '</span>";
 
    	}else{
                $c++;
            }

    }

    if ($email=="") {

        echo "<span class='error'>* 'Email can't be empty'</span>";

     }else{

        if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
 
               echo "<span class='error'>* 'Invalid Email Address'</span>";

            }
            else{
                $c++;
            }
    }

    if ($password=="") {

          echo "<span class='error'>* 'Password can't be empty'</span>";

     }else{
         if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/', $password)) {
                 echo "<span class='error'>* 'Invalid Password. Use at least one Upper and one Lower case and a number. Should be in between 8-20 character'</span>";
            }
            else{
                $c++;
            }
     }

     if ($ipaddress=="") {

           echo "<span class='error'>* 'IP can't be empty'</span>";

     }else{

           if(!preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $ipaddress)) { 

                  echo "<span class='error'>* 'Invalid IP Address'</span>";

             }
             else{
                $c++;
            }
     }


        if ($URL=="") {

                echo "<span class='error'>* 'URL can't be empty'</span>";

      }else{
                $c++;
            }

      if ($dob=="") {

          echo "<span class='error'>* 'Date of Birth can't be empty'</span>";

       }else{
                $c++;
            }

       if ($gender=="") {

           echo "<span class='error'>* 'Gender can't be empty'</span>";

       }else{
                $c++;
            }

       if ($mob_no=="") {

           echo "<span class='error'>* 'Mobile Number can't be empty'</span>";

        }else{

             if(!preg_match('/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/', $mob_no)) {

                      echo "<span class='error'>* 'Invalid Mobile Number'</span>";
                }else{
                $c++;
            }
            }

        if ($brief=="") {

               echo "<span class='error'>* 'Description can't be empty'</span>";

        }else if(preg_match('/^([a-zA-Z]+)[\s]([a-zA-Z]*){1,15}$/' , $brief)){
                  echo "<span class='error'>* 'Invalid Input in Brief.Must be in Between 1-15 words.</span>";
         } else{

                  $val = array("Damn", "damn", "Kill","kill","Death","death","Liar","liar");
                  $rep = array("****", "****", "****","****","*****", "****", "****");
                  $brief=str_replace($val, $rep, $brief);
                  $c++;

          }

       function ageCalculator($dob){

           if(!empty($dob)){

                $birthdate = new DateTime($dob);
                $today   = new DateTime('today');
                $age = $birthdate->diff($today)->format('%y');
                
    
                return $age;


            }else{

                  return 0;

               }
         }

 
    $dob2 = $_POST['dob'];
    $age = ageCalculator($dob2);


   if($c==9) {


    $sql = "INSERT INTO user(name, email, password, ipaddress, URL, age, gender, mob_no, brief) VALUES('$name','$email','$password','$ipaddress','$URL', '$age', '$gender','$mob_no','$brief') ";

    $data = mysqli_query($conn,$sql);

    if($data){
        echo "Data inserted";
    }else{
    echo "Data not inserted";
      }
   }
}
  

?>


<!DOCTYPE html>
<html>
<head>
  <title>Validate Form</title>
  <style>
    .red_text {
        color: #FF0000;
        }
  </style>

</head>
<body>

  <h1 align="center">Validate Form</h1>
  <p align="center"><span class="red_text">* Required fields</span></p>
  <form method="POST" action="" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td>Name<span class="red_text">*</span></td>
            <td><input type="text" name="Name" minlength="5" maxlength="25" placeholder="Name">
            
            </td>

        </tr>

        <tr>
            <td>Email <span class="red_text">*</span></td>
            <td><input type="email" name="email">
               
            </td>

        </tr>

        <tr>
            <td>Password<span class="red_text">*</span></td>
            <td><input type="password" name="pass">
                
            </td>

        </tr>

        <tr>
            <td>Ip Address<span class="red_text">*</span></td>
            <td><input type="text" name="Ip" value="192.168.0.1">
                
            </td>

        </tr>

        <tr>
            <td> Personal web URL<span class="red_text">*</span></td>
            <td><input type="url" name="url">
                
            </td>

        </tr>

        <tr>
            <td>Date Of Birth<span class="red_text">*</span></td>
            <td><input type="date" name="dob">
                
            </td>

        </tr>

        <tr>
            <td>Gender <span class="red_text">*</span></td>
            <td>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Custom">Other
               
            </td>

        </tr>

        <tr>
            <td>Mobile Number <span class="red_text">*</span></td>
            <td>
                <input type="tel" name="mob" >
               
            </td>
        </tr>

        <tr>
            <td>Brief Info <span class="red_text">*</span></td>
            <td><textarea rows="15" cols="40" name="brief" minlength=""></textarea>
               
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>

    </table>
  </form>

    </body>
    </html>