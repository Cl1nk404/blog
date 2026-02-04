<h2>{$category->name}</h2>

<form method="get">
    <select name="sort" onchange="this.form.submit()">
        <option value="date" {if $sort === 'date'}selected{/if}>По дате</option>
        <option value="views" {if $sort === 'views'}selected{/if}>По просмотрам</option>
    </select>
</form>

<ul>
    {foreach $posts as $post}
        <li>
            <a href="/post/{$post->id}">{$post->title}</a>
        </li>
    {/foreach}
</ul>

{assign var=pages value=ceil($total / $limit)}

<nav>
    {for $i=1 to $pages}
        <a href="?page={$i}&sort={$sort}">
            {if $i === $page}<strong>{$i}</strong>{else}{$i}{/if}
        </a>
    {/for}
</nav>
