<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:17:00
  from 'file:layouts/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f1866c814b23_61974327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831b2d486e9f0d91a19a116449b510581bcd1378' => 
    array (
      0 => 'layouts/layout.tpl',
      1 => 1727088297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./includes/navbar.tpl' => 1,
  ),
))) {
function content_66f1866c814b23_61974327 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_82822018666f1866c80cba3_51516937', 'title');
?>
</title>

        <!-- Boostrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('base_url')), ENT_QUOTES, 'UTF-8');?>
/assets/css/app.css?v=<?php echo htmlspecialchars((string) (time()), ENT_QUOTES, 'UTF-8');?>
">

        <!-- Child Styles -->
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_195580276366f1866c810107_23286476', 'styles');
?>

    </head>
    <body>
        <?php $_smarty_tpl->renderSubTemplate("file:./includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5565858766f1866c813493_08449332', 'content');
?>


        <!-- Bootstrap JS CDN -->
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

        <!-- Child Scripts -->
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_91402281766f1866c8140b2_29764010', 'scripts');
?>

    </body>
</html><?php }
/* {block 'title'} */
class Block_82822018666f1866c80cba3_51516937 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts';
?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('project_name')), ENT_QUOTES, 'UTF-8');?>
 <?php
}
}
/* {/block 'title'} */
/* {block 'styles'} */
class Block_195580276366f1866c810107_23286476 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts';
}
}
/* {/block 'styles'} */
/* {block 'content'} */
class Block_5565858766f1866c813493_08449332 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts';
?>

            
        <?php
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_91402281766f1866c8140b2_29764010 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts';
}
}
/* {/block 'scripts'} */
}
