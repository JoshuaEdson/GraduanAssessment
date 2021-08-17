<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-image: url("resources/views/pictures/img1.jpg");
    background-size: auto;
    font-family: 'Arial';  
}  
.userlogin{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 60px;  
        background: #045F5F;  
        border-radius: 15px ;  
          
}  
h1{  
	margin-top: 10%;
    text-align: center;  
    color: #1589FF;  
    padding-bottom: 10px;  
    font-size: 40px;
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#username{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
}  
span{  
    color: white;  
    font-size: 17px;  
}  
a{  
    float: left;  
    /*background-color: grey;  */
} 

</style>
<body>
	<h1>Login Page</h1>
	<div class="userlogin">
	<form id="userlogin" method="get" >
		@csrf
		<label><b>User Name:</label>
			<input type="text" name="username" id="username" placeholder="Your Name">
			<br><br>
		<label><b>Password:</label>
			<input type="Password" name="pass" id="pass" placeholder="Your Password">
			<br><br>
			<input type="checkbox" id="check">
			<span>Remember Me</span>
			<br><br>
			<a href="#">Forgot Password</a>
	</form>

	</div>

</body>
</html>