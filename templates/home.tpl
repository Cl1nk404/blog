{extends file="layout.tpl"}

{block name="content"}
    <h2>Categories</h2>

    {foreach $categories as $item}
        <section>
            <h3>{$item.category->name}</h3>

            <ul>
                {foreach $item.posts as $post}
                    <li>
                        <a href="/post/{$post->id}">
                            {$post->title}
                        </a>
                    </li>
                {/foreach}
            </ul>

            <a href="/category/{$item.category->id}">
                All articles 
            </a>

            <hr>
        </section>
    {/foreach}
{/block}
