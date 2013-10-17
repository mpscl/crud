<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('User', array('action' => 'edit'));
    echo $this->Form->input('firstname');
	echo $this->Form->input('lastname');
	echo $this->Form->input('email');
	echo $this->Form->input('username');
	echo $this->Form->input('password');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save');

 ?>