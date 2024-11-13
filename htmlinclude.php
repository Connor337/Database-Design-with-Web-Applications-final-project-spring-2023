<?php
function startHTML($title, $script, $style)
{
    print <<<STARTTAGS
    <!DOCTYPE html>\n
    <html lang="en">\n
    <head>\n
    <title>$title</title>\n
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>\n
    <script src="$script"></script>\n
    <link rel="stylesheet" href="$style">\n
    </head>\n
    <body>\n
    STARTTAGS;
}
function endHTML()
{
    print <<<ENDTAGS
    </body>\n
    </html>\n
    ENDTAGS;
}
?>