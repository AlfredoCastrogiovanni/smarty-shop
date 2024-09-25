{extends file="layouts/layout.tpl"}

{block name=title} Products {/block}

{block name=content}
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>Products</h1>
            </div>
            {foreach from=$products item=product}
            <div class="col-4 mb-3">
                <a class="link-underline link-underline-opacity-0" href="?page=product&id={$product->getId()}">
                <div class="card">
                    <img src="{$product->getImageUrl()}" class="card-img-top" alt="{$product->getTitle()}' picture">
                    <div class="card-body">
                        <h5 class="card-title">{$product->getTitle()}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{$product->getBrand()}</h6>
                        <p class="card-text fw-medium">{$product->getPrice()}</p>
                    </div>
                </div>
                </a>
            </div>
            {/foreach}
        </div>
    </div>
{/block}