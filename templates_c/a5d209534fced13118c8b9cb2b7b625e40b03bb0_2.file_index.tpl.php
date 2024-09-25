<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:17:04
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f1867073fec8_90080699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d209534fced13118c8b9cb2b7b625e40b03bb0' => 
    array (
      0 => 'index.tpl',
      1 => 1727087857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f1867073fec8_90080699 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_100734486466f1867073c4b5_29675172', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_126140911966f1867073f511_64588379', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_100734486466f1867073c4b5_29675172 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>
 Home <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_126140911966f1867073f511_64588379 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>

    <h1>Home</h1>
<?php
}
}
/* {/block 'content'} */
}
