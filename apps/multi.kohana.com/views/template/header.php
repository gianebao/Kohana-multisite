<h2>&lt;header&gt;</h2>
<p><a href="/">General</a> | <strong>Layout</strong></p>
<p>
    Header template. This component usually contains title and navigation.
</p>
<?php if (empty($message)): ?>
    <p id="results" class="fail">✘ Assign value for <code>$this->layout->header->message</code> in Controller_Layout::action_index.</p>
<?php else: ?>
    <p id="results" class="pass">✔ Controller_Layout::action_index assigned:
        "<em><?php echo $message ?></em>" successfully.</p>
<?php endif ?>
<h2>&lt;header&gt;</h2>