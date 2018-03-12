<h1>Add User</h1>
<?php
    echo $this->Form->create($avatar);
    echo $this->Form->control('id');
    echo $this->Form->control('name');
    echo $this->Form->button('Save Avatar');
    echo $this->Form->end();
?>