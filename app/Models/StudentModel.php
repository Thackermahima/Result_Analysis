<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class StudentModel extends Model
{
    protected $table = 'copy_of_sem4_term_212';
    protected $allowedFields = [
        'St_Id', 
        'extype', 
        'examid',
        'exam',
        'DECLARATIONDATE',
        'AcademicYear',
        'sem',
        'MAP_NUMBER',
        'UNIT_NO',
        'EXAMNUMBER',
        'name',
        'instcode',
        'instName',
        'CourseName',
        'BR_CODE',
        'BR_NAME',
        'SUB1',
        'SUB2',
        'SUB3',
        'SUB4',
        'SUB5',
        'SUB6',
        'SUB1NA',
        'SUB2NA',
        'SUB3NA',
        'SUB4NA',
        'SUB5NA',
        'SUB6NA',
        'SUB1CR',
        'SUB2CR',
        'SUB3CR',
        'SUB4CR',
        'SUB5CR',
        'SUB6CR',
        'SUB1GR',
        'SUB2GR',
        'SUB3GR',
        'SUB4GR',
        'SUB5GR',
        'SUB6GR',
        'SUB1AB',
        'SUB2AB',
        'SUB3AB',
        'SUB4AB',
        'SUB5AB',
        'SUB6AB',
        'SUB1B',
        'SUB2B',
        'SUB3B',
        'SUB4B',
        'SUB5B',
        'SUB6B',
        'SUB1GRI',
        'SUB2GRI',
        'SUB3GRI',
        'SUB4GRI',
        'SUB5GRI',
        'SUB6GRI',
        'SUB1GRTH',
        'SUB2GRTH',
        'SUB3GRTH',
        'SUB4GRTH',
        'SUB5GRTH',
        'SUB6GRTH',
        'SUB1GRE',
        'SUB2GRE',
        'SUB3GRE',
        'SUB4GRE',
        'SUB5GRE',
        'SUB6GRE',
        'SUB1GRM',
        'SUB2GRM',
        'SUB3GRM',
        'SUB4GRM',
        'SUB5GRM',
        'SUB6GRM',
        'SUB1GRPR',
        'SUB2GRPR',
        'SUB3GRPR',
        'SUB4GRPR',
        'SUB5GRPR',
        'SUB6GRPR',
        'SUB1GRV',
        'SUB2GRV',
        'SUB3GRV',
        'SUB4GRV',
        'SUB5GRV',
        'SUB6GRV',
        'TOTBACKL',
        'CURBACKL',
        'SPI',
        'CPI',
        'CGPA',
        'RESULT',
    ];
}