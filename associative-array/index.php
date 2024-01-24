<?php
// Associative array of school students
$students = array(
    'john_doe' => array(
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 15,
        'grade' => 10,
        'subjects' => array('Math', 'Science', 'English'),
    ),
    'jane_smith' => array(
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'age' => 14,
        'grade' => 9,
        'subjects' => array('History', 'Art', 'Spanish'),
    ),
    'bob_jones' => array(
        'first_name' => 'Bob',
        'last_name' => 'Jones',
        'age' => 16,
        'grade' => 11,
        'subjects' => array('Physics', 'Chemistry', 'Biology'),
    ),
);

// Accessing information for a specific student
$johnDoeFirstName = $students['john_doe']['first_name'];
$bobJonesSubjects = $students['bob_jones']['subjects'];

// Output some information
echo "First name of John Doe: $johnDoeFirstName\n";
echo "Subjects of Bob Jones: " . implode(', ', $bobJonesSubjects) . "\n";


$friends = array(
    "rahim" => array(
        'age' => 18,
        'favorite-color' => "red",
    ),
    "karim" => array(
        'age' => 22,
        'favorite-color' => "blue",
    ),
    "sakil" => array(
        'age' => 20,
        'favorite-color' => "green",
    ),
);

// foreach ($students["john_doe"] as $key => $value) {
//     echo $key . " and " . $value;
// }
 
foreach ($students["john_doe"] as $key => $value) {
    if (is_array($value)) {
        sort($value);
        echo "$key = " . implode(', ', $value) . "<br>";
    } else {
        echo "$key = $value\n  <br>";
    }
}
