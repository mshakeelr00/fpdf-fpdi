<?php
//use setasign\Fpdi\Fpdi;
// Include the autoload file from FPDI
//require_once 'FPDI/src/autoload.php';

require_once('fpdf/fpdf.php');
require_once('fpdi/src/autoload.php');

// Initiate FPDI
$pdf = new \setasign\Fpdi\Fpdi();

// Set the source file
$pdf->setSourceFile('app.pdf');

// Import and add page 1 without modifications
$tplIdx1 = $pdf->importPage(1);
$pdf->AddPage(); // Add a new page for the imported page
$pdf->useTemplate($tplIdx1); // Use the imported page without scaling or positioning adjustments



// Import and modify page 2
$tplIdx2 = $pdf->importPage(2);

// Get the imported page dimensions for page 2
$size = $pdf->getTemplateSize($tplIdx2);
$width = $size['width'];
$height = $size['height'];

// Calculate scaling to fit the page
$pageWidth = $pdf->GetPageWidth();
$pageHeight = $pdf->GetPageHeight();
$scale = min($pageWidth / $width, $pageHeight / $height);

// Calculate positioning to center the page
$x = ($pageWidth - $width * $scale) / 2;
$y = ($pageHeight - $height * $scale) / 2;

// Add and modify page 2
$pdf->AddPage(); // Add a new page for the imported page
$pdf->useTemplate($tplIdx2, $x, $y, $width * $scale, $height * $scale);

// Set font for the text
$pdf->SetFont('courier', '', 10);

// Add text on page 2 at First Name
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 50);
$pdf->Write(0, 'Muhammad');

//Middle name
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(100, 50);
$pdf->Write(0, 'Shakeel');

//last
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(150, 50);
$pdf->Write(0, 'Rehmani');

//phone
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 60);
$pdf->Write(0, '03352525027');

//Email
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(100, 60);
$pdf->Write(0, 'saudasif254@gmail.com');

//date of birth
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 68.5);
$pdf->Write(0, '27-07-2001');

//social sec
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 68.5);
$pdf->Write(0, '#11122233444');

//date of application
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 78.5);
$pdf->Write(0, '27-08-2024');

//possition applied
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(90, 78.5);
$pdf->Write(0, 'Driver');

//possition applied
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 78.5);
$pdf->Write(0, '28-09-2024');

// Add image using this way for Yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 102.3, 84.4, 2); // Adjust x, y, width, and height as needed

// Add image using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 114, 84.4, 2); // Adjust x, y, width, and height as needed


/////previous three year residency//////////////
//current street
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 128);
$pdf->Write(0, 'street #1');

//current city
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(113, 128);
$pdf->Write(0, 'melborn');

//current state
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(155, 128);
$pdf->Write(0, 'NY');

//current zipcode
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 128);
$pdf->Write(0, '1111');

//current of year address
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(180, 128);
$pdf->Write(0, '2023');

//mailing street
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 138);
$pdf->Write(0, 'street #2');

//mailing city
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(113, 137);
$pdf->Write(0, 'melborn');

//mailing state
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(155, 137);
$pdf->Write(0, 'MC');

//mailing zipcode
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 137);
$pdf->Write(0, '2222');

//mailing of year address
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(180, 137);
$pdf->Write(0, '2023');


//previous street
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 146);
$pdf->Write(0, 'street #2');

//previous city
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(113, 146);
$pdf->Write(0, 'melborn');

//previous state
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(155, 146);
$pdf->Write(0, 'MC');

//previous zipcode
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 146);
$pdf->Write(0, '2222');

//previous of year address
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(180, 146);
$pdf->Write(0, '2023');



//previous2 street
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 155);
$pdf->Write(0, 'street #2');

//previous2 city
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(113, 155);
$pdf->Write(0, 'melborn');

//previous2 state
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(155, 155);
$pdf->Write(0, 'MC');

//previous2 zipcode
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 155);
$pdf->Write(0, '2222');

//previous2 of year address
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(180, 155);
$pdf->Write(0, '2023');


//previous3 street
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 164);
$pdf->Write(0, 'street #2');

//previous3 city
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(113, 164);
$pdf->Write(0, 'melborn');

//previous3 state
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(155, 164);
$pdf->Write(0, 'MC');

//previous3 zipcode
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 164);
$pdf->Write(0, '2222');

//previous3 of year address
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(180, 164);
$pdf->Write(0, '2023');





//liscense information

//license state
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(15, 205);
$pdf->Write(0, 'NY');

//license number
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 205);
$pdf->Write(0, '#12345678900');

//license type/class
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(83, 205);
$pdf->Write(0, 'HIV');

//license Endorsement
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(122, 205);
$pdf->Write(0, 'Lorem Ipsum');

//license Expiration
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 205);
$pdf->Write(0, '09-09-2033');







//license state2
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(15, 220);
$pdf->Write(0, 'NY');

//license number2
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 220);
$pdf->Write(0, '#12345678900');

//license type/class2
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(83, 220);
$pdf->Write(0, 'HIV');

//license Endorsement2
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(122, 220);
$pdf->Write(0, 'Lorem Ipsum');

//license Expiration2
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 220);
$pdf->Write(0, '09-09-2033');




//license state3
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(15, 230);
$pdf->Write(0, 'NY');

//license number3
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 230);
$pdf->Write(0, '#12345678900');

//license type/class3
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(83, 230);
$pdf->Write(0, 'HIV');

//license Endorsement3
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(122, 230);
$pdf->Write(0, 'Lorem Ipsum');

//license Expiration3
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 230);
$pdf->Write(0, '09-09-2033');



//Driving Expreience

//Experience Vehichle Type
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(37, 262);
$pdf->Write(0, 'Truck,Car,Bike and cycle');

//Experience Date From
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 263);
$pdf->Write(0, '2015');

//license Endorsement3
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(155, 263);
$pdf->Write(0, '2024');

//license Expiration3
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 263);
$pdf->Write(0, '9 Years');




// Import and modify page 3
$tplIdx3 = $pdf->importPage(3);

// Get the imported page dimensions for page 3
$size = $pdf->getTemplateSize($tplIdx3);
$width = $size['width'];
$height = $size['height'];

// Calculate scaling to fit the page
$pageWidth = $pdf->GetPageWidth();
$pageHeight = $pdf->GetPageHeight();
$scale = min($pageWidth / $width, $pageHeight / $height);

// Calculate positioning to center the page
$x = ($pageWidth - $width * $scale) / 2;
$y = ($pageHeight - $height * $scale) / 2;

// Add and modify page 2
$pdf->AddPage(); // Add a new page for the imported page
$pdf->useTemplate($tplIdx3, $x, $y, $width * $scale, $height * $scale);

// Set font for the text
$pdf->SetFont('courier', '', 10);

// this start of fields pointing of page three
// driving experince tractor & semi tractor 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 30);
$pdf->Write(0, 'Truck,car');

//Experience Date From 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 30);
$pdf->Write(0, '2014');

//Experience Date To 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(153, 30);
$pdf->Write(0, '2017');

// Approximate yr of 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 30);
$pdf->Write(0, '3 years');

// driving experince tractor & trailor 3rd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 40);
$pdf->Write(0, 'Truck,car');

//Experience Date From 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 40);
$pdf->Write(0, '2014');

//Experience Date To 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(153, 40);
$pdf->Write(0, '2017');

// Approximate yr of 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 40);
$pdf->Write(0, '3 years');

// driving experince tractor & tankor 4th row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 50);
$pdf->Write(0, 'Truck,car');

//Experience Date From 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 50);
$pdf->Write(0, '2014');

//Experience Date To 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(153, 50);
$pdf->Write(0, '2017');

// Approximate yr of 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 50);
$pdf->Write(0, '3 years');

// driving experince other 5th row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 60);
$pdf->Write(0, 'Truck,car');

//Experience Date From 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 60);
$pdf->Write(0, '2014');

//Experience Date To 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(153, 60);
$pdf->Write(0, '2017');

// Approximate yr of 2nd row
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 60);
$pdf->Write(0, '3 years');



//Accident Record Of Past 3 years

// Add image using this way
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 150, 77, 3); // Adjust x, y, width, and height as needed

//1st year date (list more recent)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 100);
$pdf->Write(0, '2014');

//1st year nature of accident
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 100);
$pdf->Write(0, 'Head on');

//1st year fatalities
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(145, 100);
$pdf->Write(0, 'lorem');

//1st year Injuries
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(162, 100);
$pdf->Write(0, 'Head');

//1st year chemical spile
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 100);
$pdf->Write(0, 'lorem');


//2nd year date (list more recent)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 110);
$pdf->Write(0, '2012');

//2nd year nature of accident
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 110);
$pdf->Write(0, 'upset');

//2nd year fatalities
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(145, 110);
$pdf->Write(0, 'lorem');

//2nd year Injuries
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(162, 110);
$pdf->Write(0, 'Head');

//2nd year chemical spile
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 110);
$pdf->Write(0, 'lorem');


//3rd year date (list more recent)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 120);
$pdf->Write(0, '2011');

//3rd year nature of accident
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 120);
$pdf->Write(0, 'rear end');

//3rd year fatalities
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(145, 120);
$pdf->Write(0, 'lorem');

//3rd year Injuries
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(162, 120);
$pdf->Write(0, 'Head');

//3rd year chemical spile
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(175, 120);
$pdf->Write(0, 'lorem');


/////Trafic Convictions and forefeatures for the past 3 year///
//1st year Date Convicted(month/year)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 165);
$pdf->Write(0, '2011');

//1st year Violation
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 165);
$pdf->Write(0, 'lorem');

//1st year State Of
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 165);
$pdf->Write(0, 'lorem');

//1st year Penality
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 165);
$pdf->Write(0, 'lorem Ipsum');

//2nd year Date Convicted(month/year)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 175);
$pdf->Write(0, '2012');

//2nd year Violation
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 175);
$pdf->Write(0, 'lorem');

//2nd year State Of
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 175);
$pdf->Write(0, 'lorem');

//2nd year Penality
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 175);
$pdf->Write(0, 'lorem Ipsum');


//3rd year Date Convicted(month/year)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 185);
$pdf->Write(0, '2013');

//3rd year Violation
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 185);
$pdf->Write(0, 'lorem');

//3rd year State Of
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 185);
$pdf->Write(0, 'lorem');

//3rd year Penality
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 185);
$pdf->Write(0, 'lorem Ipsum');

//4th year Date Convicted(month/year)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 194);
$pdf->Write(0, '2013');

//4th year Violation
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 194);
$pdf->Write(0, 'lorem');

//4th year State Of
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 194);
$pdf->Write(0, 'lorem');

//4th year Penality
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(130, 194);
$pdf->Write(0, 'lorem Ipsum');

// Add image using this way for No 
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 149.5, 205, 2.2); // Adjust x, y, width, and height as needed

// Add image using this way for Yes 
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 140, 205, 2.2); // Adjust x, y, width, and height as needed


// Add image fro suspended or revked using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 162.5, 226, 2.2); // Adjust x, y, width, and height as needed

// Add image fro suspended or revked using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 153, 226, 2.2); // Adjust x, y, width, and height as needed




// Import and modify page 4
$tplIdx3 = $pdf->importPage(4);

// Get the imported page dimensions for page 4
$size = $pdf->getTemplateSize($tplIdx3);
$width = $size['width'];
$height = $size['height'];

// Calculate scaling to fit the page
$pageWidth = $pdf->GetPageWidth();
$pageHeight = $pdf->GetPageHeight();
$scale = min($pageWidth / $width, $pageHeight / $height);

// Calculate positioning to center the page
$x = ($pageWidth - $width * $scale) / 2;
$y = ($pageHeight - $height * $scale) / 2;

// Add and modify page 4
$pdf->AddPage(); // Add a new page for the imported page
$pdf->useTemplate($tplIdx3, $x, $y, $width * $scale, $height * $scale);

// Set font for the text
$pdf->SetFont('courier', '', 10);

// this start of fields pointing of page four

///current employment history fields/////////////////
//Name of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 58);
$pdf->Write(0, '2013');

//Phone of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(133, 58);
$pdf->Write(0, '0335 2524027');

//Adress of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 67.5);
$pdf->Write(0, 'Lorem Ipsum');

//Position held of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 77.5);
$pdf->Write(0, 'Lorem Ipsum');

//emplyee from m/y
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(117, 77.5);
$pdf->Write(0, '2019');

//emplyee To m/y
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 77.5);
$pdf->Write(0, '2024');

//reason of leaving  of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 87);
$pdf->Write(0, 'Lorem Ipsum');

//Salary of emplyee 
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 87);
$pdf->Write(0, '50,000');

//Explain any gaps in  of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 97);
$pdf->Write(0, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum');

// Add image fedral motor safty registraion  using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 169, 103, 2.2); // Adjust x, y, width, and height as needed

// Add image fedral motor safty registraion  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 181, 103, 2.2); // Adjust x, y, width, and height as needed

// Add image Job Designated  using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 171, 118, 2.2); // Adjust x, y, width, and height as needed

// Add image Job Designated  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 183.5, 118, 2.2); // Adjust x, y, width, and height as needed




///2nd  employment history fields/////////////////
//Name of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 138);
$pdf->Write(0, '2013');

//Phone of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(133, 138);
$pdf->Write(0, '0335 2524027');

//Adress of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 147);
$pdf->Write(0, 'Lorem Ipsum');

//Position held of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 157);
$pdf->Write(0, 'Lorem Ipsum');

//emplyee from m/y
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(117, 157);
$pdf->Write(0, '2019');

//emplyee To m/y
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 157);
$pdf->Write(0, '2024');

//reason of leaving  of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 166);
$pdf->Write(0, 'Lorem Ipsum');

//Salary of emplyee 
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 167);
$pdf->Write(0, '50,000');

//Explain any gaps in  of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 174);
$pdf->Write(0, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum');


// Add image fedral motor safty registraion  using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 170.5, 183.5, 2.2); // Adjust x, y, width, and height as needed

// Add image fedral motor safty registraion  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 182, 183.5, 2.2); // Adjust x, y, width, and height as needed

// Add image Job Designated  using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 172, 198.5, 2.2); // Adjust x, y, width, and height as needed

// Add image Job Designated  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 184, 198.5, 2.2); // Adjust x, y, width, and height as needed





///3rd  employment history fields/////////////////
//Name of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 218);
$pdf->Write(0, '2013');

//Phone of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(133, 218);
$pdf->Write(0, '0335 2524027');

//Adress of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 227);
$pdf->Write(0, 'Lorem Ipsum');

//Position held of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 237);
$pdf->Write(0, 'Lorem Ipsum');

//emplyee from m/y
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(117, 237);
$pdf->Write(0, '2019');

//emplyee To m/y
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 237);
$pdf->Write(0, '2024');

//reason of leaving  of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 246);
$pdf->Write(0, 'Lorem Ipsum');

//Salary of emplyee 
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(165, 246);
$pdf->Write(0, '50,000');

//Explain any gaps in  of emplyee
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 256);
$pdf->Write(0, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum');





// Import and modify page 5
$tplIdx3 = $pdf->importPage(5);

// Get the imported page dimensions for page 5
$size = $pdf->getTemplateSize($tplIdx3);
$width = $size['width'];
$height = $size['height'];

// Calculate scaling to fit the page
$pageWidth = $pdf->GetPageWidth();
$pageHeight = $pdf->GetPageHeight();
$scale = min($pageWidth / $width, $pageHeight / $height);

// Calculate positioning to center the page
$x = ($pageWidth - $width * $scale) / 2;
$y = ($pageHeight - $height * $scale) / 2;

// Add and modify page 5
$pdf->AddPage(); // Add a new page for the imported page
$pdf->useTemplate($tplIdx3, $x, $y, $width * $scale, $height * $scale);

// Set font for the text
$pdf->SetFont('courier', '', 10);

// this start of fields pointing of page five

// Add image fedral motor safty registraion  using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 169, 27.5, 2.2); // Adjust x, y, width, and height as needed

// Add image fedral motor safty registraion  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 181, 27.5, 2.2); // Adjust x, y, width, and height as needed

// Add image Job Designated  using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 172.5, 42, 2.2); // Adjust x, y, width, and height as needed

// Add image Job Designated  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 184.2, 42, 2.2); // Adjust x, y, width, and height as needed


////Education Fields pointing here///////

//High scool name and location //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 76);
$pdf->Write(0, 'Lorem Ipsum');

//High scool course of study //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 76);
$pdf->Write(0, 'Lorem');

//High scool year//
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(132, 76);
$pdf->Write(0, 'Lorem');

// Add image high scool graduate using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 150.2, 75.5, 2.2); // Adjust x, y, width, and height as needed

// Add image high scool graduate  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 158.2, 75.5, 2.2); // Adjust x, y, width, and height as needed

//High scool details//
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(170, 76);
$pdf->Write(0, 'Lorem');

////////////////////////////////////////////////////////////////

//High scool name and location //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 83);
$pdf->Write(0, 'Lorem Ipsum');

//High scool course of study //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 83);
$pdf->Write(0, 'Lorem');

//High scool year//
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(132, 83);
$pdf->Write(0, 'Lorem');

// Add image high scool graduate using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 150.2, 81.5, 2.2); // Adjust x, y, width, and height as needed

// Add image high scool graduate  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 158.2, 81.5, 2.2); // Adjust x, y, width, and height as needed

//High scool details//
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(170, 83);
$pdf->Write(0, 'Lorem');

///////////////////////////////////////////////////////////////////

//High scool name and location //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 89);
$pdf->Write(0, 'Lorem Ipsum');

//High scool course of study //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 89);
$pdf->Write(0, 'Lorem');

//High scool year//
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(132, 89);
$pdf->Write(0, 'Lorem');

// Add image high scool graduate using this way for yes option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 150.2, 87, 2.2); // Adjust x, y, width, and height as needed

// Add image high scool graduate  using this way for No option
$imagePath = 'tick.png'; // Update this with your image path
$pdf->Image($imagePath, 158.2, 87, 2.2); // Adjust x, y, width, and height as needed

//High scool details//
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(170, 89);
$pdf->Write(0, 'Lorem');

//////////Other Qualifications ////////////

//qualification other field //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 110);
$pdf->Write(0, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ');

//////to be ready and signed by Applicants/////////////

//Applicant Signature //
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(60, 252);
$pdf->Write(0, 'saud');

//Application Date//
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(160, 252);
$pdf->Write(0, '31-7-2024');






// Output the PDF
$pdf->Output('I', 'app.pdf');

