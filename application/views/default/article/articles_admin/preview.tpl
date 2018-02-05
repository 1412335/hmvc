{include file="../../partials/head.tpl" title="Preview Article"}
{include file="../../partials/navbar.tpl"}

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="article">
                    <div class="title">
                        <h2>{$article.article_name|capitalize}
                            <a href="{$base_url}admin/articles/{$article.article_id}/edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </h2>
                    </div>
                    <div class="category">Category: {$article.cat_name}
                        <a href="{$base_url}admin/categories/{$article.cat_id}/edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </div>
                    <div class="date">
                        <p>Created: {$article.article_created_date}</p>
                        <p>Modified: {$article.article_created_date}</p>
                    </div>
                    <div class="des"><b>{$article.article_des}</b></div>
                    <div class="image">
                        <img src="{$base_url}uploads/articles/{$article.article_thumbnail}" height="250" alt="Article Image">
                    </div>
                    <div class="content">{$article.article_content}</div>
                    <div class="tags">Tags: {$article.article_tags}</div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="../../partials/foot.tpl"}