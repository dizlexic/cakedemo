<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $gallery
 * @var string[]|\Cake\Collection\CollectionInterface $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gallery->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gallery->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gallery'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gallery form content">
            <?= $this->Form->create($gallery) ?>
            <fieldset>
                <legend><?= __('Edit Gallery') ?></legend>
                <?php
                    echo $this->Form->control('slug');
                    echo $this->Form->control('name');
                    echo $this->Form->control('image._ids', ['options' => $image]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
