<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\StudentModel;

class Upload extends BaseController
{
    public function index()
    {
        return view('uploadfile');  
    }

    // public function upload()
    // {
    //     $input = $this->validate([
    //         'file' => 'uploaded[file]|max_size[file,2048]|ext_in[file,csv],'
    //     ]);

    //     if (!$input) {
    //         $data['validation'] = $this->validator;
    //         return view('uploadfile', $data); 
    //     }else{
    //         if($file = $this->request->getFile('file')) {
    //             if ($file->isValid() && ! $file->hasMoved()) {
    //                 $newName = $file->getRandomName();
    //                 $file->move('../public/csvfile', $newName);
    //                 $file = fopen("../public/csvfile/".$newName,"r");
    //                 $i = 0;
    //                 $numberOfFields = 93;

    //                 $csvArr = array();
                    
    //                 while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
    //                     $num = count($filedata);
    //                     if($i <= 0 && $num == $numberOfFields){ 
    //                         $csvArr[$i]['St_Id'] = $filedata[0];
    //                         $csvArr[$i]['extype'] = $filedata[1];
    //                         $csvArr[$i]['examid'] = $filedata[2];
    //                         $csvArr[$i]['exam'] = $filedata[3];
    //                         $csvArr[$i]['DECLARATIONDATE'] = $filedata[4];
    //                         $csvArr[$i]['AcademicYear'] = $filedata[5];
    //                         $csvArr[$i]['sem'] = $filedata[6];
    //                         $csvArr[$i]['MAP_NUMBER'] = $filedata[7];
    //                         $csvArr[$i]['UNIT_NO'] = $filedata[8];
    //                         $csvArr[$i]['EXAMNUMBER'] = $filedata[9];
    //                         $csvArr[$i]['name'] = $filedata[10];
    //                         $csvArr[$i]['instcode'] = $filedata[11];
    //                         $csvArr[$i]['instName'] = $filedata[12];
    //                         $csvArr[$i]['CourseName'] = $filedata[13];
    //                         $csvArr[$i]['BR_CODE'] = $filedata[14];
    //                         $csvArr[$i]['BR_NAME'] = $filedata[15];
    //                         $csvArr[$i]['SUB1'] = $filedata[16];
    //                         $csvArr[$i]['SUB2'] = $filedata[17];
    //                         $csvArr[$i]['SUB3'] = $filedata[18];
    //                         $csvArr[$i]['SUB4'] = $filedata[19];
    //                         $csvArr[$i]['SUB5'] = $filedata[20];
    //                         $csvArr[$i]['SUB6'] = $filedata[21];
    //                         $csvArr[$i]['SUB1NA'] = $filedata[22];
    //                         $csvArr[$i]['SUB2NA'] = $filedata[23];
    //                         $csvArr[$i]['SUB3NA'] = $filedata[24];
    //                         $csvArr[$i]['SUB4NA'] = $filedata[25];
    //                         $csvArr[$i]['SUB5NA'] = $filedata[26];
    //                         $csvArr[$i]['SUB6NA'] = $filedata[27];
    //                         $csvArr[$i]['SUB1CR'] = $filedata[28];
    //                         $csvArr[$i]['SUB2CR'] = $filedata[29];
    //                         $csvArr[$i]['SUB3CR'] = $filedata[30];
    //                         $csvArr[$i]['SUB4CR'] = $filedata[31];
    //                         $csvArr[$i]['SUB5CR'] = $filedata[32];
    //                         $csvArr[$i]['SUB6CR'] = $filedata[33];
    //                         $csvArr[$i]['SUB1GR'] = $filedata[34];
    //                         $csvArr[$i]['SUB2GR'] = $filedata[35];
    //                         $csvArr[$i]['SUB3GR'] = $filedata[36];
    //                         $csvArr[$i]['SUB4GR'] = $filedata[37];
    //                         $csvArr[$i]['SUB5GR'] = $filedata[38];
    //                         $csvArr[$i]['SUB6GR'] = $filedata[39];
    //                         $csvArr[$i]['SUB1AB'] = $filedata[40];
    //                         $csvArr[$i]['SUB2AB'] = $filedata[41];
    //                         $csvArr[$i]['SUB3AB'] = $filedata[42];
    //                         $csvArr[$i]['SUB4AB'] = $filedata[43];
    //                         $csvArr[$i]['SUB5AB'] = $filedata[44];
    //                         $csvArr[$i]['SUB6AB'] = $filedata[45];
    //                         $csvArr[$i]['SUB1B'] = $filedata[46];
    //                         $csvArr[$i]['SUB2B'] = $filedata[47];
    //                         $csvArr[$i]['SUB3B'] = $filedata[48];
    //                         $csvArr[$i]['SUB4B'] = $filedata[49];
    //                         $csvArr[$i]['SUB5B'] = $filedata[50];
    //                         $csvArr[$i]['SUB6B'] = $filedata[51];  
    //                         $csvArr[$i]['SUB1GRI'] = $filedata[52];
    //                         $csvArr[$i]['SUB2GRI'] = $filedata[53];
    //                         $csvArr[$i]['SUB3GRI'] = $filedata[54];
    //                         $csvArr[$i]['SUB4GRI'] = $filedata[55];
    //                         $csvArr[$i]['SUB5GRI'] = $filedata[56];
    //                         $csvArr[$i]['SUB6GRI'] = $filedata[57];
    //                         $csvArr[$i]['SUB1GRTH'] = $filedata[58];
    //                         $csvArr[$i]['SUB2GRTH'] = $filedata[59];
    //                         $csvArr[$i]['SUB3GRTH'] = $filedata[60];
    //                         $csvArr[$i]['SUB4GRTH'] = $filedata[61];
    //                         $csvArr[$i]['SUB5GRTH'] = $filedata[62];
    //                         $csvArr[$i]['SUB6GRTH'] = $filedata[63];
    //                         $csvArr[$i]['SUB1GRE'] = $filedata[64];
    //                         $csvArr[$i]['SUB2GRE'] = $filedata[65];
    //                         $csvArr[$i]['SUB3GRE'] = $filedata[66];
    //                         $csvArr[$i]['SUB4GRE'] = $filedata[67];
    //                         $csvArr[$i]['SUB5GRE'] = $filedata[68];
    //                         $csvArr[$i]['SUB6GRE'] = $filedata[69];
    //                         $csvArr[$i]['SUB1GRM'] = $filedata[70];
    //                         $csvArr[$i]['SUB2GRM'] = $filedata[71];
    //                         $csvArr[$i]['SUB3GRM'] = $filedata[72];
    //                         $csvArr[$i]['SUB4GRM'] = $filedata[73];
    //                         $csvArr[$i]['SUB5GRM'] = $filedata[74];
    //                         $csvArr[$i]['SUB6GRM'] = $filedata[75];
    //                         $csvArr[$i]['SUB1GRPR'] = $filedata[76];
    //                         $csvArr[$i]['SUB2GRPR'] = $filedata[77];
    //                         $csvArr[$i]['SUB3GRPR'] = $filedata[78];
    //                         $csvArr[$i]['SUB4GRPR'] = $filedata[79];
    //                         $csvArr[$i]['SUB5GRPR'] = $filedata[80];
    //                         $csvArr[$i]['SUB6GRPR'] = $filedata[81];
    //                         $csvArr[$i]['SUB1GRV'] = $filedata[82];
    //                         $csvArr[$i]['SUB2GRV'] = $filedata[83];
    //                         $csvArr[$i]['SUB3GRV'] = $filedata[84];
    //                         $csvArr[$i]['SUB4GRV'] = $filedata[85];
    //                         $csvArr[$i]['SUB5GRV'] = $filedata[86];
    //                         $csvArr[$i]['SUB6GRV'] = $filedata[87];
    //                         $csvArr[$i]['TOTBACKL'] = $filedata[88];
    //                         $csvArr[$i]['CURBACKL'] = $filedata[89];
    //                         $csvArr[$i]['SPI'] = $filedata[90];
    //                         $csvArr[$i]['CPI'] = $filedata[91];
    //                         $csvArr[$i]['CGPA'] = $filedata[92];
    //                         $csvArr[$i]['RESULT'] = $filedata[93];
    //                     }
    //                     $i++;
    //                 }
    //                 fclose($file);

    //                 $count = 0;
    //                 foreach($csvArr as $userdata){

    //                     $students = new StudentModel();
    //                     $findRecord = $students->where('exam', $userdata['exam'])->countAllResults();

    //                     if($findRecord == 0){
    //                         if($students->insert($userdata)){
    //                             $count++;
    //                         }
    //                     }
    //                 }
    //                 session()->setFlashdata('message', $count.' rows successfully added.');
    //                 session()->setFlashdata('alert-class', 'alert-success');
    //             }else{
    //                 session()->setFlashdata('message', 'CSV file coud not be imported.');
    //                 session()->setFlashdata('alert-class', 'alert-danger');
    //             }
    //         }else{
    //             session()->setFlashdata('message', 'CSV file coud not be imported.');
    //             session()->setFlashdata('alert-class', 'alert-danger');
    //         }
    //     }
    //     return redirect()->route('/');         
    // }

    public function upload()
{
    $input = $this->validate([
        'file' => 'uploaded[file]|max_size[file,2048]|ext_in[file,csv],'
    ]);

    if (!$input) {
        $data['validation'] = $this->validator;
        return view('uploadfile', $data);
    }

    $file = $this->request->getFile('file');
    $newName = $file->getRandomName();
    $file->move('../public/csvfile', $newName);
    $filePath = "../public/csvfile/" . $newName;

    if (($handle = fopen($filePath, "r")) !== FALSE) {
        $csvData = [];
        $header = fgetcsv($handle, 1000, ",");
        $numberOfFields = 94;

        if (count($header) === $numberOfFields) {
            // Header Mapping
            $headerMapping = [
                'St_Id' => 'St_Id',
                'extype' => 'extype',
                'examid' => 'examid',
                'exam' => 'exam',
                'DECLARATIONDATE' => 'DECLARATIONDATE',
                'AcademicYear' => 'AcademicYear',
                'sem' => 'sem',
                'MAP_NUMBER' => 'MAP_NUMBER',
                'UNIT_NO' => 'UNIT_NO',
                'EXAMNUMBER' => 'EXAMNUMBER',
                'name' => 'name',
                'instcode' => 'instcode',
                'instName' => 'instName',
                'CourseName' => 'CourseName',
                'BR_CODE' => 'BR_CODE',
                'BR_NAME' => 'BR_NAME',
                'SUB1' => 'SUB1',
                'SUB2' => 'SUB2',
                'SUB3' => 'SUB3',
                'SUB4' => 'SUB4',
                'SUB5' => 'SUB5',
                'SUB6' => 'SUB6',
                'SUB1NA' => 'SUB1NA',
                'SUB2NA' => 'SUB2NA',
                'SUB3NA' => 'SUB3NA',
                'SUB4NA' => 'SUB4NA',
                'SUB5NA' => 'SUB5NA',
                'SUB6NA' => 'SUB6NA',
                'SUB1CR' => 'SUB1CR',
                'SUB2CR' => 'SUB2CR',
                'SUB3CR' => 'SUB3CR',
                'SUB4CR' => 'SUB4CR',
                'SUB5CR' => 'SUB5CR',
                'SUB6CR' => 'SUB6CR',
                'SUB1GR' => 'SUB1GR',
                'SUB2GR' => 'SUB2GR',
                'SUB3GR' => 'SUB3GR',
                'SUB4GR' => 'SUB5GR',
                'SUB6GR' => 'SUB6GR',
                'SUB1AB' => 'SUB1AB',
                'SUB2AB' => 'SUB2AB',
                'SUB3AB' => 'SUB3AB',
                'SUB4AB' => 'SUB4AB',
                'SUB5AB' => 'SUB5AB',
                'SUB6AB' => 'SUB6AB',
                'SUB1B' => 'SUB1B',
                'SUB2B' => 'SUB2B',
                'SUB3B' => 'SUB3B',
                'SUB4B' => 'SUB4B',
                'SUB5B' => 'SUB5B',
                'SUB6B' => 'SUB6B',
                'SUB1GRI' => 'SUB1GRI',
                'SUB2GRI' => 'SUB2GRI',
                'SUB3GRI' => 'SUB3GRI',
                'SUB4GRI' => 'SUB4GRI',
                'SUB5GRI' => 'SUB5GRI',
                'SUB6GRI' => 'SUB6GRI',
                'SUB1GRTH' => 'SUB1GRTH',
                'SUB2GRTH' => 'SUB2GRTH',
                'SUB3GRTH' => 'SUB3GRTH',
                'SUB4GRTH' => 'SUB4GRTH',
                'SUB5GRTH' => 'SUB5GRTH',
                'SUB6GRTH' => 'SUB6GRTH',
                'SUB1GRE' => 'SUB1GRE',
                'SUB2GRE' => 'SUB2GRE',
                'SUB3GRE' => 'SUB3GRE',
                'SUB4GRE' => 'SUB4GRE',
                'SUB5GRE' => 'SUB5GRE',
                'SUB6GRE' => 'SUB6GRE',
                'SUB1GRM' => 'SUB1GRM',
                'SUB2GRM' => 'SUB2GRM',
                'SUB3GRM' => 'SUB3GRM',
                'SUB4GRM' => 'SUB4GRM',
                'SUB5GRM' => 'SUB5GRM',
                'SUB6GRM' => 'SUB6GRM',
                'SUB1GRPR' => 'SUB1GRPR',
                'SUB2GRPR' => 'SUB2GRPR',
                'SUB3GRPR' => 'SUB3GRPR',
                'SUB4GRPR' => 'SUB4GRPR',
                'SUB5GRPR' => 'SUB5GRPR',
                'SUB6GRPR' => 'SUB6GRPR',
                'SUB1GRV'  =>  'SUB1GRV',
                'SUB2GRV'  =>  'SUB2GRV',
                'SUB3GRV'  =>  'SUB3GRV',
                'SUB4GRV'  =>  'SUB4GRV',
                'SUB5GRV'  =>  'SUB5GRV',
                'SUB6GRV'  =>  'SUB6GRV',
                'TOTBACKL' => 'TOTBACKL',
                'CURBACKL' => 'CURBACKL',
                'SPI' => 'SPI',
                'CPI'=> 'CPI',
                'CGPA' => 'CGPA',
                'RESULT' => 'RESULT'
                // Add more header mappings here
            ];

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $rowData = array_combine($header, $data);

                // Map CSV headers to database column names
                $mappedData = [];
                foreach ($headerMapping as $csvHeader => $dbColumn) {
                    $mappedData[$dbColumn] = $rowData[$csvHeader] ?? null;
                }

                $csvData[] = $mappedData;
            }
        } else {
            fclose($handle);
            session()->setFlashdata('message', 'Invalid CSV file format.');
            session()->setFlashdata('alert-class', 'alert-danger');
            return redirect()->route('/');
        }

        fclose($handle);

        $students = new StudentModel();
        $existingExams = $students->whereIn('exam', array_column($csvData, 'exam'))->findAll();
        $existingExams = array_column($existingExams, 'exam');

        $newRecords = array_filter($csvData, function ($rowData) use ($existingExams) {
            return !in_array($rowData['exam'], $existingExams);
        });

        if (!empty($newRecords)) {
            if ($students->insertBatch($newRecords)) {
                $count = count($newRecords);
                session()->setFlashdata('message', $count . ' rows successfully added.');
                session()->setFlashdata('alert-class', 'alert-success');
            } else {
                session()->setFlashdata('message', 'Failed to insert records into the database.');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
        } else {
            session()->setFlashdata('message', 'No new records to insert.');
            session()->setFlashdata('alert-class', 'alert-info');
        }

        unlink($filePath);
    } else {
        session()->setFlashdata('message', 'Failed to open CSV file.');
        session()->setFlashdata('alert-class', 'alert-danger');
    }

    return redirect()->route('/');
}

    }



?>