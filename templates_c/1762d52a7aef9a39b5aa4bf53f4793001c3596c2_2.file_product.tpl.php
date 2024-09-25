<?php
/* Smarty version 5.4.1, created on 2024-09-25 09:17:12
  from 'file:product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f3d518e255a6_45536807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1762d52a7aef9a39b5aa4bf53f4793001c3596c2' => 
    array (
      0 => 'product.tpl',
      1 => 1727255831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f3d518e255a6_45536807 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_108582282966f3d518e1c262_41857221', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_72816177566f3d518e208e0_72626248', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_108582282966f3d518e1c262_41857221 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getBrand()), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getTitle()), ENT_QUOTES, 'UTF-8');?>
 <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_72816177566f3d518e208e0_72626248 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-7">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <img class="img-fluid" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getImageUrl()), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getTitle()), ENT_QUOTES, 'UTF-8');?>
' picture">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <h4 class="mb-0 "><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getBrand()), ENT_QUOTES, 'UTF-8');?>
</h4>
                <h3 class="fw-bold"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getTitle()), ENT_QUOTES, 'UTF-8');?>
</h3>
                <p class="fs-3 fw-medium"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getPrice()), ENT_QUOTES, 'UTF-8');?>
<span class="fs-6 text-secondary"> IVA inclusa</span></p>
                <a class="btn btn-success" href="?page=edit&id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getId()), ENT_QUOTES, 'UTF-8');?>
">Edit</a>
                <a class="btn btn-danger" href="?page=delete&id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getId()), ENT_QUOTES, 'UTF-8');?>
">Delete</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
