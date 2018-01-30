{include file="../partials/head.tpl" title="Home"}
{include file="../partials/navbar.tpl"}

<section class="content">
    <div class="container">
        <div class="row">

            <div class="col-md-7">
                <div class="article">
                    <div class="title"><h2>{$article.article_name|capitalize}</h2></div>
                    <div class="category">Category: <a href="{$base_url}categories/{$article.cat_id}">{$article.cat_name}</a></div>
                    <div class="date">Created|Modified: {$article.article_created_date} | {$article.article_created_date}</div>
                    <div class="des"><b>{$article.article_des}</b></div>
                    <div class="image">
                        <img src="{$base_url}uploads/articles/{$article.article_thumbnail}" height="250" alt="Article Image">
                    </div>
                    <div class="content">{$article.article_content}</div>
                    <div class="tags">Tags: {$article.article_tags}</div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="box box-default box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Related articles</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        {foreach from=$related_articles item=item}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="media">
                                        <a class="media-left" href="{$base_url}articles/{$item.article_id}">
                                            <img src="{$base_url}uploads/articles/{$item.article_thumbnail}" style="width: 64px; height: 64px;">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{$base_url}articles/{$item.article_id}">{$item.article_name|capitalize}</a></h4>
                                            {$item.article_des}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {*{if }*}
                                <hr>
                            {*{/if}*}
                        {/foreach}
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

{include file="../partials/foot.tpl"}