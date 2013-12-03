BunchOfColors
=============

BunchOfColors is an online free application to get and compare RGB colors.


Starting date
----

19-11.2013


Contributing
----

If you want to contribute just push your commits. I'll be grateful.


License
----

All of BunchOfColors's original code is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE, for details see LICENSE. 


Howto install
----

The following are instructions working on Apache2 systems.

###1. Download the BunchOfColors sources to your computer. Using Git:

    git clone https://msalsas@github.com/msalsas/BunchOfColors.git

###2. Cd to where you have your sources using your terminal/command line.

    cd BunchOfColors

###3. Set a host name in `/etc/hosts`. For instance:

    sudo vi /etc/hosts
    
and add this line:

    127.0.1.1       bunchofcolors
    
###4. Add the site configuration file at `/etc/apache2/sites-avaiable/bunchofcolors.conf` 
    
    <VirtualHost *:80>
    ErrorDocument 400 /errores/error400.html
    ErrorDocument 401 /errores/error401.html
    ErrorDocument 403 /errores/error403.html
    ErrorDocument 404 /errores/error404.html
    ErrorDocument 405 /errores/error405.html
    ErrorDocument 406 /errores/error406.html
    ErrorDocument 408 /errores/error408.html


        # The ServerName directive sets the request scheme, hostname and port that
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

    ServerName bunchofcolors
        ServerAdmin webmaster@localhost
        DocumentRoot /yourApacheRootDir/BunchOfColors
        <Directory /yourApacheRootDir/BunchOfColors>
                <IfModule mod_rewrite.c>
                        RewriteEngine On
                        RewriteBase /

                        RewriteRule ^index.php$ / [R=301,L]

                        RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
                        RewriteRule ^(.*)$ http://%1/$1 [R=301,L]

                </IfModule>

                <IfModule mod_expires.c>

                        ExpiresActive On
                        ExpiresDefault "access plus 1 seconds"
                        ExpiresByType text/html "access plus 1 seconds"
                        ExpiresByType text/css "access plus 2 weeks"
                        ExpiresByType text/javascript "access plus 2 weeks"
                        ExpiresByType application/x-javascript "access plus 2 weeks"
                        ExpiresByType image/* "access plus 2 weeks"

                </IfModule>

                AllowOverride none

        </Directory>

</VirtualHost>
                                                                                                                                                     

    
###5. Enable your site and needed modes.

    sudo a2ensite bunchofcolors.conf
    sudo a2enmod rewrite expires
    sudo service apache2 reload
    
###6. And that's all. Search for `bunchofcolors` in the URL bar to view the application.



