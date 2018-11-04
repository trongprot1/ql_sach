<?php
/* Smarty version 3.1.33, created on 2018-11-04 17:43:40
  from 'E:\QL Sach\Smarty\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdf2fccf29601_60684501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba6c3cd5f840021aefa51b49ee7803f01901620' => 
    array (
      0 => 'E:\\QL Sach\\Smarty\\templates\\layout.tpl',
      1 => 1541353390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:content.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_5bdf2fccf29601_60684501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- top-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20040792505bdf2fccdc2cc9_60917115', "top");
?>

<!-- End top-->

<body>
<div class="wrapper">
    <!-- sidebar-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2463886645bdf2fcce03119_56197083', "sidebar");
?>

    <!-- End sidebar-->
    <div class="main-panel">

        <!-- navbar-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312767995bdf2fcce3d433_69915074', "navbar");
?>

        <!-- End navbar-->

        <div class="content">
            <div class="container-fluid">
                <!-- content-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14133644915bdf2fcce79cb3_27618495', "content");
?>

                <!-- End content-->
            </div>
        </div>

        <!-- footer-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8180132955bdf2fcceb3d62_44263828', "footer");
?>

        <!-- End footer-->
    </div>
</div>
</body>

<!-- bottom-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8873475905bdf2fccef15d2_50245167', "bottom");
?>

<!-- End bottom--><?php }
/* {block "top"} */
class Block_20040792505bdf2fccdc2cc9_60917115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_20040792505bdf2fccdc2cc9_60917115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "top"} */
/* {block "sidebar"} */
class Block_2463886645bdf2fcce03119_56197083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_2463886645bdf2fcce03119_56197083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "sidebar"} */
/* {block "navbar"} */
class Block_312767995bdf2fcce3d433_69915074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_312767995bdf2fcce3d433_69915074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "navbar"} */
/* {block "content"} */
class Block_14133644915bdf2fcce79cb3_27618495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14133644915bdf2fcce79cb3_27618495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_8180132955bdf2fcceb3d62_44263828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8180132955bdf2fcceb3d62_44263828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block "bottom"} */
class Block_8873475905bdf2fccef15d2_50245167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_8873475905bdf2fccef15d2_50245167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "bottom"} */
}
