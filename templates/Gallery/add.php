<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $gallery
 * @var \Cake\Collection\CollectionInterface|string[] $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Gallery'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gallery form content">
            <?= $this->Form->create($gallery) ?>
            <fieldset>
                <legend><?= __('Add Gallery') ?></legend>
                <?php
                    echo $this->Form->control('slug');
                    echo $this->Form->control('name');
                    echo $this->Form->control('images', [
                        'type' => 'select',
                        'multiple' => true,
                        'options' => $images,
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
