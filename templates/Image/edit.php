<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 * @var string[]|\Cake\Collection\CollectionInterface $gallery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $image->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Image'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="image form content">
            <?= $this->Form->create($image) ?>
            <fieldset>
                <legend><?= __('Edit Image') ?></legend>
                <?php
                    echo $this->Form->control('type');
                    echo $this->Form->control('altText');
                    echo $this->Form->control('description');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('gallery._ids', [
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $gallery
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
