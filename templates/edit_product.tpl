{extends file="layouts/layout.tpl"}

{block name=title} Edit Product {/block}

{block name=content}
    <div class="container mt-3">
        <h1 class="mb-3">Edit Product</h1>
        {include file="layouts/includes/form.tpl" action="?page=edit&id={$product['id']}" button="Edit"}
    </div>
{/block}