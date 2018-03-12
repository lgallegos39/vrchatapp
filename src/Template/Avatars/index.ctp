<h1>Avatars</h1>
<table>
  <tr>
    <th>Name</th>
    <th>Created</th>
    <th>Actions</th>
    <th>Description</th>
  </tr>
  <?php foreach ($avatars as $avatar): ?>
    <tr>
      <td><?php echo $avatar->name; ?></td>
      <td><?php echo $avatar->created; ?></td>
      <td>
        <?php echo $this->Html->link('View', ['action' => 'view', $avatar->id]); ?>
        <?php echo $this->Html->link('Edit', ['action' => 'edit', $avatar->id]); ?>
      </td>
      <td><?php echo $avatar->description; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<p><?php echo $this->Html->link('Add new Avatar', ['action' => 'add']); ?></p>