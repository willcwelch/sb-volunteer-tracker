<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Affiliation'), ['action' => 'edit', $affiliation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Affiliation'), ['action' => 'delete', $affiliation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Affiliations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="affiliations view large-9 medium-8 columns content">
    <h3><?= h($affiliation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($affiliation->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($affiliation->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Organizations') ?></h4>
        <?php if (!empty($affiliation->organizations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($affiliation->organizations as $organizations): ?>
            <tr>
                <td><?= h($organizations->id) ?></td>
                <td><?= h($organizations->name) ?></td>
                <td><?= h($organizations->description) ?></td>
                <td><?= h($organizations->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Organizations', 'action' => 'view', $organizations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Organizations', 'action' => 'edit', $organizations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organizations', 'action' => 'delete', $organizations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
