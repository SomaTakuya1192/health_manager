<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo[]|\Cake\Collection\CollectionInterface $userinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Userinfo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userinfo index large-9 medium-8 columns content">
    <h3><?= __('Userinfo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userinfo as $userinfo): ?>
            <tr>
                <td><?= $this->Number->format($userinfo->id) ?></td>
                <td><?= $userinfo->has('user') ? $this->Html->link($userinfo->user->id, ['controller' => 'Users', 'action' => 'view', $userinfo->user->id]) : '' ?></td>
                <td><?= $this->Number->format($userinfo->sex) ?></td>
                <td><?= $this->Number->format($userinfo->birthday) ?></td>
                <td><?= $this->Number->format($userinfo->hight) ?></td>
                <td><?= h($userinfo->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userinfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userinfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
