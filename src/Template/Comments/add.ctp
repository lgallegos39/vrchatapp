<h1>Add Comment</h1>
<?php
    echo $this->Form->create($comment);
    echo $this->Form->control('comment');
    echo $this->Form->button('Save Comment');
    echo $this->Form->end();
?>