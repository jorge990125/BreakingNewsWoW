<?php
echo "SERVERALERT:";
echo <<<HEREDOC
This is where your information will go. What all do you want to say?

Do not use HTML markup here. This does not parse markup, it will show the tags on the client screen.

If you're getting an issue with missing characters at the end of your message, add a space. Because this will cut off the last character and white space counts. So use it. 
HEREDOC;

?>