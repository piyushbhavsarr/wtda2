<?php
// Create student.xml file
$doc = new DOMDocument();
$doc->formatOutput = true;

$root = $doc->createElement('students');
$doc->appendChild($root);

$student = $doc->createElement('student');
$root->appendChild($student);

$roll_no = $doc->createElement('roll_no', '1');
$student->appendChild($roll_no);

$name = $doc->createElement('name', 'John Doe');
$student->appendChild($name);

$address = $doc->createElement('address', '123 Main St');
$student->appendChild($address);

$college = $doc->createElement('college', 'XYZ College');
$student->appendChild($college);

$course = $doc->createElement('course', 'Computer Science');
$student->appendChild($course);

// Add more students as needed

$doc->save('student.xml');

// Accept course as input
$input_course = readline('Enter course: ');

// Load student.xml file
$xml = simplexml_load_file('student.xml');

// Print student details for specific course in tabular format
echo "Roll No\tName\tAddress\tCollege\tCourse\n";
foreach ($xml->student as $student) {
    if ($student->course == $input_course) {
        echo $student->roll_no . "\t" . $student->name . "\t" . $student->address . "\t" . $student->college . "\t" . $student->course . "\n";
    }
}
?>