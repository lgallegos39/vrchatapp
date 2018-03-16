<h1>Edit Comment</h1>
<?php
    echo $this->Form->create($comment);
    echo $this->Form->control('name');
    echo $this->Form->button(__('Save Comment'));
    echo $this->Form->end();
?>
