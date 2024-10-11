<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: dashboard.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
      colors:{
      "primary":"#B51F60",
      "pshade":"#c41960",
    }
}}
    }
  </script>
</head>
<body>

	


<div class="flex h-screen flex-col justify-center px-6 py-12 xl:px-8 bg-slate-100" >
            <div></div>
            <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                <img class="mx-auto h-30 w-auto" src="https://bandishbasnet.com.np/hog_heaven/assets/images/Logo.png" alt="HogHeaven Logo" >
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register your account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6"  method="post">
                    <div>
                        <label for="username" class="block text-lg font-medium leading-6 text-gray-900">Username</label>
                        <div class="mt-2">
                            <input id="text"   name="user_name" type="text"  class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leadin0g-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-lg font-medium leading-6 text-gray-900">Password</label>
                            
                        </div>
                        <div class="mt-2">
                            <input id="text" name="password" type="password"  class=" pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <input id="button" type="submit" class="flex w-full justify-center rounded-md bg-primary px-3 py-1.5 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-pshade focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" value="Sign Up">
                    </div>
                </form>
               
                <div class="mt-5 flex justify-between ">
                    <p class=" text-center text-lg text-gray-500">Already have account?</p>
                    <p><a href="login.php" class="font-semibold leading-6 text-primary text-lg hover:text-pshade">Sign In</a></p>
                </div>
            </div>
           
    </div>
</body>
</html>