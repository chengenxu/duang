
 <table class="table">
 <th>名字</th>
 <th>操作</th>
 <?php foreach($data as $val)
 	{ ?>
	<tr>
		<td><?=$val['name']?></td>
		<td><a href="?r=cart/del&id=<?=$val['id']?>">删除</a>-<a href="?r=cart/upd&id=<?=$val['id']?>">修改</a></td>

	</tr>

 	<?php
 	}
 ?>
 </table>