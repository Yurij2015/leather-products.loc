<?php
/**
 * Created by PhpStorm.
 * File: ProductController.php
 * Date: 07/07/2020
 * Time: 21:49
 */

class ProductController
{
    public function actionList()
    {
        echo "ProductController actionList";
        return true;
    }

    public function actionView($productId)
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);

        require_once(ROOT . '/views/product/view.php');
        return true;
    }
}