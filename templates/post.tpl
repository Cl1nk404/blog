{extends file="layout.tpl"}

{block name="content"}
    <article>
        <h2>{$post->title}</h2>

        <p><em>Просмотров: {$post->views}</em></p>

        <p>{$post->description}</p>

        <div>
            {$post->text}
        </div>
    </article>

    <hr>

    <h3>Похожие статьи</h3>

    {if $similarPosts|count === 0}
        <p>Нет похожих статей</p>
    {else}
        <ul>
            {foreach $similarPosts as $item}
                <li>
                    <a href="/post/{$item->id}">
                        {$item->title}
                    </a>
                </li>
            {/foreach}
        </ul>
    {/if}
{/block}
