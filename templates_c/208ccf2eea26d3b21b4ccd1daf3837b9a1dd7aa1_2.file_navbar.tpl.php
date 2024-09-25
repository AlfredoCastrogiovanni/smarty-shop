<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:17:00
  from 'file:C:\MAMP\htdocs\smarty-shop\templates\layouts\./includes/navbar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f1866c8b2ee1_43817481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208ccf2eea26d3b21b4ccd1daf3837b9a1dd7aa1' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts\\./includes/navbar.tpl',
      1 => 1727102093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f1866c8b2ee1_43817481 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\smarty-shop\\templates\\layouts\\includes';
?><nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">Smarty Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?page=products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=create">Create Product</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
