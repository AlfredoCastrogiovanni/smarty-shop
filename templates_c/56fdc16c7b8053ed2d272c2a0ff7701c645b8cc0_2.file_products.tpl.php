<?php
/* Smarty version 5.4.1, created on 2024-09-25 09:15:36
  from 'file:products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f3d4b8879912_95098415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56fdc16c7b8053ed2d272c2a0ff7701c645b8cc0' => 
    array (
      0 => 'products.tpl',
      1 => 1727255734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f3d4b8879912_95098415 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_107318332366f3d4b886cef9_02234752', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_128586220366f3d4b8870105_24496121', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_107318332366f3d4b886cef9_02234752 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>
 Products <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_128586220366f3d4b8870105_24496121 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates';
?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>Products</h1>
            </div>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
            <div class="col-4 mb-3">
                <a class="link-underline link-underline-opacity-0" href="?page=product&id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getId()), ENT_QUOTES, 'UTF-8');?>
">
                <div class="card">
                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getImageUrl()), ENT_QUOTES, 'UTF-8');?>
" class="card-img-top" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getTitle()), ENT_QUOTES, 'UTF-8');?>
' picture">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getTitle()), ENT_QUOTES, 'UTF-8');?>
</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getBrand()), ENT_QUOTES, 'UTF-8');?>
</h6>
                        <p class="card-text fw-medium"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')->getPrice()), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                </div>
                </a>
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
