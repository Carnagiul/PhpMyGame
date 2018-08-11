{config_load file="test.conf" section="setup"}
{include file="$tpl/menu.tpl" title=home}
{if $is_in_game == true}
    {include file="$tpl/game/home.tpl" title=home}
{/if}
{if $is_in_game == false}
    {include file="$tpl/visitor/home.tpl" title=home}
{/if}
{include file="$tpl/footer.tpl"}
