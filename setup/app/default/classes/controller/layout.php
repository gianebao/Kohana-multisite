<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Layout extends Controller_Template_Layout
{
    // disable the footer
    public $footer = null;
    
	public function action_index()
	{
        /**
         * assign remove the comments to assign the values
         **/
        //$this->layout->header->message = 'This is the title.';
        //$this->layout->body->message = 'Phasellus cursus eleifend eleifend. In hac habitasse platea dictumst. Mauris et eros vitae velit elementum faucibus. Pellentesque in tortor et est ultrices porta ut non ligula. Vivamus venenatis lectus id arcu vestibulum sit amet pulvinar erat interdum. Donec porttitor elit sed mi dictum id condimentum leo ornare. Fusce auctor dui id felis ullamcorper euismod.';
	}

} // End Welcome
