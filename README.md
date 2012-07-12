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
	
	`export PATH=/location/of/kohona-multisite/setup/bin:$PATH`

3. Close and save the file.

4. Change permission of the `setup/bin/kohm` file to *755*.

5. Run `kohm` to test.