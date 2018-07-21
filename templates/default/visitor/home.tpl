<PRE>
    You need to connect in the game
    {if #bold#}<b>{/if}
        Title: {#title#|capitalize}
        {if #bold#}</b>{/if}

    The current date and time is {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}

    The value of global assigned variable $SCRIPT_NAME is {$SCRIPT_NAME}

    Example of accessing server environment variable SERVER_NAME: {$smarty.server.SERVER_NAME}
</PRE>