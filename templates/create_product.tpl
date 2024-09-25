{extends file="layouts/layout.tpl"}

{block name=title} Create Product {/block}

{block name=content}
    <div class="container mt-3">
        <h1 class="mb-3">Create Product</h1>
        {include file="layouts/includes/form.tpl" action="?page=create" button="Create"}
    </div>
{/block}