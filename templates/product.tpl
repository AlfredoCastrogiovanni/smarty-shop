{extends file="layouts/layout.tpl"}

{block name=title} {$product->getBrand()} {$product->getTitle()} {/block}

{block name=content}
    <div class="container mt-5">
        <div class="row">
            <div class="col-7">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <img class="img-fluid" src="{$product->getImageUrl()}" alt="{$product->getTitle()}' picture">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <h4 class="mb-0 ">{$product->getBrand()}</h4>
                <h3 class="fw-bold">{$product->getTitle()}</h3>
                <p class="fs-3 fw-medium">{$product->getPrice()}<span class="fs-6 text-secondary"> IVA inclusa</span></p>
                <a class="btn btn-success" href="?page=edit&id={$product->getId()}">Edit</a>
                <a class="btn btn-danger" href="?page=delete&id={$product->getId()}">Delete</a>
            </div>
        </div>
    </div>
{/block}