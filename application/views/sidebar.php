<div id="sidebar_container">
    <img class="paperclip" src="<?=  base_url()?>public/images/paperclip.png" alt="paperclip" />
	<div class="sidebar">
		<h3>Search:</h3>
		<form method="get" action="<?= base_url() ?>blog/search" id="search">
			<p style="padding: 0 0 9px 0;"><input class="search" type="text" name="query" placeholder="Type your search"/></p>
			<p><a class="subscribe" href="javascript:void(0);" onclick="$('#search').submit();" >Find</a></p>
		</form>
	</div>
    <div class="sidebar">
        <h3>Newsletter</h3>
        <p>If you would like to receive our newletter, please enter your email address and click 'Subscribe'.</p>
        <form method="post" action="#" id="subscribe">
          <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
          <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
        </form>
    </div>
    <img class="paperclip" src="<?=  base_url()?>public/images/paperclip.png" alt="paperclip" />
    <div class="sidebar">
        <h3>Latest Blog</h3>
        <h4><?=$posts[0]["post_title"];?></h4>
        <h5><?=date('d-m-Y h:i A',strtotime($posts[0]['date_added']))?></h5>
        <p><?=substr(strip_tags($posts[0]['post']), 0, 200).'...';?></p>
        <p><a href="<?=  base_url()?>index.php/blog/post/<?=$posts[0]['post_id']?>">Read More</a></p>
    </div>
</div>

