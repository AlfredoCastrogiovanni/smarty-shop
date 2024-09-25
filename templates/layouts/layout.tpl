{* Smarty *}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{block name=title} {$project_name} {/block}</title>

        <!-- Boostrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{$base_url}/assets/css/app.css?v={$smarty.now}">

        <!-- Child Styles -->
        {block name=styles}{/block}
    </head>
    <body>
        {include file="./includes/navbar.tpl"}

        {block name=content}
            
        {/block}

        <!-- Bootstrap JS CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Child Scripts -->
        {block name=scripts}{/block}
    </body>
</html>