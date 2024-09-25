<form class="row" action="{$action}" method="POST">
    <div class="col-7 mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" value="{$product['title']}" id="title" name="title">
    </div>
    <div class="col-5">
        <label for="brand" class="form-label">Brand</label>
        <input type="text" class="form-control" value="{$product['brand']}" id="brand" name="brand">
    </div>
    <div class="col-8 mb-3">
        <label for="image_url" class="form-label">Image Url</label>
        <input type="text" class="form-control" value="{$product['image_url']}" id="image_url" name="image_url">
    </div>
    <div class="col-4">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" value="{$product['price']}" id="price" name="price">
    </div>
    <div class="col-12">
        <button class="btn btn-primary">{$button}</button>
    </div>
</form>