<?php

$team_members = array();
$team_members[] = array('name' => 'John Doe',
	'position' => 'Sales Manager',
	'experience' => '10',
	'email' => 'john.doe@fakecars.com',
	);
$team_members[] = array('name' => 'Jane Smith',
	'position' => 'Lead Salesperson',
	'experience' => '8',
	'email' => 'jane.smith@fakecars.com',
	);
$team_members[] = array('name' => 'Emily Johnson',
	'position' => 'Customer Support',
	'experience' => '5',
	'email' => 'emily.johnson@fakecars.com',
	);
?>
<div class="container">
    <?php foreach ($team_members as $member) { ?>
        <div class="team-member">
            <h3><?php echo $member['name'] ?></h3>
            <p>Position: <?php echo $member['position'] ?></p>
            <p>Experience: <?php echo $member['experience'] ?> years</p>
            <p>Email: <?php echo $member['email'] ?></p>
        </div>
    <?php } ?>
</div>