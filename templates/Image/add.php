<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 * @var \Cake\Collection\CollectionInterface|string[] $gallery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Image'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="image form content">
            <?= $this->Form->create($image, array('enctype'=>'multipart/form-data')) ?>
            <fieldset>
                <legend><?= __('Add Image') ?></legend>

                    <?= $this->Form->control('file', ['type'=>'file', 'id'=>'upload']) ?>
                    <img id="preview" src="" alt="">
                    <?= $this->Form->control('altText',['required' => false]) ?>
                    <?= $this->Form->control('description',['required' => false]) ?>
                    <?= $this->Form->control('slug',['required' => false]) ?>
                    <?= $this->Form->control('gallery._ids', [
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $gallery
                    ]) ?>

            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
