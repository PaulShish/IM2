<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ffffff;
    }

    .top-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #e4cbff;
      margin-bottom: 20px;
    }

    .top-header h1 {
      margin: 0;
      color: #ffffff;
    }

    .top-header .home-button {
      font-size: 20px;
      padding: 5px 10px;
      background-color: #9263EF;
      color: #000000;
      text-decoration: none;
      border-radius: 5px;
      display: flex;
      align-items: center;
    }

    .top-header .home-button:hover {
      background-color: #000000;
      color: #ffffff;
    }

    .top-header .home-button span {
      margin-right: 5px;
    }

    .container {
      width: 90%;
      margin: 0 auto;
      background-color: #9263EF;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    h1 {
      margin: 0;
      color: #ffffff;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .header-left {
      display: flex;
      align-items: center;
      flex-basis: 70%;
    }

    .header-right {
      display: flex;
      align-items: center;
      flex-basis: 30%;
      justify-content: flex-end;
    }

    .progress {
      background-color: #ffffff;
      border-radius: 20px;
      height: 10px;
      width: 100px;
      margin-right: 10px;
      overflow: hidden;
      margin-top: 10px; 
    }

    .progress .progress-bar {
      height: 100%;
      width: 0%;
      border-radius: 20px;
    }

    .project-details {
      margin-bottom: 20px;
      background-color: #9263EF;
      padding: 20px;
      border-radius: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .project-details p {
      margin: 5px 0;
      font-size: 16px;
      color: #000000;
      flex-basis: 48%;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #000000;
    }

    th {
      background-color: #9263EF;
      font-weight: bold;
      color: rgb(0, 0, 0);
    }

    .comment-input {
      width: 100%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #f399ef;
      margin-bottom: 5px;
    }

    .add-task-button, .remove-task-button {
      font-size: 24px;
      padding: 5px 5px;
      color: white;
      text-decoration: none;
      border-radius: 10%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 10px auto 0;
      cursor: pointer;
      width: 8px;
      height: 8px;
      text-align: center;
    }

    .add-task-button {
      background-color: #4CAF50;
    }

    .add-task-button:hover {
      background-color: #45a049;
    }

    .remove-task-button {
      background-color: #F44336;
    }

    .remove-task-button:hover {
      background-color: #81342f;
    }

    /* Feature Type Options */
    .planning-option {
      background-color: #FFC107;
      color: #333333;
    }

    .design-option {
      background-color: #2196F3;
      color: #ffffff;
    }

    .development-option {
      background-color: #673AB7;
      color: #ffffff;
    }

    .testing-option {
      background-color: #8BC34A;
      color: #333333;
    }

    .maintenance-option {
      background-color: #FF5722;
      color: #ffffff;
    }

    .documentation-option {
      background-color: #9E9E9E;
      color: #ffffff;
    }

    .deployment-option {
      background-color: #607D8B;
      color: #ffffff;
    }

    /* Status Options */
    .none-option {
      background-color: #ffffff;
      color: #333333;
    }

    .done-option {
      background-color: #4CAF50;
      color: #ffffff;
    }

    .in-process-option {
      background-color: #FFC107;
      color: #333333;
    }

    .on-hold-option {
      background-color: #F44336;
      color: #ffffff;
    }

    /* Risk Options */
    .low-option {
      background-color: #4CAF50;
      color: #ffffff;
    }

    .medium-option {
      background-color: #FFC107;
      color: #333333;
    }

    .high-option {
      background-color: #F44336;
      color: #ffffff;
    }
  </style>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<body>
  <div class="top-header">
    <h1>Team Agile</h1>
    <a href="index.php" class="home-button"><span>&#8962;</span> Home</a>
  </div>
  <div class="container">
  <form action="insert.php" method="post">
    <div class="header">
      <div class="header-left">
        <h1>Project Dashboard</h1>
      </div>
      <div class="header-right">
        <div class="progress">
          <div class="progress-bar"></div>
        </div> 
        <p class="progress-text">0%</p>
      </div>
    </div>
    <div class="project-details">
    <p><strong>Project Name:</strong> <input type="text" name="project-name" id="project-name" /></p>
    <p><strong>Project Owner:</strong> <input type="text" name="project-owner" id="project-owner" /></p>
    <p><strong>Start Date:</strong> <input type="text" name="start-date" id="start-date" class="datepicker" value="Select Date"></p>
    <p><strong>End Date:</strong> <input type="text" name="end-date" id="end-date" class="datepicker" value="Select Date"></p>
    </div>
    <table>
  <thead>
    <tr>
      <th>Task</th>
      <th>Feature Type</th>
      <th>Responsible</th>
      <th>Status</th>
      <th>Risk</th>
      <th>Comments</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody id="task-table-body">
    <tr>
      <td><input type="text" name="task-name[]" class="comment-input"></td>
      <td>
        <select name="feature-type[]" class="feature-type" onchange="applyFeatureColor(this)">
          <option value="none">None</option>
          <option value="planning" class="planning-option">Planning</option>
          <option value="design" class="design-option">Design</option>
          <option value="development" class="development-option">Development</option>
          <option value="testing" class="testing-option">Testing</option>
          <option value="maintenance" class="maintenance-option">Maintenance</option>
          <option value="documentation" class="documentation-option">Documentation</option>
          <option value="deployment" class="deployment-option">Deployment</option>
        </select>
      </td>
      <td><input type="text" name="responsible[]" class="comment-input"></td>
      <td>
        <select name="status[]" class="status" onchange="applyStatusColor(this)">
          <option value="none" class="none-option">None</option>
          <option value="done" class="done-option">Done</option>
          <option value="in-process" class="in-process-option">In Process</option>
          <option value="on-hold" class="on-hold-option">On Hold</option>
        </select>
      </td>
      <td>
        <select name="risk[]" class="risk" onchange="applyRiskColor(this)">
          <option value="none" class="none-option">None</option>
          <option value="low" class="low-option">Low</option>
          <option value="medium" class="medium-option">Medium</option>
          <option value="high" class="high-option">High</option>
        </select>
      </td>
      <td><input type="text" name="comments[]" class="comment-input"></td>
      <td>
        <div class="add-remove-button">
          <div class="add-task-button" onclick="addTaskRow()">+</div>
        </div>
      </td>
    </tr>
  </tbody>
  </table>
  <input type="submit" value="Save">
  </form>
  </div>

  <script>
    flatpickr('.datepicker', {
      dateFormat: 'm/d/Y',
      onClose: function(selectedDates, dateStr, instance) {
        updateDates();  
      }
    });

    function openDatePicker(inputId) {
      document.getElementById(inputId).flatpickr.open();
    }

    function updateDates() {
      let startDate = document.getElementById('start-date').value;
      let endDate = document.getElementById('end-date').value;

      console.log('Start Date:', startDate);
      console.log('End Date:', endDate);
    }

    function updateProgress() {
      let totalTasks = document.querySelectorAll('.status').length;
      let doneTasks = document.querySelectorAll('.status option[value="done"]:checked').length;
      let progressPercentage = (doneTasks / totalTasks) * 100;

      document.querySelector('.progress-bar').style.width = progressPercentage + '%';
      document.querySelector('.progress-text').innerText = Math.round(progressPercentage) + '%';

      // Example: Change color of progress bar based on percentage
      if (progressPercentage >= 50) {
        document.querySelector('.progress-bar').style.backgroundColor = '#4CAF50';
      } else {
        document.querySelector('.progress-bar').style.backgroundColor = '#F44336';
      }
    }

    function addTaskRow() {
      let tableBody = document.getElementById('task-table-body');
      let newRow = document.createElement('tr');
      let totalRows = document.querySelectorAll('#task-table-body tr').length;

      newRow.innerHTML = `
        <td><input type="text" class="comment-input"></td>
        <td>
          <select class="feature-type" onchange="applyFeatureColor(this)">
            <option value="none">None</option>
            <option value="planning" class="planning-option">Planning</option>
            <option value="design" class="design-option">Design</option>
            <option value="development" class="development-option">Development</option>
            <option value="testing" class="testing-option">Testing</option>
            <option value="maintenance" class="maintenance-option">Maintenance</option>
            <option value="documentation" class="documentation-option">Documentation</option>
            <option value="deployment" class="deployment-option">Deployment</option>
          </select>
        </td>
        <td><input type="text" class="comment-input"></td>
        <td>
          <select class="status" onchange="applyStatusColor(this)">
            <option value="none" class="none-option">None</option>
            <option value="done" class="done-option">Done</option>
            <option value="in-process" class="in-process-option">In Process</option>
            <option value="on-hold" class="on-hold-option">On Hold</option>
          </select>
        </td>
        <td>
          <select class="risk" onchange="applyRiskColor(this)">
            <option value="none" class="none-option">None</option>
            <option value="low" class="low-option">Low</option>
            <option value="medium" class="medium-option">Medium</option>
            <option value="high" class="high-option">High</option>
          </select>
        </td>
        <td><input type="text" class="comment-input"></td>
        <td>
          <div class="add-remove-button">
            <div class="add-task-button" onclick="addTaskRow()">+</div>
            ${totalRows > 0 ? '<div class="remove-task-button" onclick="removeTaskRow(this)">−</div>' : ''}
          </div>
        </td>
      `;

      tableBody.appendChild(newRow);
      updateProgress();
    }

    function removeTaskRow(button) {
      let rowToRemove = button.closest('tr');
      rowToRemove.remove();
      updateProgress();
    }

    function applyFeatureColor(selectElement) {
      let selectedOption = selectElement.options[selectElement.selectedIndex];
      let featureTypeDropdown = selectElement.closest('td').querySelector('.feature-type');

      // Remove all previous color classes
      featureTypeDropdown.classList.remove('planning-option', 'design-option', 'development-option', 'testing-option', 'maintenance-option', 'documentation-option', 'deployment-option');

      // Apply selected option's color class
      let selectedClass = selectedOption.className.split(' ')[0]; // Get the first class of the selected option
      featureTypeDropdown.classList.add(selectedClass);

      // Update the text color of the dropdown menu
      selectElement.style.color = window.getComputedStyle(selectedOption).color;
    }

    function applyStatusColor(selectElement) {
      let selectedOption = selectElement.options[selectElement.selectedIndex];
      let statusDropdown = selectElement.closest('td').querySelector('.status');

      // Remove all previous color classes
      statusDropdown.classList.remove('none-option', 'done-option', 'in-process-option', 'on-hold-option');

      // Apply selected option's color class
      let selectedClass = selectedOption.className.split(' ')[0]; // Get the first class of the selected option
      statusDropdown.classList.add(selectedClass);

      // Update the text color of the dropdown menu
      selectElement.style.color = window.getComputedStyle(selectedOption).color;

      // Optionally, update progress based on status change
      updateProgress();
    }

    function applyRiskColor(selectElement) {
      let selectedOption = selectElement.options[selectElement.selectedIndex];
      let riskDropdown = selectElement.closest('td').querySelector('.risk');

      // Remove all previous color classes
      riskDropdown.classList.remove('none-option', 'low-option', 'medium-option', 'high-option');

      // Apply selected option's color class
      let selectedClass = selectedOption.className.split(' ')[0]; // Get the first class of the selected option
      riskDropdown.classList.add(selectedClass);

      // Update the text color of the dropdown menu
      selectElement.style.color = window.getComputedStyle(selectedOption).color;
    }

    updateProgress();
  </script>
</body>
</html>