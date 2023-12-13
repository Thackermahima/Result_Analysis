<?php

namespace App\Controllers;


class ResultAnalysis extends BaseController
{
    public function index()
    {
        return view('resultAnaylysis');
    }


    public function fetchResults()
    {
        // Check if the form is submitted
        if ($this->request->getMethod() === 'post') {
            // Get the category and input value from the form
            $category = $this->request->getPost('category');
            $inputValue = $this->request->getPost('inputValue');
    
            // Validate the category and input value
           // if (!empty($category) && !empty($inputValue)) {

                if (!empty($category)) {
                // Load the database connection
                $db = \Config\Database::connect();
    
                // Perform the database query based on the category and input value
                $query = '';
    
                if ($category === 'grade') {
                    // Assuming you have a column named 'grade' for subject grade and 'name', 'exam_number' for student details
                    $query = "SELECT name, EXAMNUMBER, 
                     CASE
                        WHEN SUB1GR = '$inputValue' THEN SUB1
                        WHEN SUB2GR = '$inputValue' THEN SUB2
                        WHEN SUB3GR = '$inputValue' THEN SUB3
                        WHEN SUB4GR = '$inputValue' THEN SUB4
                        WHEN SUB5GR = '$inputValue' THEN SUB5
                        WHEN SUB6GR = '$inputValue' THEN SUB6
                    END AS subject_code,
                    CASE
                        WHEN SUB1GR = '$inputValue' THEN SUB1NA
                        WHEN SUB2GR = '$inputValue' THEN SUB2NA
                        WHEN SUB3GR = '$inputValue' THEN SUB3NA
                        WHEN SUB4GR = '$inputValue' THEN SUB4NA
                        WHEN SUB5GR = '$inputValue' THEN SUB5NA
                        WHEN SUB6GR = '$inputValue' THEN SUB6NA
                    END AS subject_name,
                    CASE
                        WHEN SUB1GR = '$inputValue' THEN SUB1GR
                        WHEN SUB2GR = '$inputValue' THEN SUB2GR
                        WHEN SUB3GR = '$inputValue' THEN SUB3GR
                        WHEN SUB4GR = '$inputValue' THEN SUB4GR
                        WHEN SUB5GR = '$inputValue' THEN SUB5GR
                        WHEN SUB6GR = '$inputValue' THEN SUB6GR
                    END AS subject_grade
             FROM copy_of_sem4_term_212 r
             WHERE SUB1GR = '$inputValue' OR SUB2GR = '$inputValue' OR SUB3GR = '$inputValue' OR SUB4GR = '$inputValue' OR SUB5GR = '$inputValue' OR SUB6GR = '$inputValue'";
                   } elseif ($category === 'TopTen') {
                    // Assuming you have columns named 'name' and 'SPI'
                    $query = "SELECT name, SPI FROM copy_of_sem4_term_212 ORDER BY SPI DESC LIMIT 10";
        
                    // Execute the query
                    $results = $db->query($query)->getResult();
        
                    if (!empty($results)) {
                        echo view('header'); // Add the header view
                        echo '<br />';
                        echo '<table>';
                        echo '<tr>      <th>No.</th><th>Name</th><th>SPI</th></tr>';
                        $rowNumber = 1;
                        foreach ($results as $result) {
                            echo '<tr>';
                            echo '<td>' . $rowNumber . '</td>'; 
                            echo '<td>' . $result->name . '</td>';
                            echo '<td>' . $result->SPI . '</td>';
                            echo '</tr>';

                            $rowNumber++;

                        }
        
                        echo '</table>';
                    } else {
                        // No results found
                        echo 'No results found.';
                    }
                    return;
                 } elseif ($category === 'spi') {
                    // Assuming you have columns named 'name' and 'SPI'
                    $query = "SELECT name,EXAMNUMBER, St_Id, sem, SPI FROM copy_of_sem4_term_212 WHERE SPI = '$inputValue'";
    
                    // Execute the query
                    $results = $db->query($query)->getResult();
    
                    if (!empty($results)) {
                        echo view('header'); // Add the header view
                        echo '<br />';
                        echo '<table>';
                        echo '<tr><th>No.</th> <th>Name</th><th>Exam Number</th><th>sem</th><th> SPI</th></tr>';
                        $rowNumber = 1;

                        foreach ($results as $result) {
                            echo '<tr>';
                            echo '<td>' . $rowNumber . '</td>'; 
                            echo '<td>' . $result->name . '</td>';
                            echo '<td>' . $result->EXAMNUMBER . '</td>';
                            echo '<td>' . $result->sem . '</td>';
                            echo '<td>' . $result->SPI . '</td>';
                            echo '</tr>';
                            $rowNumber++;

                        }
    
                        echo '</table>';
                    } else {
                        // No results found
                        echo 'No results found.';
                    }
                    
                    return; // Exit the function after processing the spi category
                } elseif ($category === 'cpi') {
                    // Assuming you have columns named 'name' and 'SPI'
                    $query = "SELECT name,EXAMNUMBER, St_Id, sem, CPI FROM copy_of_sem4_term_212 WHERE CPI = '$inputValue'";
    
                    // Execute the query
                    $results = $db->query($query)->getResult();
    
                    if (!empty($results)) {
                        echo view('header'); // Add the header view
                        echo '<br />';
                        echo '<table>';
                        echo '<tr><th>No.</th><th>Exam Number</th><th>Name</th><th>sem</th><th> CPI</th></tr>';
                        $rowNumber = 1;
                        foreach ($results as $result) {
                            echo '<tr>';
                            echo '<td>' . $rowNumber . '</td>'; 
                            echo '<td>' . $result->EXAMNUMBER . '</td>';
                            echo '<td>' . $result->name . '</td>';
                            echo '<td>' . $result->sem . '</td>';
                            echo '<td>' . $result->CPI . '</td>';
                            echo '</tr>';
                            $rowNumber++;

                        }
    
                        echo '</table>';
                    } else {
                        // No results found
                        echo 'No results found.';
                    }
                    
                    return; // Exit the function after processing the spi category
                }elseif ($category === 'cgpa') {
                    // Assuming you have columns named 'name' and 'SPI'
                    $query = "SELECT name,EXAMNUMBER, sem, CGPA FROM copy_of_sem4_term_212 WHERE CGPA = '$inputValue'";
    
                    // Execute the query
                    $results = $db->query($query)->getResult();
    
                    if (!empty($results)) {
                        echo view('header'); // Add the header view
                        echo '<br />';
                        echo '<table>';
                        echo '<tr><th>No.</th><th>Exam Number</th><th>Name</th><th>sem</th><th> CGPA</th></tr>';
                        $rowNumber = 1;
                        foreach ($results as $result) {
                            echo '<tr>';
                            echo '<td>' . $rowNumber . '</td>'; 
                            echo '<td>' . $result->EXAMNUMBER . '</td>';
                            echo '<td>' . $result->name . '</td>';
                            echo '<td>' . $result->sem . '</td>';
                            echo '<td>' . $result->CGPA . '</td>';
                            echo '</tr>';
                            $rowNumber++;
                        }
    
                        echo '</table>';
                    } else {
                        // No results found
                        echo 'No results found.';
                    }
                    
                    return; // Exit the function after processing the spi category
                }elseif ($category === 'pass') {
                    // Assuming you have columns named 'name' and 'SPI'
                    $query = "SELECT name,EXAMNUMBER, sem, RESULT FROM copy_of_sem4_term_212 WHERE RESULT = 'PASS'";
    
                    // Execute the query
                    $results = $db->query($query)->getResult();
    
                    if (!empty($results)) {
                        echo view('header'); // Add the header view
                        echo '<br />';
                        echo '<table>';
                        echo '<tr><th>No.</th><th>Exam Number</th><th>Name</th><th>sem</th><th> result</th></tr>';
                        $rowNumber = 1;
                        foreach ($results as $result) {
                            echo '<tr>';
                            echo '<td>' . $rowNumber . '</td>'; 
                            echo '<td>' . $result->EXAMNUMBER . '</td>';
                            echo '<td>' . $result->name . '</td>';
                            echo '<td>' . $result->sem . '</td>';
                            echo '<td>' . $result->RESULT . '</td>';
                            echo '</tr>';
                            $rowNumber++;
                        }
    
                        echo '</table>';
                    } else {
                        // No results found
                        echo 'No results found.';
                    }
                    
                    return; // Exit the function after processing the spi category
                }elseif ($category === 'fail') {
                    // Assuming you have columns named 'name' and 'SPI'
                    $query = "SELECT name,EXAMNUMBER, sem, RESULT FROM copy_of_sem4_term_212 WHERE RESULT = 'FAIL'";
    
                    // Execute the query
                    $results = $db->query($query)->getResult();
    
                    if (!empty($results)) {
                        echo view('header'); // Add the header view
                        echo '<br />';
                        echo '<table>';
                        echo '<tr><th>No.</th><th>Exam Number</th><th>Name</th><th>Sem</th><th> Result</th></tr>';
                        $rowNumber = 1;
                        foreach ($results as $result) {
                            echo '<tr>';
                            echo '<td>' . $rowNumber . '</td>'; 
                            echo '<td>' . $result->EXAMNUMBER . '</td>';
                            echo '<td>' . $result->name . '</td>';
                            echo '<td>' . $result->sem . '</td>';
                            echo '<td>' . $result->RESULT . '</td>';
                            echo '</tr>';
                            $rowNumber++;
                        }
    
                        echo '</table>';
                    } else {
                        // No results found
                        echo 'No results found.';
                    }
                    
                    return; // Exit the function after processing the spi category
                }
    
                // Execute the query
                $results = $db->query($query)->getResult();
    
                if (!empty($results)) {
                    echo view('header'); // Add the header view
                    echo '<table>';
                    echo '<tr><th>No.</th><th>Name</th><th>Exam Number</th><th>Subject Name</th><th>Subject Code</th><th>Subject Grade</th></tr>';
                    $rowNumber = 1;
                    foreach ($results as $result) {
                        echo '<tr>';
                        echo '<td>' . $rowNumber . '</td>'; 
                        echo '<td>' . $result->name . '</td>';
                        echo '<td>' . $result->EXAMNUMBER . '</td>';
                        echo '<td>' . $result->subject_name . '</td>';
                        echo '<td>' . $result->subject_code . '</td>';
                        echo '<td>' . $result->subject_grade . '</td>';
                        echo '</tr>';
                        $rowNumber++;
                    }
                
                    echo '</table>';
                } else {
                    // No results found
                    echo 'No results found.';
                }
                
        }
    
    }
}  
}
