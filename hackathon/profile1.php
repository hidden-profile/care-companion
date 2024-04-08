<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <style>
        /* CSS for Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

/* Add more styling as needed */
/* Styles for the main container */
.main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Styles for the header container */
.header {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Styles for the "Edit Your Profile" section */
.edit-profile-section {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 20px;
}

/* Center align text and elements */
.text-center {
    text-align: center;
}

/* Center align the "Edit Your Profile" heading */
.edit-profile-heading {
    font-size: 24px;
    font-weight: bold;
}

/* Style the links */
a {
    color: #007BFF;
    text-decoration: none;
}

/* Style the links on hover */
a:hover {
    text-decoration: underline;
}
<?php 
$user="gayathri";



    </style>
    
    <script>
    function openStatusModal() {
        var modal = document.getElementById("statusModal");
        modal.style.display = "block";
    }
    
    // Close the status edit modal
    function closeStatusModal() {
        var modal = document.getElementById("statusModal");
        modal.style.display = "none";
    }
    
    // Update the user's status
    function updateStatus() {
        var newStatus = document.getElementById("newStatus").value;
        var statusElement = document.getElementById("status");
        
        // Update the status element with the new status
        statusElement.innerText = newStatus;
        
        // Close the status edit modal
        closeStatusModal();
    }
    </script>
</head>
<body>
    <div class="main">
        <h1 align="center">CARERECIPIENT PROFILE</h1>
        <div class="container" align="center">
          <div class="header">
            <h2>DETAILS</h2>
            <strong>Profile Picture:</strong>
            <br />
            <img src="profile.jpg" />
            <p><strong>Name:</strong> Aiden</p>
            <p><strong>Email:</strong> aidens2@example.com</p>
            <p>
              <strong>Aadhar Card:</strong>
              <a href="aadhar.pdf" target="_blank">View Aadhar</a>
            </p>
            <p><strong>Phone Number:</strong> 8189733579</p>
            <p><strong>Location:</strong> 123 Main Street, City</p>
            <p><strong>Age:</strong> 30</p>
            <p>
              <strong>Timings:</strong> Available Monday to Friday, 9 AM to 5 PM
            </p>
            <p><strong>Salary:</strong> $2,500 per month</p>
          </div>
        </div>
      
      <div align="center" class="container">
    <h3>Edit Your Profile</h1>
    
    <!-- Edit Status Button -->
    <button id="editStatusBtn" onclick="openStatusModal()">Edit Status</button>
    
    <!-- Profile Status -->
    <p><strong>Status:</strong> <span id="status">I'm available</span></p>
    
    <!-- Modal for Editing Status -->
    <div id="statusModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeStatusModal()">&times;</span>
            <h2>Edit Status</h2>
            <textarea id="newStatus" placeholder="Enter your new status"></textarea>
            
            <button onclick="updateStatus()">Save</button>
        </div>
    </div>
    <button value="logout">Logout</button>
    </div>
    </div>
    
   
</body>
</html>