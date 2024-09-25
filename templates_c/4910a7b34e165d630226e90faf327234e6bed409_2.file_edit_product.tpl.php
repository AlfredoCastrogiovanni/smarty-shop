<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:26:23
  from 'file:edit_product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f1889fc9a2a2_30146839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4910a7b34e165d630226e90faf327234e6bed409' => 
    array (
      0 => 'edit_product.tpl',
      1 => 1727104121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/includes/form.tpl' => 1,
  ),
))) {
function content_66f1889fc9a2a2_30146839 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_73101961766f1889fc921f7_05617467', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_81203488666f1889fc95c14_45191801', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_73101961766f1889fc921f7_05617467 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>
 Edit Product <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_81203488666f1889fc95c14_45191801 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>

    <div class="container mt-3">
        <h1 class="mb-3">Edit Product</h1>
        <?php $_smarty_tpl->renderSubTemplate("file:layouts/includes/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"?page=edit&id=".((string)$_smarty_tpl->getValue('product')['id']),'button'=>"Edit"), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
