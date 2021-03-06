<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/avatar.jpg"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                Tania Andrew
                                <b class="caret"></b>
                            </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="">
                <a href="/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Thống Kê Mượn Trả </p>
                </a>
            </li>
            <li class="{($title == "Mượn Trả")?"active":""}">
                <a href="/muontra.php">
                    <i class="material-icons">dashboard</i>
                    <p> Mượn Trả </p>
                </a>
            </li>
            <li class="{($title == "Đọc Giả")?"active":""}">
                <a href="/docgia.php">
                    <i class="material-icons">dashboard</i>
                    <p> Đọc Giả </p>
                </a>
            </li>
            <li class="{($title == "Sách")?"active":""}">
                <a href="/sach.php">
                    <i class="material-icons">books</i>
                    <p> Sách </p>
                </a>
            </li>
            <li class="{($title == "Tác Giả")?"active":""}">
                <a href="/tacgia.php">
                    <i class="material-icons">dashboard</i>
                    <p> Tác Giả </p>
                </a>
            </li>
            <li class="{($title == "Nhà Xuất Bản")?"active":""}">
                <a href="/nxb.php">
                    <i class="material-icons">dashboard</i>
                    <p> Nhà Xuất Bản </p>
                </a>
            </li>
            <li class="{($title == "Thể Loại")?"active":""}">
                <a href="/theloai.php">
                    <i class="material-icons">dashboard</i>
                    <p> Thể Loại </p>
                </a>
            </li>
            <li class="{($title == "Thẻ Thư Viện")?"active":""}">
                <a href="/thethuvien.php">
                    <i class="material-icons">dashboard</i>
                    <p> Thẻ Thư Viện </p>
                </a>
            </li>
            <li class="{($title == "Nhân Viên")?"active":""}">
                <a href="/nhanvien.php">
                    <i class="material-icons">person</i>
                    <p> Nhân Viên </p>
                </a>
            </li>
        </ul>
    </div>
</div>