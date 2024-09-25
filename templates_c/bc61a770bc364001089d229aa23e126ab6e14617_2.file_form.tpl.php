<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:17:02
  from 'file:layouts/includes/form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f1866e892610_28489282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc61a770bc364001089d229aa23e126ab6e14617' => 
    array (
      0 => 'layouts/includes/form.tpl',
      1 => 1727104105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f1866e892610_28489282 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts\\includes';
?><form class="row" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('action')), ENT_QUOTES, 'UTF-8');?>
" method="POST">
    <div class="col-7 mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['title']), ENT_QUOTES, 'UTF-8');?>
" id="title" name="title">
    </div>
    <div class="col-5">
        <label for="brand" class="form-label">Brand</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['brand']), ENT_QUOTES, 'UTF-8');?>
" id="brand" name="brand">
    </div>
    <div class="col-8 mb-3">
        <label for="image_url" class="form-label">Image Url</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['image_url']), ENT_QUOTES, 'UTF-8');?>
" id="image_url" name="image_url">
    </div>
    <div class="col-4">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['price']), ENT_QUOTES, 'UTF-8');?>
" id="price" name="price">
    </div>
    <div class="col-12">
        <button class="btn btn-primary"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button')), ENT_QUOTES, 'UTF-8');?>
</button>
    </div>
</form><?php }
}
