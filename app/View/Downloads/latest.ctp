<h3>Download the lastest graph files</h3>

<div style="margin-left:40px">
<p>
  <h5>
    <li><?php echo $this->Html->link('Graphe tri-partite (Acteurs, Projets,
      Mots-clés)', array('controller'=>'downloads', 'action'=>'gen', '3p')); ?></li>
    <li><?php echo $this->Html->link('Acteurs reliés par mots-clés', array('controller'=>'downloads', 'action'=>'gen', 'abyk')); ?></li>
    <li><?php echo $this->Html->link('Acteurs reliés par projets', array('controller'=>'downloads', 'action'=>'gen', 'abyp')); ?></li>
    <li><?php echo $this->Html->link('Projets reliés par mot-clés', array('controller'=>'downloads', 'action'=>'gen', 'pbyk')); ?></l> 
    <li><?php echo $this->Html->link('Mots-clés reliés par acteurs ', array('controller'=>'downloads', 'action'=>'gen', 'kbyp')); ?></li>
  </h5>
</p>
</div>

