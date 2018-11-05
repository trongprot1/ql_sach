<?php
/* Smarty version 3.1.33, created on 2018-11-05 05:22:30
  from 'E:\QL Sach\Smarty\templates\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdfd396189fe0_03942524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2262f89a72ae7a6433f5b661d40e1e47fbbd591' => 
    array (
      0 => 'E:\\QL Sach\\Smarty\\templates\\sidebar.tpl',
      1 => 1541395349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdfd396189fe0_03942524 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
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
            <li class="active">
                <a href="nhanvien.php">
                    <i class="material-icons">person</i>
                    <p> Nhân Viên </p>
                </a>
            </li>
            <li class="">
                <a href="/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Đọc Giả </p>
                </a>
            </li>
            <li class="">
                <a href="/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Sách </p>
                </a>
            </li>
            <li class="">
                <a href="/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Nhà Xuất Bản </p>
                </a>
            </li>
            <li class="">
                <a href="/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Thể Loại </p>
                </a>
            </li>
            <li class="">
                <a href="/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Thẻ Thư Viện </p>
                </a>
            </li>
            <li class="">
                <a href="/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Mượn Trả </p>
                </a>
            </li>
        </ul>
    </div>
</div><?php }
}
