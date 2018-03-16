<h1>Avatars</h1>
<table>
  <tr>
    <th>Name</th>
    <th>Created</th>
    <th>Actions</th>
    <th>Description</th>
  </tr>
  <?php foreach ($comments as $comment): ?>
    <tr>
      <td><?php echo $comment->comment; ?></td>
      <td><?php echo $comment->created; ?></td>
      <td>
        <?php echo $this->Html->link('View', ['action' => 'view', $comment->id]); ?>
        <?php echo $this->Html->link('Edit', ['action' => 'edit', $comment->id]); ?>
      </td>
      <td><?php echo $comment->description; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<p><?php echo $this->Html->link('Add new Comment', ['action' => 'add']); ?></p>