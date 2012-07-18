<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Layout templating.
 *
 * @package    Layout
 * @category   Template
 * @author     Gian Carlo Val Ebao <gianebao@gmail.com>
 */
class Layout_Controller extends Controller
{

    /**
     * @var  boolean  auto render template
     */
    public $auto_render = TRUE;
    
    /**
     * Path of the contents container folder relative to the view folder.
     */
    public $content_path = 'content';
    
    /**
     * template template file
     */
    public $template = 'template/default';
    
    /**
     * header template file
     */
    public $header = 'template/header';

    /**
     * footer template file
     */
    public $footer = 'template/footer';

    /**
     * layout object
     */
    public $layout = null;
    
    /**
     * Loads the template [View] object.
     */
    public function before()
    {
        parent::before();
        
        // Just in case the whole controller does not need rendiring.
        if ($this->auto_render !== TRUE)
        {
            return true;
        }
        
        $controller = $this->request->controller();
        $action = $this->request->action();
        
        
        $body = $this->content_path . DIRECTORY_SEPARATOR
            . $controller . DIRECTORY_SEPARATOR . $action;
        
        // Create content layout depending on the controller and action.
        $this->layout = Layout::factory($this->template, $body);
        
        // the following can also be manually called in the action method.
        if (!empty($this->header))
        {
            $this->layout->set_header($this->header);
        }
        
        if (!empty($this->footer))
        {
            $this->layout->set_footer($this->footer);
        }
    }
    
    /**
     * Assigns the template [View] as the request response.
     */
    public function after()
    {
        if ($this->auto_render === TRUE)
        {
            $this->response->body($this->layout);
        }
        
        parent::after();
    }
}
