{include file="../partials/head.tpl" title="Home"}
{include file="../partials/navbar.tpl"}

<section class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well-lg text-center">
                <h3 class="title">Home</h3>
                <p class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus asperiores autem beatae, ex hic laboriosam laborum mollitia nesciunt nobis officia omnis optio quae quos, ratione saepe, ullam velit veniam.</p>
                <div class="clearfix">
                    <a class="btn btn-flat btn-primary" href="{$base_url}admin/register">Register</a>
                    <a class="btn btn-flat btn-danger" href="{$base_url}admin/register">Login</a>
                </div>
            </div>
        </div>
    </div>
    {foreach from=$categories item=cat}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{$base_url}categories/{$cat.info.cat_id}">{$cat.info.cat_name|capitalize}</a>
                            </li>
                        </ol>
                    </div>
                </div>
                {foreach from=$cat.articles item=article}
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="thumbnail">
                            <a href="{$base_url}articles/{$article.article_slug}-{$article.article_id}">
                                <img src="{$base_url}uploads/articles/{$article.article_thumbnail}" alt="Article Image">
                            </a>
                            <div class="caption">
                                <h4>{$article.article_name|capitalize}</h4>
                                <p>{$article.article_des}</p>
                                <p>
                                    <a href="{$base_url}articles/{$article.article_slug}-{$article.article_id}">Read more <i class="fa fa-angle-double-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    {/foreach}
    <div class="row text-right">
        <div class="col-md-8 col-md-offset-2">
            {$pagination}
        </div>
    </div>
</section>

<style>
    {literal}
    .pagination *
    {
        padding: 5px;
    }
    .pagination-link:hover
    {
        background: #b0b1b3;
    }
    {/literal}
</style>

{include file="../partials/foot.tpl"}
