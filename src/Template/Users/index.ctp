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

    <!--ここに検索フォームを追加する-->
    <?=$this->Form->create(null,
        ['type'=>'post',
        'url'=>['controller'=>'Users',
            'action'=>'index'
        ]]) ?>
    <div>ユーザ名</div>
    <div><?=$this->Form->text('Users.find') ?></div>
    <div><?=$this->Form->submit('検索') ?></div>
    <?=$this->Form->end() ?>
    <br>
    <!--以下不明なテーブルコマンド-->
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
            <?php foreach($data->toArray() as $obj): ?>
            <tr>
            <td><?=h($obj->id) ?></td>
            <td><a href="<?=$this->Url->build(['controller'=>'Users',
                'action'=>'edit']); ?>?id=<?=$obj->id ?>">
                <?= h($obj->username) ?></a></td>
            <td><?= h($obj->password) ?></td>
            <td><?= h($obj->role) ?></td>
            <td class="actions">
                    <?= $this->Html->link(__('詳細/'), ['action' => 'view', $obj->id]) ?>
                    <?= $this->Html->link(__('編集/'), ['action' => 'edit', $obj->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $obj->id], ['confirm' => __('Are you sure you want to delete # {0}?', $obj->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>



    
    <?php /*
    <table>
    <thead><tr>
        <th>id</th><th>username</th><th>password</th><th>role</th><th></th>
    </tr></thead>
    <?php foreach($data->toArray() as $obj): ?>
    <tr>
        <td><?=h($obj->id) ?></td>
        <td><a href="<?=$this->Url->build(['controller'=>'Users',
        'action'=>'edit']); ?>?id=<?=$obj->id ?>">
        <?=h($obj->username) ?></a></td>
    <td><?=h($obj->password) ?></td>
    <td><?=h($obj->role) ?></td>
    <td><a href="<?=$this->Url->build(['controller'=>'Users',
        'action'=>'delete']); ?>?id=<?=$obj->id ?>">delete</a></td>
    </tr>
<?php endforeach; ?>
</table>
*/?>
    <!--ここまでは検索フォーム関連-->
<?php /*
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
*/?>
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