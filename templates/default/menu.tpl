{config_load file="test.conf" section="setup"}
{include file="$tpl/header.tpl" title=$title}
{if $is_in_game == true}
    {include file="$tpl/game/menu.tpl" title=$title}
{/if}
{if $is_in_game == false}
    {include file="$tpl/visitor/menu.tpl" title=$title}
{/if}