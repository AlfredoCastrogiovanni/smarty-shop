<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:17:02
  from 'file:create_product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f1866e82ca92_74338551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85c94b8b58251c198448c7e1b7f1f5b9e02f644' => 
    array (
      0 => 'create_product.tpl',
      1 => 1727104151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/includes/form.tpl' => 1,
  ),
))) {
function content_66f1866e82ca92_74338551 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_129555528866f1866e826d87_00924003', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_205910003466f1866e829bb2_11264617', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_129555528866f1866e826d87_00924003 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>
 Create Product <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_205910003466f1866e829bb2_11264617 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>

    <div class="container mt-3">
        <h1 class="mb-3">Create Product</h1>
        <?php $_smarty_tpl->renderSubTemplate("file:layouts/includes/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"?page=create",'button'=>"Create"), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
