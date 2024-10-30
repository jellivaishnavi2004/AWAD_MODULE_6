<?php
class Student{
private $sName;

private $sId;
private $gender;
private $dob;
private $address;
private $mailId;
private $mblNo;
public function __construct($sName, $gender, $dob, $address, $mailId, $mblNo)
{
$this->sName = $sName;
$this->gender = $gender;
$this->dob = $dob;
$this->address = $address;
$this->mailId = $mailId;
$this->mblNo = $mblNo;
}
public function getSName(){
return $this->sName;
}
public function setSId($sId){
$this->sId = $sId;
}
public function getSId(){
return $this->sId;
}
public function getGender(){
return $this->gender;
}
public function getDob(){
return $this->dob;
}
public function getAddress(){
return $this->address;

}
public function getMailId(){
return $this->mailId;
}
public function getMblNo(){
return $this->mblNo;
}
}
class Course{
private $crsId, $crsName;
public function __construct($crsId, $crsName){
$this->crsId = $crsId;
$this->crsName = $crsName;
}
public function getCrsId(){
return $this->crsId;
}
public function getCrsName(){
return $this->crsName;
}
}
class Branch{
private $branchId, $branchName, $fees;
public function __construct($branchId, $branchName, $fees){
$this->branchId = $branchId;
$this->branchName = $branchName;
$this->fees = $fees;
}
public function getBranchId(){
return $this->branchId;
}
public function getBranchName(){

return $this->branchName ;
}
public function getFees(){
return $this->fees ;
}
}
class Enrollment{
private $sId, $crsId, $branchId, $eId, $doj;
public function __construct($crsId,$branchId,$doj){
$this->crsId = $crsId;
$this->branchId = $branchId;
$this->doj = $doj;
}
public function setEId($eId)
{
$this->eId = $eId;
}
public function getEId(){
return $this->eId;
}
public function getDoj(){
return $this->doj;
}
}
$id = 0;
$ernlid = 0;
echo "Enter Student's Name, Gender, Date of Birth, Address, email-ID, and
Mobile Number :\n ";
list($name, $gen, $dob, $add, $mid, $mno) = explode(",",readline());
$stu = new Student($name, $gen, $dob, $add, $mid, $mno);
echo "Specify Course to be Taken : ";
$crsname = readline();
if ($crsname == "B.Tech.")
$cid = 1001;
else if ($crsname = "B.Pharmacy")
$cid = 1002;
else
echo "Unavailable Course ";
$crs = new Course($cid, $crsname);
echo "Enter branch to be taken : ";
$brnname = readline();
if ($brnname == "CSE")
{
$bid = 1;
$fees = 100000;
}
else if ($brnname == 'ECE')
{
$bid = 2;
$fees = 90000;
}
else if ($brnname == 'EEE')
{
$bid = 3;
$fees = 75000;
}
else
echo "Unavailable Branch !";
$brn = new Branch($bid, $brnname, $fees);
echo "Enter date of joining : ";
$doj = readline();
$id = $id + 1;
$stu->setSId($id);
$ernlid = $ernlid + 1;

$enrl = new Enrollment($crs->getCrsId(),$brn->getBranchId(),$doj);
$enrl->setEId($ernlid);
echo "\n\nEnrollment is done successfully ! \n";
echo "\nAdmission Details \n";
echo "\nName : ".$stu->getSName();
echo "\nStudent ID : ".$stu->getSId();
echo "\nEnrollment ID : ".$enrl->getEId();
echo "\nGender : ".$stu->getGender();
echo "\nDate of Birth : ".$stu->getDob();
echo "\nAddress : ".$stu->getAddress();
echo "\nMail ID : ".$stu->getMailId();
echo "\nMobile Number : ".$stu->getMblNo();
echo "\nCourse Taken : ".$crs->getCrsName();
echo "\nBranch Taken : ".$brn->getBranchName();
echo "\nFee to be paid : ".$brn->getFees();
echo "\n\n";
?>