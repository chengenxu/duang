<?php 

 ?> 
 <form action="?r=cart/save" method="post">
 <input type="hidden" name="id" value="<?=$data['id']?>">
 <input type="text" name="name" value="<?=$data['name']?>">
<input type="submit" value="确定">
</form>