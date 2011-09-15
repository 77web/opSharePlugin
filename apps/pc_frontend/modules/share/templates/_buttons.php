<?php if($isShow): ?>
  <?php $url = url_for($sf_request->getParameter('module').'/'.$sf_request->getParameter('action').'?id='.$sf_request->getParameter('id'), true); ?>
  <div id="shareButtons" class="parts">
    <?php if($isMixi): ?><?php include_partial('share/mixi', array('mixiCode'=>$mixiCode, 'url'=>$url, 'title'=>$title)); ?><?php endif; ?>
    <?php if($isTwitter): ?><?php include_partial('share/twitter', array('twitterVia'=>$twitterVia, 'title'=>$title)); ?><?php endif; ?>
    <?php if($isFacebook): ?><?php include_partial('share/facebook', array('title'=>$title, 'url'=>$url)); ?><?php endif; ?>
    <?php if($isGoogle): ?><?php include_partial('share/google', array('title'=>$title, 'url'=>$url)); ?><?php endif; ?>
  </div>
<?php endif; ?>