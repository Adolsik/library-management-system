<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: home.php?success=3');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="searchbar.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Library Management System</title>
</head>
<body class="overflow-hidden">
    <div class="relative">
        <!-- header -->
        <header class="w-full h-16 bg-zinc-800 flex items-center border-b border-b-gray-700 opacity">
            <!-- header left -->
            <div class="flex items-center">
                <div class="p-1 border border-gray-700 ml-4 rounded-lg cursor-pointer hover:border-gray-400 transition ease-out duration-75" >
                    <svg aria-hidden="true" fill="rgb(107,114,128)" stroke="rgb(107,114,128)" stroke-width="0.5" viewBox="0 0 16 16" version="1.1" data-view-component="true" class="w-4 h-4 m-1">
                        <path d="M1 2.75A.75.75 0 0 1 1.75 2h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 2.75Zm0 5A.75.75 0 0 1 1.75 7h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 7.75ZM1.75 12h12.5a.75.75 0 0 1 0 1.5H1.75a.75.75 0 0 1 0-1.5Z"></path>
                    </svg>             
                </div>
                <!-- logo -->
                <div id="logo">
                    <svg viewBox="0 0 24 24" fill="white" version="1.1" stroke="brown" data-view-component="true" class="inline-block h-8 w-8 ml-3 opacity-80">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
                <!-- header label -->
                <div id="headerLabel">
                    <span class="text-gray-300 text-sm ml-2 font-semibold cursor-pointer rounded-lg p-2 hover:bg-stone-600">Library Management System</span>
                </div>
            </div>
            <!-- header right -->
            <div class="flex items-center absolute top-0 right-6 text-gray-300 font-semibold ">
                <a class="btnHeader" href="user_requests.php">Requests</a>
                <a class="btnHeader" href="logout.php">Logout</a>
            </div>
        </header>
        <!-- main -->
        <main>
            <!-- Searchbar -->
            <div class="border border-b-gray-700 border-t-gray-700 border-opacity-30  h-10 w shadow-lg mt-5 flex items-center">
                <span class="inline-block ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>   
                </span>     
                <span class="inline-block">
                    <input type="text" id='search' class="ml-3 h-full w-screen focus:outline-none focus:border-transparent" placeholder="Search for books">
                </span>     
            </div>
            <!-- Searchbar suggestions -->
            <div id="suggestions" style="width: 100vw;">
                
            </div>     
            <!-- info -->
            <div class="lg:border-2 lg:m-5 lg:pb-10 rounded-lg">
                <div class="mt-5 ml-5">
                    <span class="text-xl lg:text-2xl font-semibold text-black flex justify-center ">Welcome to the Library Management System</span>
                </div>
                <div class="mt-5 ml-5">
                    <span style="font-size: 1.25rem; line-height: 1.75rem" class="font-semibold text-black flex justify-center">
                        <?php 
                            echo $_SESSION['name']." ".$_SESSION['surname'];
                        ?>
                     </span>
                </div>
            </div>

        </main>
        <!-- Notification implement -->
        <script>
            function closeNotification(){
                $('#notification').remove();
            }
        </script>
        <?php 
        if(isset($_GET['success'])){
            $result = $_GET['success'];
            if($result=='1'){
                echo <<< notification
                <div id='notification'>
                    <div class='notificationSuccess'  onclick='closeNotification()'> Request has been send! </div>
                </div>
                notification;
            } else if($result=='8') {
                echo <<< notification
                <div id='notification'>
                    <div class='notificationFailed' onclick='closeNotification()'> Book is currently unavailable! </div>
                </div>
                notification;
            } else {
                echo <<< notification
                <div id='notification'>
                    <div class='notificationFailed' onclick='closeNotification()'> Something went wrong! </div>
                </div>
                notification;
            }
        }
        ?>
        

    </div>
</body>
</html>