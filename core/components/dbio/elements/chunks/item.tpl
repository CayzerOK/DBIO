{if $tags}
    {foreach $tags as $tag}
        <div> {$tag.id} - {$tag.content}</div>
    {/foreach}
{/if}