<div class="page-content">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin')
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
    echo $this->Form->end();?>
</div>