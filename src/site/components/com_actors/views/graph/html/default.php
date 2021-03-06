<?php defined('KOOWA') or die; ?>

<div class="row">
	<div class="span8">
		<?= @helper('ui.header', array()) ?>
		
		<?php if($type == 'leadables'): ?>
		<h3><?= @text('COM-ACTORS-SOCIALGRAPH-FOLLOWERS-ADD-TITLE') ?></h3>
        <?php endif; ?>
		<?php $url = 'view='.@listItemView()->getName().'&layout=list&get=graph&type='.$type.'&id='.$actor->id; ?>
        <?= @helper('ui.filterbox', @route($url)) ?>
		<div id="an-actor-socialgraph" class="an-entities" data-trigger="InfiniteScroll" data-url="<?= @route($url) ?>">	
	       <?= @template('list') ?>
		</div>
	</div>
	
	<div class="span4 visible-desktop">
		<h3 class="block-title"><?= @text('COM-ACTORS-SOCIALGRAPH-STATS') ?></h3>
		<div class="block-content an-socialgraph-stat">
            <?php if($actor->isFollowable()) : ?>
            <div class="stat-count">
            	<?= $actor->followerCount ?>
            	<span class="stat-name"><?= @text('COM-ACTORS-SOCIALGRAPH-FOLLOWERS') ?></span>
            </div>
            <?php endif; ?>
                    
            <?php if($actor->isLeadable()) : ?>
            <div class="stat-count">
            <?= $actor->leaderCount ?>
            <span class="stat-name"><?= @text('COM-ACTORS-SOCIALGRAPH-LEADERS') ?></span>
            </div>        
            <?php endif; ?>
                    
            <?php if($actor->isLeadable() && $actor->isFollowable() && $actor->mutualCount) : ?>
            <div class="stat-count">
            <?= $actor->mutualCount ?>
            <span class="stat-name"><?= @text('COM-ACTORS-SOCIALGRAPH-MUTUALS') ?></span>
            </div>
            <?php endif; ?>
        </div>
	</div>
</div>