<?php
require_once "../connectdb.php";
require "random.php";

// NB: Now that foreign keys are in place, the order in which table data is
// deleted (and created) is relevant.

//empty existing surveydata table
$surveyanswer = "DELETE from surveyanswer";
if (mysqli_query($CON, $surveyanswer)) {
  echo "<p>surveyanswer data deleted</p>";
} else {
  echo "<p>Error deleting surveyanswer data: " . mysqli_error($CON) . "</p>";
}

//empty existing project table
$project = "DELETE from project";
if (mysqli_query($CON, $project)) {
  echo "<p>Project data deleted</p>";
} else {
  echo "<p>Error deleting project data: " . mysqli_error($CON) . "</p>";
}

//empty existing unit table
$unit = "DELETE from unit";
if (mysqli_query($CON, $unit)) {
  echo "<p>Unit data deleted</p>";
} else {
  echo "<p>Error deleting unit data: " . mysqli_error($CON) . "</p>";
}

//empty existing staff table
$staff = "DELETE from staff";
if (mysqli_query($CON, $staff)) {
  echo "<P>Staff data deleted</P>";
} else {
  echo "<p>Error deleting staff data: " . mysqli_error($CON) . "</p>";
}

//empty existing student table
$student = "DELETE from student";
if (mysqli_query($CON, $student)) {
  echo "<P>Student data deleted</P>";
} else {
  echo "<p>Error deleting student data: " . mysqli_error($CON) . "</p>";
}

//insert student (1000) sample data
$insert = 'INSERT INTO student (stu_ID, stu_FirstName, stu_LastName, stu_Campus, stu_Email, stu_Password) VALUES
(216000000,"Timothy","Smith",3,"SmithT@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216116590,"Larry","Jones",2,"JonesL@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216600366,"Catherine","Taylor",1,"TayloC@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216030213,"Lisa","Williams",3,"WilliL@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216252283,"Pamela","Brown",2,"BrownP@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216822724,"Cynthia","Davies",3,"DavieC@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216420635,"Jonathan","Evans",2,"EvansJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216830213,"Brandon","Wilson",1,"WilsoB@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216988272,"Nancy","Thomas",2,"ThomaN@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216986348,"Dennis","Roberts",3,"RoberD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216147717,"Amy","Johnson",1,"JohnsA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216901983,"Jack","Lewis",2,"LewisJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216469334,"James","Walker",1,"WalkeJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216152608,"Richard","Robinson",1,"RobinR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216207865,"Paul","Wood",3,"WoodP@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216746852,"Donna","Thompson",2,"ThompD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216337658,"Kimberly","White",3,"WhiteK@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216232216,"Anna","Watson",3,"WatsoA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216429653,"David","Jackson",2,"JacksD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216909984,"Stephanie","Wright",3,"WrighS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216463558,"Steven","Green",2,"GreenS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216592291,"Christine","Harris",3,"HarriC@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216786574,"Nicholas","Cooper",2,"CoopeN@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216983844,"Justin","King",1,"KingJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216528480,"Samuel","Lee",1,"LeeS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216314056,"Kathleen","Martin",2,"MartiK@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216965849,"Linda","Clarke",2,"ClarkL@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216275552,"Amanda","James",2,"JamesA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216779566,"Deborah","Morgan",2,"MorgaD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216412040,"Gary","Hughes",1,"HugheG@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216762187,"Carolyn","Edwards",1,"EdwarC@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216498622,"Patricia","Hill",1,"HillP@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216567433,"Daniel","Moore",3,"MooreD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216249111,"Frank","Clark",2,"ClarkF@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216168384,"Angela","Harrison",1,"HarriA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216883858,"Ruth","Scott",3,"ScottR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216427960,"Patrick","Young",2,"YoungP@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216391202,"Jacob","Morris",1,"MorriJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216360811,"Benjamin","Hall",1,"HallB@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216902992,"Brenda","Ward",2,"WardB@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216292829,"Jeffrey","Turner",1,"TurneJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216720992,"Kevin","Carter",1,"CarteK@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216765045,"Carol","Phillips",3,"PhillC@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216440236,"Melissa","Mitchell",2,"MitchM@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216249197,"Nicole","Patel",1,"PatelN@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216828121,"Mary","Adams",2,"AdamsM@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216671593,"Margaret","Campbell",2,"CampbM@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216587493,"Barbara","Anderson",3,"AnderB@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216782631,"Karen","Allen",3,"AllenK@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216949905,"Jason","Cook",1,"CookJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216656298,"Rebecca","Bailey",2,"BaileR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216685859,"Katherine","Parker",2,"ParkeK@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216543826,"William","Miller",2,"MilleW@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216454582,"Thomas","Davis",2,"DavisT@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216242484,"Sarah","Murphy",2,"MurphS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216636419,"Emily","Price",2,"PriceE@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216275634,"Mark","Bell",1,"BellM@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216184964,"Sharon","Baker",2,"BakerS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216440367,"Ronald","Griffiths",3,"GriffR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216402248,"Anthony","Kelly",3,"KellyA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216674327,"Alexander","Simpson",1,"SimpsA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216734638,"Kenneth","Marshall",3,"MarshK@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216380225,"Christopher","Collins",3,"ColliC@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216800271,"John","Bennett",2,"BenneJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216585007,"Andrew","Cox",1,"CoxA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216021355,"Michelle","Richardson",2,"RichaM@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216049775,"Joseph","Fox",3,"FoxJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216836356,"Shirley","Gray",3,"GrayS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216510372,"Edward","Rose",3,"RoseE@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216254575,"Betty","Chapman",3,"ChapmB@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216375217,"Scott","Hunt",3,"HuntS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216498790,"Ashley","Robertson",1,"RoberA@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216708060,"Ryan","Shaw",3,"ShawR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216425301,"Dorothy","Reynolds",2,"ReynoD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216848062,"Elizabeth","Lloyd",1,"LloydE@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216435225,"Matthew","Ellis",3,"EllisM@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216510246,"Robert","Richards",2,"RichaR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216935793,"Samantha","Russell",1,"RusseS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216181579,"Helen","Wilkinson",1,"WilkiH@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216040637,"Jerry","Khan",2,"KhanJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216926394,"Virginia","Graham",1,"GrahaV@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216817132,"Susan","Stewart",3,"StewaS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216390639,"Gregory","Reid",3,"ReidG@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216072283,"Michael","Murray",3,"MurraM@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216270368,"Sandra","Powell",3,"PowelS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216120029,"Brian","Palmer",1,"PalmeB@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216333608,"Rachel","Holmes",1,"HolmeR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216608767,"Laura","Rogers",2,"RogerL@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216725302,"Emma","Stevens",2,"SteveE@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216843094,"Charles","Walsh",2,"WalshC@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216553948,"Joshua","Hunter",3,"HunteJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216801834,"Donald","Thomson",1,"ThomsD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216338930,"Jessica","Matthews",2,"MatthJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216542434,"Eric","Ross",2,"RossE@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216899114,"Raymond","Owen",3,"OwenR@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216446129,"Jennifer","Mason",3,"MasonJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216026988,"Janet","Knight",1,"KnighJ@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216776800,"George","Kennedy",2,"KenneG@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216820558,"Stephen","Butler",2,"ButleS@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c"),
(216043880,"Debra","Saunders",2,"SaundD@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c")';
for ($i = 0; $i < 900; $i += 1)
    $insert .= ',(217' . sprintf("%06d", $i) . ',"FirstName' . $i . '","LastName' . $i . '",' . rand(1, 3) . ',"student' . $i . '@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c")';
if (mysqli_query($CON, $insert)) {
  echo "<p>Sample student data inserted</p>";
} else {
  echo "<p>Error inserting sample student data: " . mysqli_error($CON) . "</p>";
}

//insert sample staff data
$insert = 'INSERT INTO staff (sta_ID, sta_FirstName, sta_LastName, sta_Campus, sta_Email, sta_Password, sort_matrix, sort_random, sort_inertia, sort_iterations) VALUES
(1,"Staff","User",1,"staffuser@deakin.edu.au","21e00641c260a79b8e5ad3eef52dd84c",100,20,20,50)';
if (mysqli_query($CON, $insert)) {
  echo "<P>Sample staff data inserted</P>";
} else {
  echo "<p>Error inserting sample staff data: " . mysqli_error($CON) . "</p>";
}

//insert sample unit data
$skillNames = [
  "HTML/CSS",
  "JavaScript",
  "PHP",
  "Java",
  "C#",
  "C++",
  "Python",
  "Database",
  "Networking",
  "Unity",
  "Cyber Security",
  "Cloud",
  "Artificial Intelligence",
  "User Interface",
  "Mathematics",
  "Media",
  "Project Management",
  "Written Communication",
  "Verbal Communication",
  "Presentation"
];
$insert = "INSERT INTO unit (unit_ID, unit_Name, sta_ID, survey_open";
for ($i = 0; $i < 20; $i += 1)
    $insert .= ", skill_" . sprintf("%02d", $i);
$insert .= ") VALUES ('SIT302T318', 'SIT302 T3 2018', 1, 1";
for ($i = 0; $i < 20; $i += 1)
{
    $name = $skillNames[$i];
    if (is_null($name))
        $insert .= ", null";
    else
        $insert .= ", '$name'";
}
$insert .= ")";
if (mysqli_query($CON, $insert)) {
  echo "<P>Sample unit data inserted</P>";
} else {
  echo "<p>Error inserting sample unit data: " . mysqli_error($CON) . "</p>";
}

//insert project(1000) data
$numSkills = 20;
$rarity = 200;
$PROJECT = "INSERT INTO project (unit_ID, pro_title, pro_brief, pro_leader, pro_email, pro_status, pro_min, pro_max, pro_imp";
for ($i = 0; $i < 20; $i += 1)
    $PROJECT .= ", pro_skill_" . sprintf("%02d", $i);
for ($i = 0; $i < 20; $i += 1)
    $PROJECT .= ", pro_bias_" . sprintf("%02d", $i);
$PROJECT .= ") VALUES ";
for ($i = 0; $i < 20; $i += 1)
{
    if ($i > 0)
        $PROJECT .= ', ';
    $min = rand(3, 10); // rand(0, 5);
    $max = $min; // + rand(0, 10);
    $skills = randomProject($i, $imp, $biases);
    $status = randomProjectStatus();
    $PROJECT .= '("SIT302T318", "Project ' . $i . '"' . ",'Lorem Ipsum','Project Leader','projectleader@deakin.edu.au','".$status."',$min,$max,$imp," . join(", ", $skills) . ", " . join(", ", $biases) . ')';
}
if (mysqli_query($CON,$PROJECT)) {
  echo "<p>Sample projects inserted</p>";
} else {
  echo "Error inserting project data: " . mysqli_error($CON);
}

// Insert sample surveyanswer(1000) data
$numSkills = 20;
$rarity = 2.0;
$surveydata = "INSERT INTO surveyanswer (unit_ID, submitted, stu_ID";
for ($i = 0; $i < 20; $i += 1)
    $surveydata .= ", stu_skill_" . sprintf("%02d", $i);
$surveydata .= ") VALUES ";

$studentIDs = [216000000, 216116590, 216600366, 216030213, 216252283, 216822724, 216420635, 216830213, 216988272, 216986348, 216147717, 216901983, 216469334, 216152608, 216207865, 216746852, 216337658, 216232216, 216429653, 216909984, 216463558, 216592291, 216786574, 216983844, 216528480, 216314056, 216965849, 216275552, 216779566, 216412040, 216762187, 216498622, 216567433, 216249111, 216168384, 216883858, 216427960, 216391202, 216360811, 216902992, 216292829, 216720992, 216765045, 216440236, 216249197, 216828121, 216671593, 216587493, 216782631, 216949905, 216656298, 216685859, 216543826, 216454582, 216242484, 216636419, 216275634, 216184964, 216440367, 216402248, 216674327, 216734638, 216380225, 216800271, 216585007, 216021355, 216049775, 216836356, 216510372, 216254575, 216375217, 216498790, 216708060, 216425301, 216848062, 216435225, 216510246, 216935793, 216181579, 216040637, 216926394, 216817132, 216390639, 216072283, 216270368, 216120029, 216333608, 216608767, 216725302, 216843094, 216553948, 216801834, 216338930, 216542434, 216899114, 216446129, 216026988, 216776800, 216820558, 216043880];
for ($i = 0; $i < 100; $i += 1)
{
    if ($i > 0)
        $surveydata .= ",";
    $surveydata .= "('SIT302T318', 1, $studentIDs[$i], " . join(", ", randomSkills($i)) . ")";
}
for ($i = 0; $i < 900; $i += 1)
    $surveydata .= ', ("SIT302T318", 1, 217' . sprintf("%06d", $i) . ", " . join(", ", randomSkills($i)) . ')';

if (mysqli_query($CON,$surveydata)) {
  echo "<P>Sample surveyanswer data inserted</P>";
} else {
  echo "Error inserting sample surveyanswer data: " . mysqli_error($CON);
}
