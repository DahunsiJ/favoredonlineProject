<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family:roboto;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: 	#DCDCDC;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            }

            .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            left: 25px;
            font-size: 36px;
            margin-right: 50px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: 	#2F4F4F;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: 	#1E90FF;
        }

        #main {
            transition: margin-right .5s;
            padding: 16px;
        }

        /* On smaller screens, where height is less than 450px, 
        change the style of the sidenav 
        (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a{
                font-size: 18px;
            }

        }
    </style>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

        <a href="https://favoredonline.com" class="active"><img
        src="https://Favoredonline.com/images/FavoredOnline.png" width="30px"
        height="auto"/></a>
        <a href="http://favoredonline.com/">Home</a>
        <a href="https://favoredonline.com/softdev">Softwares</a>
        <a href="https://favoredonline.com/webdesign">Web Templates</a>
        <a href="https://techhub.favoredonline.com/">TechHub</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰ Menu </button>
    </div>

    <script>
        function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginRight = "250px";
        }
        function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginRight= "0";
        }
        </script>
        <div class="header">
        <a href="https://favoredonline.com/index.php"
        class="logo">FavoredOnline</a>
        <div class="header-right">
        </div>
        </div>

</body>
</html>