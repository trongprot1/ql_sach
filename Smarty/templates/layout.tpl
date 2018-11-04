<!-- top-->
{block name="top"}{include file="top.tpl"}{/block}
<!-- End top-->

<body>
<div class="wrapper">
    <!-- sidebar-->
    {block name="sidebar"}{include file="sidebar.tpl"}{/block}
    <!-- End sidebar-->
    <div class="main-panel">

        <!-- navbar-->
        {block name="navbar"}{include file="navbar.tpl"}{/block}
        <!-- End navbar-->

        <div class="content">
            <div class="container-fluid">
                <!-- content-->
                {block name="content"}{include file="content.tpl"}{/block}
                <!-- End content-->
            </div>
        </div>

        <!-- footer-->
        {block name="footer"}{include file="footer.tpl"}{/block}
        <!-- End footer-->
    </div>
</div>
</body>

<!-- bottom-->
{block name="bottom"}{include file="bottom.tpl"}{/block}
<!-- End bottom-->