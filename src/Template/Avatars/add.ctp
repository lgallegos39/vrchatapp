<h1>Add Avatar</h1>
<?php
    echo $this->Form->create($avatar);
    echo $this->Form->control('name');
    echo $this->Form->button('Save Avatar');
    echo $this->Form->end();
?>