<?php 
$tableau=array(
    'fat'=>16,
    'sugar'=>51,
    'salt'=>6.3,
);

$tab2=[
    ['name'=>'Ivy',"age"=>32,"country"=>"UK"],
    ['name'=>'Emi',"age"=>24,"country"=>'Japan'],
    ['name'=>'Luke',"age"=>47,"country"=>'USA'],
    ['name'=>'Hyunji','age'=>28,"country"=>'Korea'],
];
?>

<!DOCTYPE html>
<html>
    <head>...</head>
    <body>
        <h1>The Candy Store</h1>
        <h2> nutrition (per 100G)</h2>
        <div>
            <p>Fat: <?php echo $tableau['fat'] ?> %</p>
            <p>Sugar: <?php echo $tableau['sugar'] ?> %</p>
            <p>Salt: <?php echo $tableau['salt'] ?> %</p>
        </div>
        <div>
            <h1>List of Members</h1>
            <h2>Group A</h2>
            <div>
                <p>Name : <?= $tab2[0]['name']; ?></p>
                <p>Age : <?= $tab2[0]['age']; ?> </p>
                <p>Country : <?= $tab2[0]['country']; ?></p>
            </div>
        </div>
    </body>
</html>