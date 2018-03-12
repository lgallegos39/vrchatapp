<h1>Edit Avatar</h1>
<?php
    echo $this->Form->create($avatar);
    echo $this->Form->control('name');
    echo $this->Form->button(__('Save Avatar'));
    echo $this->Form->end();
?>
