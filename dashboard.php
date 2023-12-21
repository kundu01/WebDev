<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>




<div id="main-container">
    <div class="menu">
        <ul class="menu-content">
            <li><a href="#">
                <span class="material-symbols-outlined">home</span><span>Home</span></a></li>
            <li><a href="dashboard.php">
                <span class="material-symbols-outlined">dashboard</span><span>DashBoard</span></a></li>
            <li><a href="login.php">
                <span class="material-symbols-outlined">login</span><span>login</span></a></li>
            <li><a href="signup.php">
                <span class="material-symbols-outlined">man</span><span>user</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">settings</span><span>Settings</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">person</span><span>Account</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">report</span><span>Report</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">email</span><span>Contact</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">logout</span><span>Logout</span></a></li>
            <li><a href="role.php">
                <span class="material-symbols-outlined">role</span><span>role</span></a></li>
            <li><a href="book.php">
                <span class="material-symbols-outlined">book</span><span>book</span></a></li>
            <li><a href="book_manage.php">
            <span class="material-symbols-outlined">booksettings</span><span>book manage</span></a></li>   
            <li><a href="role_manage.php">
                <span class="material-symbols-outlined">rolesettings</span><span>role manage</span></a></li>
        </ul>
    </div>
</div>

<style>


@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
    
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#main-container {
	display:flex;
    width: 100%;
    background: linear-gradient(#051f30, #000000);
}

.menu {
    height: 100%;
    transition: .3s;
    background: #ffffff12;
    padding: 20px 20px 20px 0;
    width: 85px;
    box-shadow: 8px 0px 9px 0px #00000014;
    backdrop-filter: blur(5px);
    min-height: 100vh;
}

.menu-content li {
    list-style: none;
    border-radius: 0px 50px 50px 0;
    transition: .3s;
    margin-bottom: 20px;
    padding-left: 20px;
}

a {
    text-decoration: none;
    color: rgb(213, 213, 213);
    display: flex;
    align-items: center;
    font-family: 'calibri';
}

.material-symbols-outlined {
    font-size: 25px;
    margin-right: 10px;
    background: #0c0c0c;
    border-radius: 50%;
    padding: 10px;
}

li:hover {
    background: #0c0c0c;
}

li span:nth-child(2) {
    display: none;
}

.menu:hover {
    width: 260px;
}

.menu:hover li span:nth-child(2) {
    display: block;
}

</style>

<div id="main-container">
    <div class="menu">
        <ul class="menu-content">
            <li><a href="#">
                <span class="material-symbols-outlined">home</span><span>Home</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">dashboard</span><span>DashBoard</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">explore</span><span>Explore</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">analytics</span><span>Analytics</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">settings</span><span>Settings</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">person</span><span>Account</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">report</span><span>Report</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">email</span><span>Contact</span></a></li>
            <li><a href="#">
                <span class="material-symbols-outlined">logout</span><span>Logout</span></a></li>
        </ul>
    </div>
</div>
</body>
</html>