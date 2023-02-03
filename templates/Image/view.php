<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Image'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="image view content">
            <h3><?= h($image->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('File') ?></th>
                    <td>
                        <img src="<?= 'file/'.h($image->file) ?>">
                    </td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($image->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($image->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($image->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($image->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($image->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('AltText') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($image->altText)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($image->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Gallery') ?></h4>
                <?php if (!empty($image->gallery)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Filename') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Alt') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($image->gallery as $gallery) : ?>
                        <tr>
                            <td><?= h($gallery->id) ?></td>
                            <td><?= h($gallery->filename) ?></td>
                            <td><?= h($gallery->type) ?></td>
                            <td><?= h($gallery->alt) ?></td>
                            <td><?= h($gallery->slug) ?></td>
                            <td><?= h($gallery->created) ?></td>
                            <td><?= h($gallery->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Gallery', 'action' => 'view', $gallery->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Gallery', 'action' => 'edit', $gallery->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gallery', 'action' => 'delete', $gallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gallery->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
