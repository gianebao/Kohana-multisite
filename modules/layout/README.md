# Layout -- Kohana[module]

### using: Kohana PHP Framework, version 3.2

## Overview

Creates a segmented view template with a head body and foot format.


### Get Started:

1. Include `Layout` module to your kohan::modules in `bootstrap.php`.

2. Extend `Controller_Template_Layout` to your `Controller`.

3. Assign variable(s) to each segment by:

```
public function action_index()
{
	$this->layout->header->navigations = array(
		'home',
		'blog',
		'gallery'
	);
	
	$this->layout->body->foo = 'bar';
}
```

## Methods

### Layout::set_template
Sets the template view object file path. (Chainable.)

```
$layout->set_template('new/file/path');
```

#### Params

 * path : string, view filename


### Layout::set_header
Sets the header view object file path. (Chainable.)

```
$layout->set_header('new/file/path');
```

#### Params

 * path : string, view filename

### Layout::set_body
Sets the body view object file path. (Chainable.)

```
$layout->set_template('new/file/path');
```

#### Params

 * path : string, view filename

### Layout::set_footer
Sets the footer view object file path. (Chainable.)

```
$layout->set_template('new/file/path');
```

#### Params

 * path : string, view filename