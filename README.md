# Kohana -- multi-site

### using: Kohana PHP Framework, version 3.2

## Overview

This is a modified version of [Kohana PHP Framework](http://kohanaframework.org/) that is pre-made to support multiple applications. It uses a command-line tool **kohm**  to maintain the system.


## KOHM Tool

### Syntax

#### Kohm Configure
Add or modify a configuration value.
	
	usage: kohm config <name> <value>


#### Kohm Create
Creates a new application.

	usage: kohm create <name> [template]

##### template
- *default* :    default template.


#### Kohm Delete
Removes an existing application.

	usage: kohm delete [options] <name>

##### options
- *--app* : application

- *--all* : application and the temporary files.

- *--cache* : file cache(s) of the application.

#### Kohm Help
Displays the help dictionary.

	usage: kohm help


### How to:

#### Start using kohm

Run `php setup/bin/kohm <command>` from the root directory.


#### Run kohm from anywhere (unix/linux)

1. Open `~/.bash_profile` or the equivalent file.

2. Add the code below on a new line.

		export PATH=/location/of/kohona-multisite/setup/bin:$PATH`

3. Close and save the file.

4. Change permission of the `setup/bin/kohm` file to *755*.

5. Run `kohm` to test.

#### Segregate webroot folder (unix/linux)

1. Copy the `index.php` and `.htaccess` files inside the `webroot` folder and put them in your desired location.

2. Open copied `index.php` with your preferred editor.

3. Edit `$application`, `$modules`, `$system` and `$tmp` (*found at line 13*) to point to their respective locations.

#### Segregate apps/tmp folders (unix/linux)

1. On your command terminal, execute,

		> mkdir -p /path/to/new/apps/folder
		> kohm config apps.path <NEW_APPS_DIRECTORY>
		
	and/or,
	
		> mkdir -p /path/to/new/tmp/folder
		> chmod 755 /path/to/new/tmp/folder
		> kohm config tmp.path <NEW_TMP_DIRECTORY>

2. Run `kohm create mysite.com` to create a new application  on the new folder.

#### Showing `open_basedir restriction in effect. …` warning after moving webroot or customizing apps/tmp folders

- This warning is thrown if your custom folders are pointing to a location which is not allowed by the `vhost`. Add the following to your `http.conf` file.
    
    <Directory /path/to/custom/webroot>
        
        <IfModule sapi_apache2.c>
            php_admin_flag engine on
            php_admin_flag safe_mode off
            php_admin_value open_basedir "/path/to/custom/webroot:.:/path/to/custom/apps:/path/to/custom/tmp"
        </IfModule>
        
        <IfModule mod_php5.c>
            php_admin_flag engine on
            php_admin_flag safe_mode off
            php_admin_value open_basedir "/path/to/custom/webroot:.:/path/to/custom/apps:/path/to/custom/tmp"
        </IfModule>
        
    </Directory>
