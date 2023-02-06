<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallery $gallery
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gallery'), ['action' => 'edit', $gallery->slug], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gallery'), ['action' => 'delete', $gallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gallery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gallery'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gallery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gallery view content">
            <h3><?= h($gallery->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($gallery->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($gallery->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gallery->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($gallery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($gallery->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Image') ?></h4>
                <?php if (!empty($gallery->image)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('Picture') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('AltText') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($gallery->image as $image) : ?>
                        <tr>
                            <td><?= h($image->id) ?></td>
                            <td><?= h($image->file) ?></td>
                            <td><img src="/file/<?= h($image->file) ?>" alt=""></td>
                            <td><?= h($image->type) ?></td>
                            <td><?= h($image->altText) ?></td>
                            <td><?= h($image->description) ?></td>
                            <td><?= h($image->slug) ?></td>
                            <td><?= h($image->created) ?></td>
                            <td><?= h($image->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Image', 'action' => 'view', $image->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Image', 'action' => 'edit', $image->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Image', 'action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
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
