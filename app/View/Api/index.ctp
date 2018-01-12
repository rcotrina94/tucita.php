<div class="response-info">
<pre class="prettyprint"><span class="meta nocode"><b>HTTP 200 OK</b>
<b>Allow:</b> <span class="lit">GET, HEAD, OPTIONS</span>
<b>Content-Type:</b> <span class="lit">application/json</span>
<b>Vary:</b> <span class="lit">Accept</span>

</span>{
	"doctores": "<?php echo $this->Html->link('/doctores', array(
		'controller'=> 'api',
		'action'=>'doctores')) ?>",
	"reservas": "<?php echo $this->Html->link('/reservas', array(
		'controller'=> 'api',
		'action'=>'reservas')) ?>"
}</pre>
</div>
