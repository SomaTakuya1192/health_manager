<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('内容') ?></li>
        <li><?= $this->Html->link(__('新規ユーザ追加'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('ユーザ情報一覧'), ['controller' => 'Userinfo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('新規ユーザ情報を追加'), ['controller' => 'Userinfo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('体重一覧'), ['controller' => 'Userweight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('体重を追加する'), ['controller' => 'Userweight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('ユーザ一覧') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('名前') ?></th>
                <th scope="col"><?= $this->Paginator->sort('暗証キー') ?></th>
                <th scope="col"><?= $this->Paginator->sort('権限') ?></th>
                <th scope="col" class="actions"><?= __('編集') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細/'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('編集/'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
