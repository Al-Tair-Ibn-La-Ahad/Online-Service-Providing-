<?php include('server.php'); 
//if user is not signed in,they shall not pass..
if (empty($_SESSION['username'])){
    header('location: login.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>Home page</title>
        <link rel="stylesheet" type="text/css" href="test.css"/>
        
</head>
<body>
    <div class="cont">
    <div class ="tb">
        <table>
            <tr>
                <td>Index  </td>
                <td>Ruetian Clubs  </td>
                <td>Contact us  </td>
            </tr>
        </table>
    </div>
        <div class="header">
            <h1 class="h">Home page</h1>
        </div>
        <div class="content" id="animate-area">
             <?php if(isset($_SESSION['success'])): ?>
                 <div class="error_success">
                     <h3>
                        <?php 
                              echo $_SESSION['success']; 
                              unset ($_SESSION['success']);
                        ?>   
                     </h3>
                 </div>
             <?php endif ?>

             <?php if (isset($_SESSION["username"])): ?>
             <marquee scrollamount="3" direction="left" behavior="scroll"><p>Welcome <strong><?php echo $_SESSION['username']; ?>!!</strong></p></marquee>
             <p> <a href="index.php?logout='1'"> Logout</a></p>

             <?php endif ?>
        </div>
    </div>
</body>
</html>