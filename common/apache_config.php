<VirtualHost *:80>
    ServerName admin.yiivddemo.com
    DocumentRoot "D:\phpStudy\PHPTutorial\WWW\yii2\yii2vdDemo\frontend\web"

    <Directory "D:\phpStudy\PHPTutorial\WWW\yii2\yii2vdDemo\frontend\web">
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . index.php

    # use index.php as index file
    DirectoryIndex index.php

    # ...other settings...
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerName admin.admin.com
    DocumentRoot "D:\phpStudy\PHPTutorial\WWW\yii2\yii2vdDemo\backend\web"

    <Directory "D:\phpStudy\PHPTutorial\WWW\yii2\yii2vdDemo\backend\web">
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . index.php

    # use index.php as index file
    DirectoryIndex index.php

    # ...other settings...
    </Directory>
</VirtualHost>