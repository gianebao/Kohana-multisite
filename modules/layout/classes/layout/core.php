<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Layout templating collection.
 *
 * @package    Layout
 * @category   Template
 * @author     Gian Carlo Val Ebao <gianebao@gmail.com>
 */
class Layout_Core
{
    /**
     * template View object
     */
    protected $template = null;
    
    /**
     * cache data container
     */
    protected $data = array();
    
    /**
     * Returns a new Layout object.
     *
     *     $layout = Layout::factory($template);
     *
     * @param   string  template view filename
     * @param   string  body     view filename
     * @param   string  header   view filename
     * @param   string  footer   view filename
     * @return  Layout
     */
    static public function factory($template, $body, $header = null, $footer = null)
    {
        return new Layout($template, $body, $header, $footer);
    }
    
    /**
     * Setup the template view. It also allows to optionally set the relative header
     * and footer view object.
     *
     *     $layout = new Layout($template);
     *
     * @param   string  template  view filename
     * @param   string  body      view filename
     * @param   string  header    view filename
     * @param   string  footer    view filename
     * @return  Layout
     */
    public function __construct($template, $body, $header = null, $footer = null)
    {
        $this->set_template($template);
        
        $this->template->body = null;
        $this->set_body($body);
        
        $this->template->header = null;
        $this->template->footer = null;
        
        if (!empty($header))
        {
            $this->set_header($header);
        }
        
        if (!empty($footer))
        {
            $this->set_footer($footer);
        }
    }
    
    /**
     * Sets the view object. If the the reference variable is already a view instance,
     * it performs [View::set_filename] instead.
     *
     *     $layout = Layout::set_path($view, 'new/file/path');
     *
     * @param   string  view  reference to a view variable
     * @param   string  path  view filename
     */
    public static function set_path(& $view, $path)
    {
        if (!empty($view) && is_object($view) && method_exists($view, 'set_filename'))
        {
            $view->set_filename($path);
        }
        else
        {
            $view = View::factory($path);
        }
    }
    
	/**
	 * Magic method, assigns values to be exposed to the view.
	 *
	 *     $layout->foo = 'something';
	 *
	 * @param   string  variable name
	 * @param   mixed   value
	 * @return  void
	 */
    public function __set($name, $value)
    {
        $name = strtolower($name);
        
        if (in_array($name, array('body', 'header', 'footer')))
        {
            throw new Kohana_Exception('Cannot overwrite value for :name.', array(
                ':name' => $name,
            ));
        }
        
        $this->template->$name = $value;
    }
    
	/**
	 * Magic method, returns the value set in the view.
	 *
	 *     $value = $layout->foo;
	 *
	 * [!!] If the variable has not yet been set, an exception will be thrown.
	 *
	 * @param   string  variable name
	 * @return  mixed
	 * @throws  Kohana_Exception
	 */
    public function & __get($name)
    {
        $name = strtolower($name);
        
        return $this->template->$name;
    }
    
    /**
     * Sets the template view object file path.
     *
     *     $layout->set_template('new/file/path');
     *
     * @param   string  path  view filename
     * @return Layout
     */
    public function set_body($path)
    {
        self::set_path($this->template->body, $path);
        return $this;
    }
    
    /**
     * Sets the template view object file path.
     *
     *     $layout->set_template('new/file/path');
     *
     * @param   string  path  view filename
     * @return Layout
     */
    public function set_template($path)
    {
        self::set_path($this->template, $path);
        return $this;
    }
    
    /**
     * Sets the header view object file path.
     *
     *     $layout->set_header('new/file/path');
     *
     * @param   string  path  view filename
     * @return Layout
     */
    public function set_header($path)
    {
        self::set_path($this->template->header, $path);
        return $this;
    }
    
    /**
     * Sets the footer view object file path.
     *
     *     $layout->set_footer('new/file/path');
     *
     * @param   string  path  view filename
     * @return Layout
     */
    public function set_footer($path)
    {
        self::set_path($this->template->footer, $path);
        return $this;
    }
    
    /**
     * Returns the template view object. Can also be used to assign values to the view file.
     *
     *     $layout->template();
     *
     * @param   string  template view filename
     * @param   string  header view filename
     * @param   string  footer view filename
     * @return  Layout
     */
    public function template()
    {
        return $this->template;
    }
    
    
    /**
     * Magic method, returns the output of the template [View::render].
     *
     * @return  string
     * @uses    View::render
     */
    public function __toString()
    {
        try
        {
            return $this->template->render();
        }
        catch (Exception $e)
        {
            // Display the exception message
            Kohana_Exception::handler($e);

            return '';
        }
    }
}