<?php
/**
 *  Available variables:
 *  - $twitter_id = Profile id (nick)
 *  - $status = Twitter status message,
 *  - $profile_link = link to Twitter profile
 */
?>
<p class="tweet"><?php print $status ?><br /><em title="<?php print $created ?>"><?php print $created_ago ?></em></p>
<?php print $profile_link ?>