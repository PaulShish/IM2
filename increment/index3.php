<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: #E0C0FF;
}

.container {
  width: 90%;
  margin: 20px auto;
  background-color: #FFFFFF;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

h1 {
  margin: 0;
  color: #333;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  flex-wrap: wrap;
}

.header-left {
  display: flex;
  align-items: center;
  flex-basis: 100%;
  justify-content: space-between;
}

.header-right {
  display: flex;
  align-items: center;
  flex-basis: 100%;
  justify-content: flex-end;
}

.header-right i {
  font-size: 20px;
  color: #333;
  margin-right: 10px;
}

.header-right .progress {
  background-color: #EEEEEE;
  border-radius: 20px;
  height: 10px;
  width: 100px;
  margin-right: 10px;
  overflow: hidden;
}

.header-right .progress .progress-bar {
  background-color: #4CAF50;
  height: 100%;
  width: 38%;
  border-radius: 20px;
}

.project-details {
  margin-bottom: 20px;
}

.project-details p {
  margin: 5px 0;
  font-size: 16px;
  color: #333;
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
  border-bottom: 1px solid #EEEEEE;
}

th {
  background-color: #F2F2F2;
  font-weight: bold;
}

.feature-type {
  padding: 5px 10px;
  border-radius: 5px;
  margin-bottom: 5px;
  cursor: pointer;
}

.planning {
  background-color: #FFD700;
}

.design {
  background-color: #FFFF00;
}

.development {
  background-color: #F44336;
}

.testing {
  background-color: #E91E63;
}

.maintenance {
  background-color: #4CAF50;
}

.documentation {
  background-color: #2196F3;
}

.deployment {
  background-color: #FFC107;
}

.status {
  padding: 5px 10px;
  border-radius: 5px;
  margin-bottom: 5px;
  cursor: pointer;
}

.done {
  background-color: #4CAF50;
}

.in-process {
  background-color: #FFC107;
}

.on-hold {
  background-color: #9E9E9E;
}

.risk {
  padding: 5px 10px;
  border-radius: 5px;
  margin-bottom: 5px;
  cursor: pointer;
}

.none {
  background-color: #EEEEEE;
}

.low {
  background-color: #FFFF00;
}

.high {
  background-color: #F44336;
}

.medium {
  background-color: #FF9800;
}

.comment-input {
  width: 100%;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #EEEEEE;
  margin-bottom: 5px;
}

.home-button {
  font-size: 16px;
  padding: 5px 10px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  display: flex;
  align-items: center;
}

.home-button:hover {
  background-color: #45a049;
}

.home-button i {
  margin-right: 5px;
}
</style>
</head>
<body>
<div class="container">
  <div class="header">
    <div class="header-left">
      <h1>Team Agile</h1>
      <a href="#" class="home-button"><i class="fas fa-home"></i> Home</a>
    </div>
    <div class="header-right">
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <p class="progress-text">38%</p>
    </div>
  </div>
  <div class="project-details">
    <p><strong>Project Name:</strong> App Development</p>
    <p><strong>Project Owner:</strong> Nicole Joligon</p>
    <p><strong>Start Date:</strong> 06/25/2024</p>
    <p><strong>End Date:</strong> 10/11/2024</p>
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
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>User Story Refinement</td>
        <td class="feature-type planning" onclick="cycleFeatureType(this)">Planning</td>
        <td>Patricia Smith</td>
        <td class="status done" onclick="cycleStatus(this)">Done</td>
        <td class="risk none" onclick="cycleRisk(this)">None</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Design Mockups</td>
        <td class="feature-type design" onclick="cycleFeatureType(this)">Design</td>
        <td>Dominic Fisher</td>
        <td class="status done" onclick="cycleStatus(this)">Done</td>
        <td class="risk none" onclick="cycleRisk(this)">None</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Backend Development</td>
        <td class="feature-type development" onclick="cycleFeatureType(this)">Development</td>
        <td>Joseph Franklin</td>
        <td class="status in-process" onclick="cycleStatus(this)">In Process</td>
        <td class="risk low" onclick="cycleRisk(this)">Low</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Frontend Development</td>
        <td class="feature-type development" onclick="cycleFeatureType(this)">Development</td>
        <td>Joseph Franklin</td>
        <td class="status in-process" onclick="cycleStatus(this)">In Process</td>
        <td class="risk low" onclick="cycleRisk(this)">Low</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Database Update</td>
        <td class="feature-type development" onclick="cycleFeatureType(this)">Development</td>
        <td>Ian Green</td>
        <td class="status on-hold" onclick="cycleStatus(this)">On Hold</td>
        <td class="risk none" onclick="cycleRisk(this)">None</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Integration Testing</td>
        <td class="feature-type testing" onclick="cycleFeatureType(this)">Testing</td>
        <td>Zoe Kaplan</td>
        <td class="status on-hold" onclick="cycleStatus(this)">On Hold</td>
        <td class="risk high" onclick="cycleRisk(this)">High</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Refactoring</td>
        <td class="feature-type maintenance" onclick="cycleFeatureType(this)">Maintenance</td>
        <td>Carrie King</td>
        <td class="status in-process" onclick="cycleStatus(this)">In Process</td>
        <td class="risk high" onclick="cycleRisk(this)">High</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Bug Fixing</td>
        <td class="feature-type maintenance" onclick="cycleFeatureType(this)">Maintenance</td>
        <td>Carrie King</td>
        <td class="status done" onclick="cycleStatus(this)">Done</td>
        <td class="risk none" onclick="cycleRisk(this)">None</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Documentation Update</td>
        <td class="feature-type documentation" onclick="cycleFeatureType(this)">Documentation</td>
        <td>Erica Mitchell</td>
        <td class="status on-hold" onclick="cycleStatus(this)">On Hold</td>
        <td class="risk medium" onclick="cycleRisk(this)">Medium</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Release Preparations</td>
        <td class="feature-type deployment" onclick="cycleFeatureType(this)">Deployment</td>
        <td>Harris Davies</td>
        <td class="status in-process" onclick="cycleStatus(this)">In Process</td>
        <td class="risk medium" onclick="cycleRisk(this)">Medium</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
      <tr>
        <td>Cross-platform Test</td>
        <td class="feature-type testing" onclick="cycleFeatureType(this)">Testing</td>
        <td>Natalia Perez</td>
        <td class="status in-process" onclick="cycleStatus(this)">In Process</td>
        <td class="risk medium" onclick="cycleRisk(this)">Medium</td>
        <td><input type="text" class="comment-input" placeholder="-"></td>
      </tr>
    </tbody>
  </table>
</div>

<script>
  const statusOptions = ['done', 'in-process', 'on-hold'];
  const featureTypeOptions = ['planning', 'design', 'development', 'testing', 'maintenance', 'documentation', 'deployment'];
  const riskOptions = ['none', 'low', 'medium', 'high'];

  function cycleStatus(element) {
    let currentStatus = element.classList[1];
    let currentIndex = statusOptions.indexOf(currentStatus);
    let nextIndex = (currentIndex + 1) % statusOptions.length;
    let nextStatus = statusOptions[nextIndex];

    element.classList.remove(currentStatus);
    element.classList.add(nextStatus);
    element.innerText = nextStatus.replace('-', ' ').replace(/\b\w/g, (c) => c.toUpperCase());
    
    updateProgress();
  }

  function cycleFeatureType(element) {
    let currentFeatureType = element.classList[1];
    let currentIndex = featureTypeOptions.indexOf(currentFeatureType);
    let nextIndex = (currentIndex + 1) % featureTypeOptions.length;
    let nextFeatureType = featureTypeOptions[nextIndex];

    element.classList.remove(currentFeatureType);
    element.classList.add(nextFeatureType);
    element.innerText = nextFeatureType.replace(/\b\w/g, (c) => c.toUpperCase());
  }

  function cycleRisk(element) {
    let currentRisk = element.classList[1];
    let currentIndex = riskOptions.indexOf(currentRisk);
    let nextIndex = (currentIndex + 1) % riskOptions.length;
    let nextRisk = riskOptions[nextIndex];

    element.classList.remove(currentRisk);
    element.classList.add(nextRisk);
    element.innerText = nextRisk.replace(/\b\w/g, (c) => c.toUpperCase());
  }

  function updateProgress() {
    let totalTasks = document.querySelectorAll('.status').length;
    let doneTasks = document.querySelectorAll('.status.done').length;
    let progressPercentage = (doneTasks / totalTasks) * 100;

    document.querySelector('.progress-bar').style.width = progressPercentage + '%';
    document.querySelector('.progress-text').innerText = Math.round(progressPercentage) + '%';
  }

  updateProgress();
</script>
</body>
</html>
