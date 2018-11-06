<?php
/* Smarty version 3.1.33, created on 2018-11-06 15:58:49
  from 'F:\ql_sach\Smarty\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be157c9df4576_11384547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859f7a6b6b308b29a0797e75b750dbbcf014197d' => 
    array (
      0 => 'F:\\ql_sach\\Smarty\\templates\\layout.tpl',
      1 => 1541494529,
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
function content_5be157c9df4576_11384547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- top-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16410117705be157c9dae545_37176260', "top");
?>

<!-- End top-->

<body>
<div class="wrapper">
    <!-- sidebar-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19443775345be157c9dbd247_67017490', "sidebar");
?>

    <!-- End sidebar-->
    <div class="main-panel">

        <!-- navbar-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11341086995be157c9dc4e20_63204024', "navbar");
?>

        <!-- End navbar-->

        <div class="content">
            <div class="container-fluid">
                <!-- content-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21241670495be157c9dcd226_92708439', "content");
?>

                <!-- End content-->
            </div>
        </div>

        <!-- footer-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6923115275be157c9ddf677_04515631', "footer");
?>

        <!-- End footer-->
    </div>
</div>
</body>

<!-- bottom-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10953294605be157c9dedab2_49104106', "bottom");
?>

<!-- End bottom--><?php }
/* {block "top"} */
class Block_16410117705be157c9dae545_37176260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_16410117705be157c9dae545_37176260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "top"} */
/* {block "sidebar"} */
class Block_19443775345be157c9dbd247_67017490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_19443775345be157c9dbd247_67017490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "sidebar"} */
/* {block "navbar"} */
class Block_11341086995be157c9dc4e20_63204024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_11341086995be157c9dc4e20_63204024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "navbar"} */
/* {block "content"} */
class Block_21241670495be157c9dcd226_92708439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21241670495be157c9dcd226_92708439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_6923115275be157c9ddf677_04515631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6923115275be157c9ddf677_04515631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block "bottom"} */
class Block_10953294605be157c9dedab2_49104106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10953294605be157c9dedab2_49104106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "bottom"} */
}
