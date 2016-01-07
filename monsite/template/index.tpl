{if isset($mail_ok)}
    <div class="alert alert-success" id="notif">
        {$mail_ok}
        </div>
    {/if}   

{foreach from=$tableauArticleSmarty  item=tableau}

<img src="img/{$tableau['id']}.jpg" alt="{$tableau['titre']}" width="200px"/>'; {*on parcours le tableau $result_request pour afficher les elements de l'article*}
    <h2>{$tableau['titre']}</h2>
    <p>{$tableau['texte']}</p> {*on affiche le texte*}
    <p>{$tableau['date_fr']}</p> {*on affiche la date*}
    
{/foreach}    

<div class="pagination">
    <ul>
        {for $i=1 to $nbpage}
            <li {if $i == $get_page}class="active"{/if}><a href="index.php?page={$i}">{$i}</a></li>
        {/for}
    </ul>
</div>    
    

