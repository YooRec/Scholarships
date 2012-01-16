# Sample .htaccess file

```
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule .* index.php/$0 [PT]
</IfModule>
```

# Config file

Create includes/config.php, based on config.sample.php, filling in database credentials and other settings.

## Authors
* Katie Filbert, Wikimania 2012 Washington DC organizing team
* Harel Cain, Wikimania 2011 Haifa organizing team
* Wikimania 2010 Gdansk organizing team
* Wikimania 2009 Buenos Aires organizing team

###Translations
* [:pl:User:Saper](http://pl.wikipedia.org/wiki/User:Saper "Saper")
* [:pl:User:Magalia](http://pl.wikipedia.org/wiki/User:Magalia "Magalia")

##License
[GNU GPL 3.0](www.gnu.org/copyleft/gpl.html "GNU GPL 3.0")
