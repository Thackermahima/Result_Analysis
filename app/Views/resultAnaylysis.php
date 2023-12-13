<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
       form {
        max-width: 500px;
        margin: auto;
        background-color: #ffffff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); */
        justify-content: center;
        align-items: center; 
        margin-top:8%;
        margin-bottom:24%;

      } 
    h1 {
        text-align: center;
        margin-top: 40px;
        margin-bottom: 10px;
        margin: 8%;
      }
      select{
        margin-top:"10px";
        padding:"10px 10px";
        border-radius:"5px";
      }
      .container{
        background-color: "#faf7f8";
        margin-top: "20%";
      }
      input[type="submit"] {
       background-color: #419f89;
       padding:9px 9px;
       padding-left: 20px; 
       padding-right: 20px;
       color:white;
       font-weight:bold;
       border:1px solid black;
       border-radius:5px;
       font-size: 15px;
       margin-top: 8px;
       margin-left: 5px;
      }
      input[type="text"] {
        margin-top: 10px;
  padding: 10px 10px;
  border-radius: 5px;

      }
      input[type="number"] {
        margin-top: 10px;
  padding: 10px 10px;
  border-radius: 5px;

      }
      select {
  margin-top: 10px;
  padding: 10px 10px;
  border-radius: 5px;
}

#inputs-container {
  display: flex;
  flex-direction: row;
}
.input-group {
  display: inline-flex;
  align-items: center;
}

.input-group input {
  margin-right: 10px;
}


</style>
<body>
<?php
include 'header.php';
?>
<script>
function renderInputs() {
  const category = document.getElementById("category-select").value;
  const inputsContainer = document.getElementById("inputs-container");

  // Clear previous inputs
  inputsContainer.innerHTML = "";

  if (category === "grade") {
    inputsContainer.innerHTML = `
      <div>
        <input type="text" placeholder="Enter Grade" name="inputValue" />
      </div>
    `;
  }


  if (category === "spi") {
    inputsContainer.innerHTML = `
      <div>
      <input type="number" step="0.1" placeholder="Enter SPI" name="inputValue" />
      </div>
    `;
  }
  if (category === "cpi") {
    inputsContainer.innerHTML = `
      <div>
      <input type="number" step="0.01" placeholder="Enter CPI" name="inputValue" />
      </div>
    `;
  }
  if (category === "cgpa") {
    inputsContainer.innerHTML = `
      <div>
      <input type="number" step="0.01" placeholder="Enter CGPA" name="inputValue" />
      </div>
    `;
  }
 
}
function onFormSubmit(e) {
  e.preventDefault();
  const category = document.getElementById("category-select").value;

  // Create a hidden input field with the category value
  const categoryInput = document.createElement("input");
  categoryInput.type = "hidden";
  categoryInput.name = "category";
  categoryInput.value = category;
  e.target.appendChild(categoryInput);

  // Submit the form
  e.target.submit();
}
</script> 
<div class="container">
    <div className="form-style-2 offset-4 row-8">
  
        <h1>Analised your result here!</h1>
      
        <form action="<?php echo base_url('resultAnalysis/fetchResults'); ?>" method="post">
  <label for="field4">
            <span style="font-size:23px;">Choose category for analysis</span><br />
            <div class="input-group">
            <select
              id="category-select"
              value="category"
              name="category"
              onchange="renderInputs()"
            >
            
            <option defaultChecked value="">Select category</option>
              <option value="grade">Grade</option>
              <option value="TopTen">Top-10</option>
              <option value="spi">SPI</option>
              <option value="cpi">CPI</option>
              <option value="cgpa">CGPA</option>
              <option value="pass">Pass</option>
              <option value="fail">Fail</option>
            </select>
            <div id="inputs-container"></div>
          </label>
            <input
              type="submit"
              value="Search"
            />
            </div>
            
        </form>        
  
      </div>
    </div>
    <?php
include 'footer.php';
?> 
</body>
</html>
