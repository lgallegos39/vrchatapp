
<h1><?php echo $comment->name; ?></h1>
 <p><?php echo $comment->description; ?></p>
 <div>
     <?php
        echo $this->Form->create($comment);
        echo $this->Form->control('comment');
        echo $this->Form->button('Add comment');
        echo $this->Form->end();
     ?>
 </div>