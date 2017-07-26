<h1>Upload File</h1>
<div class="content">
    <?= $this->Flash->render() ?>
    <div class="upload-frm">
        <?php echo $this->Form->create($uploadData, ['type' => 'file']); ?>
        	<?php echo $this->Form->input('title', ['type' => 'text', 'class' => 'form-control']); ?>
        	<?php echo $this->Form->input('price', ['type' => 'text', 'class' => 'form-control']); ?>
        	<?php echo $this->Form->input('description', ['type' => 'text', 'class' => 'form-control']); ?>
            <?php echo $this->Form->input('category', ['type' => 'select', 'class' => 'form-control', 'options' => $categories]); ?>
            <?php echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control']); ?>
            <?php echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'form-controlbtn btn-default']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>