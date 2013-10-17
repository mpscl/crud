<h1>Registro de usuarios</h1>
<?php echo $this->Html->link('Add Post', array('controller' => 'users', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Ultima Modificacion</th> 
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['firstname'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['lastname']; ?></td>
        <td><?php echo $user['User']['email']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['password']; ?></td>
        <td><?php echo $user['User']['modified']; ?></td>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']));?><td>
        <td>
        <?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $user['User']['id']),
            array('confirm' => 'Are you sure?'));
        ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>