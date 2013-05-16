<h2>&lt;body&gt;</h2>

<p>Body contents. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec est magna, sed volutpat lectus. Vestibulum a risus ligula, at laoreet mauris. Sed suscipit quam a nisl laoreet ac pulvinar orci sollicitudin. Maecenas congue eleifend dolor vitae ornare. Cras tincidunt hendrerit purus, sed porttitor purus hendrerit ut. Integer eget tempor dui. Praesent fermentum placerat urna, eu mattis leo interdum non. Sed dignissim justo sit amet arcu sollicitudin dignissim a sit amet velit.</p>
<?php if (empty($message)): ?>
    <p id="results" class="fail">✘ Assign value for <code>$this->layout->message</code> in Controller_Layout::action_index.</p>
<?php else: ?>
    <p id="results" class="pass">✔ Controller_Layout::action_index assigned:
        "<em><?php echo $message ?></em>" successfully.</p>
<?php endif ?>
<h2>&lt;/body&gt;</h2>