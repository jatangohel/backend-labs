<!-- Display the following array in the table with headers in html and extract the value pairs.
 $programs=array(

    array(
        'program_name'=>'web development',
        'hours'=>'50',
        'instructor'=>'Hamit'),
    array(
        'program_name'=>'software testing',
        'hours'=>'30',
        'instructor'=>'john'),
    array(
        'program_name'=>'business Analyst',
        'hours'=>'25',
        'instructor'=>'vikram')
    ); -->
    <?php
$programs=array(
array(
    'program_name'=>'Web Development',
    'hours'=>'50',
    'instructor'=>'Hamit'),
array(
    'program_name'=>'Software Testing',
    'hours'=>'30',
    'instructor'=>'john'),
array(
    'program_name'=>'Business Analyst',
    'hours'=>'25',
    'instructor'=>'vikram')
);
echo "<h1>MCIT Programs</h1>";
$keys=array_keys($programs);
echo "<table border=\"2\">";
echo "<tr>";
echo "<th>Program Name</th>";
echo "<th>Number of hours</th>";
echo "<th>Instructor</th>";
echo "</tr>";
echo "<tr>";
for($i=0;$i<count($programs);$i++){
    foreach($programs[$keys[$i]] as $key => $value){
    echo "<td>$value</td>";
}
echo "</tr>";
}
echo "</table>";
?>
