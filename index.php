<?php

require_once 'vendor/autoload.php';
require_once 'php/db.php';
require_once 'php/classes/Product.php';

use Smarty\Smarty;
$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setConfigDir(__DIR__ . '/configs');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');

$smarty->debugging = true;
$smarty->setEscapeHtml(true);
$smarty->configLoad('env.ini');

// Routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'products':
        $results = $db->query("SELECT * FROM products");
        $products = [];
        while($row = $results->fetch_assoc()) {
            $products[] = new Product($row['id'], $row['title'], $row['brand'], $row['image_url'], $row['price']);
        }
        $smarty->assign('products', $products);
        $smarty->display('products.tpl');
        break;
    case 'product':
        $query = $db->prepare("SELECT * FROM products WHERE id = ?");
        $query->bind_param("i", $_GET['id']);
        $query->execute();
        $result = $query->get_result();
        if ($row = $result->fetch_assoc()) {
            $product = new Product($row['id'], $row['title'], $row['brand'], $row['image_url'], $row['price']);
            $smarty->assign('product', $product);
            $smarty->display('product.tpl');
        }
        break;
    case 'create':
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query = $db->prepare("INSERT INTO products(title, brand, image_url, price) VALUES (?, ?, ?, ?)");
            $query->bind_param("sssd", $_POST['title'], $_POST['brand'], $_POST['image_url'], $_POST['price']);
            $query->execute();
            header('Location: ?page=products');
        } else {
            $smarty->display('create_product.tpl');
        }
        break;
    case 'edit':
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query = $db->prepare("UPDATE products set title = ?, brand = ?, image_url = ?, price = ? WHERE id = ?");
            $query->bind_param("sssdi", $_POST['title'], $_POST['brand'], $_POST['image_url'], $_POST['price'], $_GET['id']);
            $query->execute();
            header('Location: ?page=products');
        } else {
            $query = $db->prepare("SELECT * FROM products WHERE id = ?");
            $query->bind_param("i", $_GET['id']);
            $query->execute();
            $result = $query->get_result();
            $smarty->assign('product', $result->fetch_assoc());
            $smarty->display('edit_product.tpl');
        }
        break;
    case 'delete':
        $query = $db->prepare("DELETE FROM products WHERE id = ? ");
        $query->bind_param("i", $_GET['id']);
        $query->execute();
        header('Location: ?page=products');
        break;
    default:
        $smarty->display('index.tpl');
        break;
}