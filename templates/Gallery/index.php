<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Gallery> $gallery
 */
?>
<div class="gallery index content">
    <?= $this->Html->link(__('New Gallery'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gallery') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gallery as $gallery): ?>
                <tr>
                    <td><?= $this->Number->format($gallery->id) ?></td>
                    <td><?= h($gallery->slug) ?></td>
                    <td><?= h($gallery->name) ?></td>
                    <td><?= h($gallery->created) ?></td>
                    <td><?= h($gallery->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gallery->slug]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gallery->slug]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gallery->id], ['confirm' => __('Are you sure you want to delete gallery: {0}?', $gallery->name)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
