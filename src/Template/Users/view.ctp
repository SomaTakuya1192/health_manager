<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userinfo'), ['controller' => 'Userinfo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userinfo'), ['controller' => 'Userinfo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userweight'), ['controller' => 'Userweight', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userweight'), ['controller' => 'Userweight', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Userinfo') ?></h4>
        <?php if (!empty($user->userinfo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Sex') ?></th>
                <th scope="col"><?= __('Birthday') ?></th>
                <th scope="col"><?= __('Hight') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->userinfo as $userinfo): ?>
            <tr>
                <td><?= h($userinfo->id) ?></td>
                <td><?= h($userinfo->user_id) ?></td>
                <td><?= h($userinfo->sex) ?></td>
                <td><?= h($userinfo->birthday) ?></td>
                <td><?= h($userinfo->hight) ?></td>
                <td><?= h($userinfo->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Userinfo', 'action' => 'view', $userinfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Userinfo', 'action' => 'edit', $userinfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userinfo', 'action' => 'delete', $userinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Userweight') ?></h4>
        <?php if (!empty($user->userweight)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->userweight as $userweight): ?>
            <tr>
                <td><?= h($userweight->id) ?></td>
                <td><?= h($userweight->user_id) ?></td>
                <td><?= h($userweight->weight) ?></td>
                <td><?= h($userweight->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Userweight', 'action' => 'view', $userweight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Userweight', 'action' => 'edit', $userweight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userweight', 'action' => 'delete', $userweight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userweight->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
