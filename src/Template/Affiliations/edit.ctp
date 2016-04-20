<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $affiliation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $affiliation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Affiliations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="affiliations form large-9 medium-8 columns content">
    <?= $this->Form->create($affiliation) ?>
    <fieldset>
        <legend><?= __('Edit Affiliation') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('organizations._ids', ['options' => $organizations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
