<?php
include('connDb.php');
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
                    <span class="text-gray-300 text-sm ml-2 font-semibold cursor-pointer rounded-lg p-2 hover:bg-stone-600"><a href='home_logged.php'>Library Management System</a></span>
                </div>
            </div>
            <!-- header right -->
            <div class="flex items-center absolute top-0 right-6 text-gray-300 font-semibold ">
                <a class="btnHeader" href="logout.php">Logout</a>
            </div>
        </header>
        <!-- main -->
        <main>
            <!-- requests info -->
            <div class="lg:m-5 lg:pb-10 rounded-lg">
                <div class="mt-5 ml-5">
                    <span class="text-xl lg:text-2xl font-semibold text-black flex justify-center ">
                    <?php 
                            echo $_SESSION['name']." ".$_SESSION['surname'].'\'s book requests:';
                        ?>
                    </span>
                    <hr class="mt-5">
                    <!-- Getting user's requests from db -->
                    <?php
                        $name = $conn->real_escape_string($_SESSION['name']);
                        $surname = $conn->real_escape_string($_SESSION['surname']);
                        $sql = "SELECT id,title,accepted,requested_date from requests WHERE name='$name' AND surname='$surname'";
                        $result = $conn->query($sql);
                        echo <<< table
                            <div class='grid grid-cols-3 m-2 bg-slate-300'> 
                            <span class='text-xl font-semibold'> Title </span>
                            <span class='text-xl font-semibold'> Acceptance status </span>
                            <span class='text-xl font-semibold'> Requested date </span>
                            </div>
                        table;
                        while($row = $result->fetch_array()){
                            echo "<div class='grid grid-cols-3 m-2 even:bg-slate-200'>";
                            echo "<span class='text-md md:text-xl font-semibold'>".$row['title']."</span>";
                            echo "<span class='text-md md:text-xl font-semibold'>".$row['accepted']."</span>";
                            echo "<span class='text-md md:text-xl font-semibold'>".$row['requested_date']."</span>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>

        </main>
        
    </div>
</body>
</html>