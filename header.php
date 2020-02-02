<link rel="stylesheet" href="refrences/css/header.css">
<header class="sideBar">
    <nav>
        <ul>
            <a href="user_dashboard.php"><li class="headerItem headerItem--active">
                <i class="flaticon-user"></i>
            </li> </a>
            <a href="user_notification.php"><li class="headerItem"><i class="flaticon-notification"></i></li></a>
            <a href="user_cards.php"><li class="headerItem"><i class="flaticon-note"></i></li></a>
            <a id='logout'><li class="headerItem headerItem--logOut"><i class="flaticon-logout"></i></li>      </a>
        </ul>
    </nav>
</header>
<script>
document.querySelector('#logout').addEventListener('click',function(){
    window.location.href='handle/logout';
})
</script>