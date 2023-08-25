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
                    <span class="text-gray-300 text-sm ml-2 font-semibold cursor-pointer rounded-lg p-2 hover:bg-stone-600">Admin Dashboard</span>
                </div>
            </div>
            <!-- header right -->
            <div class="flex items-center absolute top-0 right-6 text-gray-300 font-semibold ">
                <a class="btnHeader" href="logout.php">Logout</a>
            </div>
        </header>
        <!-- Main -->
        <main class="flex justify-center">
            <div>
                <button class="btnHeader"><a href="dashboard.php?verifications">Verifications</a></button>
            </div>
            <div>
                <button class="btnHeader"><a href="dashboard.php?requests">Requests</a></button>
            </div>
            <div>
                <button class="btnHeader"><a href="dashboard.php?books">Books config</a></button>
            </div>
            <div class="absolute top-28 md:top-32 bg-neutral-700 h-1 w-2/3 md:w-1/3 opacity-50 rounded-lg shadow-xl"></div>
        </main>
    </div>
</body>
</html>