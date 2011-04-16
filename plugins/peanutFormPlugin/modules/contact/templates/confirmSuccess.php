<p>Nous vous remercions de nous avoir contacté.<br />
Voici les informations que vous nous avez envoyé :</p>

<ul>
	<li>Nom : <?php echo $sf_params->get('name') ?></li>
	<li>Email : <?php echo $sf_params->get('mail') ?></li>
</ul>

<p>Le message est le suivant : </p>
<p><?php echo $sf_params->get('message') ?></p>